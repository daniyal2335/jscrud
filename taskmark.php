<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet Generator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $subjects = $_POST["subjects"];
    $totalMarks = $_POST["total_marks"];

    // Split subjects and total marks into arrays
    $subjectArray = explode(",", $subjects);
    $marksArray = explode(",", $totalMarks);

    // Calculate total marks and percentage
    $totalObtainedMarks = array_sum($marksArray);
    $percentage = ($totalObtainedMarks / (count($subjectArray) * 100)) * 100;

    // Determine grade based on percentage
    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'Fail';
    }
    ?>
    <h2>Mark Sheet for <?php echo $name; ?></h2>
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>Marks Obtained</th>
        </tr>
        <?php
        // Display subject-wise marks in a table
        for ($i = 0; $i < count($subjectArray); $i++) {
            ?>
            <tr>
                <td><?php echo $subjectArray[$i]; ?></td>
                <td><?php echo $marksArray[$i]; ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td>Total Marks Obtained</td>
            <td><?php echo $totalObtainedMarks; ?></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><?php echo number_format($percentage, 2) . '%'; ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $grade; ?></td>
        </tr>
    </table>
    <?php
}
?>

<!-- HTML form to input data -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="subjects">Subjects (comma-separated):</label>
    <input type="text" name="subjects" required><br>

    <label for="total_marks">Total Marks (comma-separated):</label>
    <input type="text" name="total_marks" required><br>

    <input type="submit" value="Generate Mark Sheet">
</form>

</body>
</html>

