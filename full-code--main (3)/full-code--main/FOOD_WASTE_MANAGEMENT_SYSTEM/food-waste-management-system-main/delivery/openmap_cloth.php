<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Current Location on Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <link rel="stylesheet" href="../home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />
    <!-- <link rel="stylesheet" href="delivery.css"> -->
    <style>
      
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
   
      /* Add some basic styling to the map container */
      #map-container {
        width: auto;
        height: 300px;
        margin:auto;
        margin:10px 20px 10px 20px;
        z-index: 2;
      }
      #contain{
        font-family: 'Poppins', sans-serif;
        margin: auto;
        align-items: center;
        text-align: center;
      }
      .nav-bar a{
        background:#06C167;
      }
      @media screen and (max-width: 600px) {
       #map-container {
       height: 200px;
       }
      }
    </style>
  </head>
  <body>
    
  <header>
        <div class="logo">Food <b style="color: #06C167;">Donate</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="delivery_cloth.php">Home</a></li>
                <li><a href="#" class="active">map</a></li>
                <li><a href="deliverymyord_cloth.php" >Accepted_Request</a></li>
                <li><a href="delivery_first.php" >Volunteer_Home_page</a></li>
                <li><a href="../index.html" class="active">Home_page</a></li>
                <!-- <li ><a href="fooddonate.html"  >Donate</a></li> -->
            </ul>
        </nav>
    </header>
    <br>
    <script>
        hamburger=document.querySelector(".hamburger");
        hamburger.onclick =function(){
            navBar=document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
    <div id="contain">
    <h1> Current Location </h1>
  
    <br>
    <!-- <h3>Ip address details</h3>
    <p>Your IP address : <span id="ip"></span></p>
    <table style="margin:auto">

  <tr>
    <td>Ip version</td>  
    <td>:</td>
    <td id="version"></td>
  </tr>
    <tr><td>your country </td>  
    <td>:</td>
    <td id="country"></td>
  </tr>
  </table> -->
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.160969358801!2d77.76149367510277!3d20.946049880682647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a35c932b0c65%3A0x2d3eac241b72e890!2z4KS24KS-4KS44KSV4KWA4KSvIOCkpOCkguCkpOCljeCksOCkqOCkv-CkleClh-CkpOCkqCDgpIXgpK7gpLDgpL7gpLXgpKTgpYA!5e0!3m2!1smr!2sin!4v1706949791672!5m2!1smr!2sin" width="1500" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



     </body>
</html>
