<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>
 
</head>
<body>
<form action="08-08-3.php" method="post">

  <select name="Job">

     <option value ="Student">Student</option>
     <option value ="Teacher">Teacher</option>
     <option value="Police">Police</option>
     <option value="Engineer">Engineer</option>

  </select>

  <input type="text" name="date" id="thedate"/>    
  
   <?php  $ans=$_POST['Name'].",".$_POST['password'];?>

   <input type="hidden" name="ans" value="<?php echo $ans  ?>"/>
 <input type="submit" name="submit" />
</body>
</html>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
      $(function(){
    $('#thedate').datepicker({
                dateFormat: 'yy-mm-dd'
    });
});
  </script>