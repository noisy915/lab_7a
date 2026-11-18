<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
<?php
$name = "Awang Imran bin Sulaiman";
$matricNo = "AI250065";
$course = "Bachelor of Software Engineering";
$yearOfStudy = "Year 1 (2025/2026 Session)";
$address = "Universiti Tun Hussein Onn Malaysia (UTHM) Main Campus, Parit Raja, Batu Pahat, Johor";
?>
<h2 style="text-align: center;">Student Details</h2>
<table>
    <tr>
        <th>Detail</th>
        <th>Information</th>
    </tr>
    <tr>
        <td><strong>(a) Name</strong></td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td><strong>(b) Matric number</strong></td>
        <td><?php echo $matricNo; ?></td>
    </tr>
    <tr>
        <td><strong>(c) Course</strong></td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td><strong>(d) Year of study</strong></td>
        <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
        <td><strong>(e) Address</strong></td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>