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
     
    setcookie("date",$_POST['date'],time()+3600);
    setcookie("Job",$_POST['Job'],time()+3600);
    
     ?>

 <form action="08-09-4.php" method="post">
        <select multiple="multiple"  name = "interest[]" size="4">
        <option value ="music">music</option>
        <option value ="study">study</option>
        <option value="reading">reading</option>
        <option value="dancing">dencing</option>
        </select>

         <input type="submit" name="submit" />
</form>

</body>
</html>