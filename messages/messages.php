<?php

  ob_start();
  session_start();

if($_SESSION['name']!='oasis'){  //validating session
  
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Humaun Kabir</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>

    <div class="container" style="width: 800px;">

      <h3>Messages |  <a href="logout.php">Logout</a></h3>

    <table border="1">

      <tr>
        <th>Time</th>
        <th>Message</th>
      </tr>

   <?php

     $i=0;

          $st = mysqli_connect('localhost','root','');

          mysqli_select_db($st,'msg');
          mysqli_set_charset($st,'utf8');
          
          $all_query = mysqli_query($st,"select timestamp,content from messages");    //reading messages from database "messages"
     
     while ($data = mysqli_fetch_array($all_query)) {  //printing messages and time
            $i++;

     ?>

     <tr>
       <td><?php echo $data['timestamp']; ?></td>
       <td><?php echo $data['content'];  ?></td>
     </tr>

     <?php }  ?>

    </table>



    </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>