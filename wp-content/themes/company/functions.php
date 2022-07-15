<?php
// create menu
add_theme_support('menus');
register_nav_menus(
  array(
    'main-nav' => 'main menu',
    'header-nav' => 'header menu',
    'footer-nav' => 'footer menu'
  )
);

// classic editor
add_filter('use_block_editor_for_post', '__return_false', 1);

// feature images
add_theme_support( 'post-thumbnails' );

// [API] load acf
function acf_to_rest_api($response, $post, $request) {
  if (!function_exists('get_fields')) return $response;

  if (isset($post)) {
      $acf = get_fields($post->id);
      $response->data['acf'] = $acf;
  }
  return $response;
}
add_filter('rest_prepare_post', 'acf_to_rest_api', 10, 3);

// [API] load feature images
function post_featured_image_json( $data, $post, $context ) {
  $featured_image_id = $data->data['featured_media']; // get featured image id
  $featured_image_url = wp_get_attachment_image_src( $featured_image_id, 'original' ); // get url of the original size

  if( $featured_image_url ) {
    $data->data['featured_image_url'] = $featured_image_url[0];
  }

  return $data;
}
add_filter( 'rest_prepare_post', 'post_featured_image_json', 10, 3 );

// [API] get category
function wpse_287931_get_categories_names( $object, $field_name, $request ) {
  $formatted_categories = '';
  $categories = get_the_category( $object['id'] );
  foreach ($categories as $category) {
    $formatted_categories = $category->slug;
  }
  return $formatted_categories;
}
function wpse_287931_register_categories_names_field() {
  register_rest_field(
      array('post'),
      'categories_names',
      array(
          'get_callback'    => 'wpse_287931_get_categories_names',
          'update_callback' => null,
          'schema'          => null,
      )
  );
};
add_action( 'rest_api_init', 'wpse_287931_register_categories_names_field');

// [API] date format
function api_date_format() {
  register_rest_field(
      array('post'),
      'formatted_date',
      array(
          'get_callback'    => function() {
              return get_the_date();
          },
          'update_callback' => null,
          'schema'          => null,
      )
  );
};
add_action('rest_api_init', 'api_date_format');

// remove margin top
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// smtp

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->SMTPAuth   = SMTP_AUTH;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From       = SMTP_FROM;
	$phpmailer->FromName   = SMTP_NAME;
}


// define( 'SMTP_username', 'haotv@icd-vn.com' );  // username of host like Gmail
// define( 'SMTP_password', 'ylhumchxkdhxvkit' );   // password for login into the App
// define( 'SMTP_server', 'smtp.gmail.com' );     // SMTP server address
// define( 'SMTP_FROM', 'haotv@icd-vn.com' );   // Your Business Email Address
// define( 'SMTP_NAME', 'Bánh dừa nướng Thanh Bình' );   //  Business From Name
// define( 'SMTP_PORT', '587' );     // Server Port Number
// define( 'SMTP_SECURE', 'tls' );   // Encryption - ssl or tls
// define( 'SMTP_AUTH', true );  // Use SMTP authentication (true|false)
// define( 'SMTP_DEBUG',   0 );  // for debugging purposes only

// add_action( 'phpmailer_init', 'my_phpmailer_smtp' );
// function my_phpmailer_smtp( $phpmailer ) {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = SMTP_server;
//     $phpmailer->SMTPAuth = SMTP_AUTH;
//     $phpmailer->Port = SMTP_PORT;
//     $phpmailer->Username = SMTP_username;
//     $phpmailer->Password = SMTP_password;
//     $phpmailer->SMTPSecure = SMTP_SECURE;
//     $phpmailer->From = SMTP_FROM;
//     $phpmailer->FromName = SMTP_NAME;
// }

?>