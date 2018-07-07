<?php
    
   ob_start();
    
    $st = mysqli_connect('localhost','root','');  //username root,password blank
    mysqli_select_db($st,'msg');  //database name msg
    mysqli_set_charset($st,'utf8'); //encoding utf8 
    

if (isset($_POST['message'])){

    $send = $_POST['message'];  //initializing message
    $stat = mysqli_query($st,"insert into messages(content) values('$send')");  //query for insertion of messages to database table 'messages'
   
    $msg = 'আপনার মেসেজ পাঠানো হয়ে গেছে ...';  //success message
    
  }

?>

<!DOCTYPE html>
<html>
  <!-- Head Started-->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Humaun Kabir</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="css/main.css">

  </head>
<!-- Head Ended-->
  
  <!-- Contents,images,text fields and related things Started-->
  <body>

    <div class="container" style="width: 800px;">
      <div class="row">
      <center><a href="messages/login.php"><strong>Login</strong></a></center>
        <div class="col-xs-12">
          <div class="panel panel-default">
            <div class="panel-body">
             
              <form action="" method="POST" role="form" id="form" accept-charset="utf-8">
                <legend><strong>যা ইচ্ছা লিখে ফেলেন আমাকে - হুমায়ূন কবীর</strong></legend>
              
                <div class="form-group">

                  <label for="">গঠনমূলক কিছু কিংবা আপনার ইচ্ছা মত</label>
                  <textarea name="message" class="form-control" rows="5" maxlength="700" placeholder="এখানে আপনার কথাগুলো লিখুন..." required autofocus></textarea>
                </div>
              
                <button type="submit" name="send" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> পাঠান</button>

              </form>


            </div>
          </div>
        </div>
      </div>

      <center>
        
        <?php if(isset($msg)){

         //printing success message
         echo $msg;

         ?>
         
         <p><a href="index.php"> আবার পাঠান ।</a></p>
         
         <?php  } ?>
    
    </center>
    
    </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
  <!-- Contents,images,text fields and related things Ended-->

</html>