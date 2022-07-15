<?php
get_header();
?>

<?php

$news_args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'cat' => 5,
  'post_status' => 'publish',
  'orderby' => 'ID',
  'order' => 'DESC'
);

$news_query = new WP_Query($news_args);

$category_args = array(
  'taxonomy' => 'category',
  'parent' => 5,
  'number' => 100,
  'hide_empty' => false,
);

$categories = get_terms($category_args);

?>
  <main>
    <section id="news">
      <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" class="pc" alt="">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-sp.jpg" class="sp" alt="">
      </div>
      <div class="content">
        <div class="inner">
          <div class="category">
            <ul>
              <li><a href="#" attr-id="all" class="active">All</a></li>
              <?php foreach($categories as $category) { ?>
                <li><a href="#" attr-id="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <div id="loading"></div>
          <ul class="item" id="news_list"></ul>
        </div>
      </div>
    </section>
  </main>
  <script>
    // render html item
    function renderHTML(datas) {
      let html = '';
      for (const data of datas) {
        if (data.acf) {
          html += `
            <li>
              <a href="${data.link}">
                <div class="thumb"><img src="${data.featured_image_url}" alt="${data.title.rendered}" /></div>
                <div class="text">
                  <h2>${data.title.rendered}</h2>
                  <p><span class="badge ${data.categories_names}">${data.categories_names}</span> - ${data.formatted_date}</p>
                  <p>${data.acf.intro_text}</p>
                </div>
              </a>
            </li>
          `;
        }
      }
      document.getElementById('news_list').innerHTML = html;
    }
    const loader = document.querySelector('#loading');
    function displayLoading() {
      loader.classList.add('display');
    }
    function hideLoading() {
      loader.classList.remove('display');
    }
    let postsUrl = `https://banhduanuongthanhbinh.com/wp-json/wp/v2/posts`;
    fetch(postsUrl)
    .then(res => res.json())
    .then(datas => {
      renderHTML(datas);
    })
    .catch(err => console.error('Error: ', err));
  </script>
  <script>
    var btn = document.querySelectorAll('.category a');
    for (let i = 0; i < btn.length; i++) {
      btn[i].addEventListener('click', function() {
        let id = this.getAttribute('attr-id');
        let params = id === "all" ? '' : `?categories=${id}`;
        let catUrl = `https://banhduanuongthanhbinh.com/wp-json/wp/v2/posts${params}`;
        document.getElementById('news_list').innerHTML = '';
        displayLoading();
        fetch(catUrl)
        .then(res => res.json())
        .then(datas => {
          hideLoading();
          renderHTML(datas);
        })
        .catch(err => console.error('Error: ', err));
      })
    }
  </script>
<?php
get_footer();