<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Preferences</title>
</head>
<body>
    <h1>Set Your Preferences</h1>
    <form action="set_preferences.php" method="post">
        <label for="color">Choose a background color:</label>
        <select name="color" id="color">
            <option value="white">White</option>
            <option value="lightblue">Light Blue</option>
            <option value="lightgreen">Light Green</option>
        </select>
        <br><br>
        <label for="font">Choose a font size:</label>
        <select name="font" id="font">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br><br>
        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>