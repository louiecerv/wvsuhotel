<?php
// Check if cookies are set, and if so, use them
$background_color = isset($_COOKIE['color_preference']) ? $_COOKIE['color_preference'] : 'white';
$font_size = isset($_COOKIE['font_preference']) ? $_COOKIE['font_preference'] : 'medium';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personalized Page</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($background_color); ?>;
            font-size: <?php echo htmlspecialchars($font_size); ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to Your Personalized Page</h1>
    <p>Your preferences are being saved using cookies. Reload the page to see your chosen settings in effect.</p>
    <a href="preferences.php">Change Preferences</a>
</body>
</html>