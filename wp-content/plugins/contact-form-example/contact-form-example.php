<?php
/**
 * Plugin Name: Bánh dừa nướng Thanh Bình Contact
 */

function contact_form_example() {
  $content = '';
  $content .= '
    <form method="post" action="https://banhduanuongthanhbinh.com/thank-you/">
      <label for="name">Họ Tên</label>
      <input id="name" type="text" name="your_name">
      <label for="phone">Số điện thoại</label>
      <input id="phone" type="number" name="your_phone">
      <label for="description">Lời nhắn</label>
      <textarea id="description" name="your_message" cols="30" rows="10"></textarea>
      <button class="btn" name="submit" type="submit">Gửi</button>
    </form>
  ';

  return $content;
};
add_shortcode('example_form', 'contact_form_example');

function contact_form_capture() {
  if (isset($_POST['submit'])) {
    $name = $_POST['your_name'];
    $phone = $_POST['your_phone'];
    $message = $_POST['your_message'];

    $to = 'duykhanh278.nguyen@gmail.com';
    $subject = 'Cần mua bánh dừa';
    $body = 'Thông tin người liên hệ: ' .$name.' '. $phone .' '. $message;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $sent = wp_mail($to, $subject, $body, $headers);
    // if($sent) {
    //   echo "message sent";
    // }
    // else  {
    //   echo "message wasn't sent";
    // }
  }
};
add_action('wp_head', 'contact_form_capture');
?>