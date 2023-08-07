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


<body>



 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar d-none" style="z-index: 2000; ">
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="index.php">
          <img src="img/logoo.svg" class="img-fluid" width="140px">
          </a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <i class="fas fa-bars" style="font-size:25px; color: #101024;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php" >Home</a>
              </li>


                  
    <li class="nav-item">
                <a class="nav-link" href="aboutus.php" rel="nofollow"
                >About Us</a>
              </li>



              <li class="nav-item dropdown">
        <a
          class="nav-link dropdown"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
      Services
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      
          <li>
            <a class="dropdown-item" href="ourservices.php">Architectural Drawing</a>
          </li>

          <li>
            <a class="dropdown-item" href="ourservices.php">3D Modelling</a>
          </li>
          <li>
            <a class="dropdown-item" href="ourservices.php"> Building Construction</a>
          </li>

          <li>
            <a class="dropdown-item" href="ourservices.php"> Site Supervision and Landscaping</a>
          </li>

          
    </ul>


        
    <li class="nav-item">
                <a class="nav-link" href="contactus.php" rel="nofollow"
                >Contact Us</a>
              </li>

       
             
        </ul>
      </li>


            </ul>

            
            <form class="d-flex input-group w-auto">
       
            <ul class="navbar-nav w-100 ">
          
            <li class="nav-item ">
                <a class="nav-link" href="#" rel="nofollow" style="font-weight:bold;">
             Request a Quote
                </a>
              </li>
              <li class="nav-item " style="color:black;">
                <a class="nav-link btn btn btn-lg" href="tel:+234 903 441 3186" rel="nofollow" style="font-weight:bold; background-color:red; color:white;">
                  Call Us
                </a>
              </li>
       
            </ul>

</form>

          </div>
        </div>
      </nav>
      <!-- Navbar -->



<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>


<script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


</body>
</html>