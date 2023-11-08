<?php
if (!isset($_POST['vraag_1'])) {
    header('location:index.php');
    die();
}

// Weten we zeker dat het form is ingevuld
// Voor alle vragen tellen we de values bij elkaar op (voorbeeld: 5, of -5 of -3 of 0)
$score = array_sum($_POST);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Show table with $_POST Variables -->
    <table>
        <!-- Php shorthand foreach on every post property -->
        <tr>
            <th>
                Question
            </th>
            <th>
                Answer
            </th>
        </tr>
        <?php foreach ($_POST as $key => $value) : ?>
            <tr>
                <td>
                    <?php echo $key; ?>
                </td>
                <td>
                    <?php echo $value; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h1>
        Your score is: <?php echo $score; ?>
    </h1>
</body>

</html>