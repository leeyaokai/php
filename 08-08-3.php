<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form3</title>
</head>
<body>
    <?php
     $ans = $_POST['ans'].','.$_POST['date'].','.$_POST['Job'];
     ?>

 <form action="08-08-4.php" method="post">
        <select multiple="multiple"  name = "interest[]" size="4">
        <option value ="music">music</option>
        <option value ="study">study</option>
        <option value="reading">reading</option>
        <option value="dancing">dencing</option>
        </select>

        <input type="hidden" name="ans" value="<?php echo $ans  ?>"/>
         <input type="submit" name="submit" />
</form>

</body>
</html>