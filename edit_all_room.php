<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

$id=$_GET['id'];

$sql="SELECT * FROM rooms WHERE room_id='$id'";
$query=mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->edit_all_room($checkin, $checkout, $name, $phone, $book, $id);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('".$result."');
         </script>";
    }

   
} 
?>


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Resort Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
  <style>
  body {
            background-image: url('images/home_bg1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
         .imgtext 
        {
            position: relative;
        }

       
        .card-body 
        {
          z-index: 2;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
          padding-left: 20px;
          padding-right: 20px;
        }
        h2 
        {
          text-align: center;
          color: white ;
        }
        h3 
        {
          text-align: center;
          color: black ;
        }

        </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>

    
</head>

<body>
    <div class="container">
      
      
       <div class="imgtext">
        <img src="images/home_banner1.jpg" alt="Norway" style="width:100%; height:180px;">
        <div class="card-body text-white">
            <h2> Resort Booking</h2>
            
        </div>
        </div>      
        

      <div class="well">
            <h3>EDIT</h3>
          <h3><?php echo  $row['room_cat']?></h3>
            <hr>
            <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkin" value="<?php echo $row['checkin']?>">

                </div>
               
               <div class="form-group">
                    <label for="checkout">Check Out:</label>&nbsp;
                    <input type="text" class="datepicker" name="checkout" value="<?php echo $row['checkout']?>">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>" required>
                </div>

                <div class="form-group">
                    <label for="book">Book Status:</label>
                    <input type="text" class="form-control" name="book" value="<?php echo $row['book']?>" required>
                </div>
                 
               
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>

               <br>
                <div id="click_here">
                    <a href="admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
        
        



    </div>
    
    
    
    
    






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>

</html>