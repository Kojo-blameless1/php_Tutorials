


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form1, .form2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST["submit1"])) {
        $number_of_students = filter_var($_POST["num"], FILTER_VALIDATE_INT);
        if ($number_of_students > 0) {
            ?>
            <form action="" method="post">
                <?php for ($i = 1; $i <= $number_of_students; $i++) { ?>
                    <div class="form2">
                        <label for="name<?= $i ?>">Enter Name <?= $i ?></label>
                        <input type="text" name="name<?= $i ?>" required>
                        <label for="id" >Students index Number</label>
                        <input type="text" name="student_id" required>
                    </div>
                <?php } ?>
                <input type="submit" name="submit" value="submit">
            </form>
            <?php
        } else {
            echo "Invalid number of students";
        }
    } else {
        ?>
        <form action="" method="post">
            <div class="form1">
                <label for="num">Enter number of students</label>
                <input type="number" name="num" required>
                <input type="submit" name="submit1" value="submit1">
            </div>
        </form>
        <?php
    }
    ?>
</body>
</html>


