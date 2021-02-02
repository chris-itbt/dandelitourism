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
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
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
                    <li class="active"><a href="book.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>

     
        
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/7.jpeg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/8.jpeg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/16.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/12.jpg" style="width:100%; height:450px;">
        </div>    
    
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h4><strong style="color: #ffbb2b">About</strong></h4><br>
              <p>Dandeli is a town in the western Indian state of Karnataka. The Dandeli Wildlife Sanctuary, with its trails and dense forests, is home to animals including black panthers, monkeys and elephants, as well as many bird species. A temple stands at the entrance to the limestone Kavala Caves, known for their stalagmite formations. West of the caves, Anshi National Park encompasses the Kali Tiger Reserve</p>
              
              
            </div>  
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Address : Dandeli Karnataka<br>
              Mail : dandelitpurism@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a href="#">Christopher</a>

            </div>
        </div>
        



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>