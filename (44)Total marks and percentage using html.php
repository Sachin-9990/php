WAP in php to enter makrs of 5 subject ,total and marks in percentage in well structured html tabular format
<?php
// Array of subjects and their respective marks
$subjects = [
    "Maths" => 100,
    "English" => 88,
    "Science" => 90,
    "History" => 98,
    "Geography" => 92
];

// Calculate total marks and percentage
$totalMarks = array_sum($subjects);
$maxMarks = 500; // Assuming each subject is out of 100
$percentage = ($totalMarks / $maxMarks) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

   <h2>Marks of Aaryan</h2>

    <table>
        <tr>
            <th>SR</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>

        <?php
        $sr = 1; // Serial number start
        foreach ($subjects as $subject => $marks) {
            echo "<tr>
                    <td>{$sr}</td>
                    <td>{$subject}</td>
                    <td>{$marks}</td>
                  </tr>";
            $sr++;
        }
        ?>

        <tr class="total">
            <td colspan="2">Total Marks</td>
            <td><?php echo $totalMarks; ?></td>
        </tr>
        <tr class="total">
            <td colspan="2">Percentage</td>
            <td><?php echo number_format($percentage, 2); ?>%</td>
        </tr>
    </table>

"This Program is written by Sachin Waghela 0221BCA025"

</body>
</html>
