<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="icon" type="image/jpg" href="images/img3.jpg">
    <link rel="stylesheet" href="dropDown.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Mars_Reservation.css">
    <script src="jquery-2.1.4.min.js"></script>
    <!-- Slideshow javascript beginning --->
    <script>
    var image1=new Image();
    image1.src="images/img1.jpg";
    var image2=new Image();
    image2.src="images/img2.jpg";
    var image3=new Image();
    image3.src="images/img3.jpg";
    var image4=new Image();
    image4.src="images/mation_suit.jpg";
    </script>
    <!-- Slideshow Javascript End--->

</head>
<body>

<label for="show-menu" class="show-menu">Show Menu</label>
<input type="checkbox" id="show-menu" role="button">

<center>
<div class="nav">
<ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li>
        <a href="news.php">News</a>
    </li>
    
    <li><a href="Mars_Reservation2.php">Reservation ￬</a>
        <ul class="hidden">
            <li><a href="#">Make Reservation</a></li>
            <li><a href="#">Edit Reservation</a></li>
        </ul>
    </li>
    <li><a href="contact.php">Contact</a></li>
    <li>
        <a href="About.php">About</a>

    </li>
</ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="width: 75%; height: 100%; float: left">
    <div style="width: 75%; height: 100%; float: right" >
<!--Slideshow Text Beginning--->
<div><img class="leftSpacer" src="images/img1.jpg" name="slide" id="slidePeople" height="500">
    <script type="text/javascript">
        <!--
        var step=1
        function slideit(){
            document.images.slide.src=eval("image"+step+".src")
            if(step<4)
                step++
            else
                step=1
            setTimeout("slideit()",5000)

            if (step == 1 + 1) {
                document.getElementById("mytext").innerHTML = "The rocket the will take you up to the space station.";
            }
            else if (step == 2 + 1) {
                document.getElementById("mytext").innerHTML = "An example of the view from your window of your room.";
            }
            else if (step == 3 + 1) {
                document.getElementById("mytext").innerHTML = "A view of mars from a distance.";
            }
            else{
                document.getElementById("mytext").innerHTML = "The space suit the you will be in when roaming mars.";
            }

        }
        slideit()
    </script>
    <div id="mytext">The rocket the will take you up to the space station.</div>
<!--Slideshow Text Beginning-->

</body>
</html>