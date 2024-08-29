<?php
// Set the cookies for color and font preferences with a one-year expiration
$color = $_POST['color'];
$font = $_POST['font'];

// Set cookies
setcookie('color_preference', $color, time() + (365 * 24 * 60 * 60), "/");
setcookie('font_preference', $font, time() + (365 * 24 * 60 * 60), "/");

// Redirect back to the main page
header("Location: index.php");
exit();
?>