<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AAA Planning and Designs</title>
    <link rel="icon" href="img/logoo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />

    <style>

        
body{
    font-family: 'Barlow Semi Condensed';
    
}

      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #000 !important;
      }


      .navbar-nav > li{
  padding-left:10px;
  padding-right:10px;
}

.navbar-nav > li{
  margin-left:20px;
  margin-right:20px;
}

   /* Carousel styling */
   #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }




::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}


/* Style the tab */
.tab {
  overflow: hidden;
  border-bottom: 2px solid orange;
  background-color: #101024;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;

  border: none;
  outline: none;
  cursor: pointer;
  padding: 24px 50px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: orange;
 
  color: black;
}

.tab button{
  color: white;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: orange;
  color: black;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
   
        </style>
</head>


<body style="background-color: #870404;">



      <div class="hero-bg" style="background: url('img/services.svg');   background-position: center; min-height: 800px; height: 800px; background-repeat: no-repeat; background-size: cover;">
<?php include('navbar.php'); ?>

<br>

<div class="container">






<br><br><BR><BR><BR>

<p style="color:white; font-size:18px; text-align:center;"> SERVICES </p>
<h1 class="textwithout animate__animated animate__slideInLeft" style="
font-size: 63px;
    font-weight: 700;
    margin-bottom: 14px;
    color: white;
 text-align:center;
    text-transform: capitalize;
    margin-bottom: 29px; 
"> 

WHAT WE OFFER

    
    </h1>

    


    


    
   
    </div>

    </div>





    <br><br>

<div class="container">

<div class="row">

<div class="col-md-6 mb-3">

<img src="img/service1.svg" class="img-fluid">


</div>



<div class="col-md-6 mb-3">


<img src="img/service2.svg" class="img-fluid">

</div>



<div class="col-md-6 mb-3">

<img src="img/service3.svg" class="img-fluid">


</div>



<div class="col-md-6 mb-3">


<img src="img/service4.svg" class="img-fluid">

</div>

</div>

</div>

<?php include('footer.php'); ?>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
</body>
</html>