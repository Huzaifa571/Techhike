
<?php
  session_start();
include "./config.php";


$contact_email_or_phone = $_POST['contact_email_or_phone'];
$delivery_country = $_POST['delivery_country'];
$delivery_first_name = $_POST['delivery_first_name'];
$delivery_last_name = $_POST['delivery_last_name'];
$delivery_address = $_POST['delivery_address']; 
$delivery_city = $_POST['delivery_city'];
$delivery_postal_code = $_POST['delivery_postal_code'];
$delivery_phone = $_POST['delivery_phone']; 
$save_info =isset( $_POST['save_info']) ? $_POST['save_info'] : null;
$shipping_method = $_POST['shipping_method'];
$payment_method = $_POST['payment_method'];
$billing_address = $_POST['billing_address'];
$product_info = urldecode($_POST['product_info']);

$product_info = mysqli_real_escape_string($connection, $product_info);
  
$currentpage = $_SERVER['HTTP_REFERER'];
  
$encodeuser = json_encode([
    "contact_email_or_phone" => $contact_email_or_phone,
    "delivery_country"       => $delivery_country,
    "delivery_first_name"    => $delivery_first_name,
    "delivery_last_name"     => $delivery_last_name,
    "delivery_address"       => $delivery_address,
    "delivery_city"          => $delivery_city,
    "delivery_postal_code"   => $delivery_postal_code,
    "delivery_phone"         => $delivery_phone,
    "save_info"              => $save_info,
    "shipping_method"        => $shipping_method,
    "payment_method"         => $payment_method,
    "billing_address"        => $billing_address
]);


 
$insert = "INSERT INTO orders (product_info, user_info) 
           VALUES ('$product_info', '$encodeuser')";

mysqli_query($connection, $insert);


$_SESSION['order_done'] = 'ordered Successfully!';

header("Location:  $currentpage")



?>




