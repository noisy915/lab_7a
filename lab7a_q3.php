<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .result { font-size: 1.2em; color: #333; background: #e9ecef; display: inline-block; padding: 15px 25px; border-radius: 5px; }
    </style>
</head>
<body>

<h2>Rectangle Area Calculator</h2>

<?php
// Function to calculate the area of a rectangle
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with sample values (e.g., width of 4 and height of 2)
$width = 4;
$height = 2;
$area = calculateArea($width, $height);
?>

<div class="result">
    <p><?php echo "The area of a rectangle with a width of $width and $height is $area"; ?></p>
</div>

</body>
</html>