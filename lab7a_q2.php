<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q2</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

<h2 style="text-align: center;">Student List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['program']; ?></td>
        <td><?php echo $student['age']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>