<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resort Booking</title>

    <!-- Bootstrap -->
    <link href="images/logo1.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/home_bg1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }
        h5
        {
            color: navajowhite;
            font-family:  monospace;
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
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


    </style>
    
    
</head>

<body>
    <div class="container">
      
        <div class="imgtext">
        <img src="images/home_banner1.jpg" alt="Norway" style="width:100%; height:180px;">
        <div class="card-body text-white">
            <h2> Resort Booking</h2>
            
        </div>
        </div>      

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="book.php">Home</a></li>
                    <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4><hr>
                                <h5>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h5>
                                <h5>Facilities: ".$row['facility']."</h5>
                                <h5>Price: Rs - ".$row['price']." /head.</h5>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button> </a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         "; //echo end
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>