<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Counting to Ten</title>
 </head>
 <body>
 
 
 <p>
 <?php echo $output;
  if (!isset($_POST['firstname'])) {
    include __DIR__ . '/../templates/form.html.php';
 } else {
     $firstName = $_POST['firstname'];
     $lastName = $_POST['lastname'];
     if ($firstName == 'Kevin' && $lastName == 'Yank') {
         $output = 'Welcome, oh glorious leader!';
     } else {
         $output = 'Welcome to our website, ' .
             htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
             htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
     }
 }
 
   
 ?>
 </p>
 <p>
 <?php echo $output; ?>
 </p>

 
 </body>
</html>
