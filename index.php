<?php
      // require('indexMain.php');
     session_start();

     if(!isset($_SESSION["email"])){
        header("Location:indexMain.php");

    }
 
?>

<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <link rel="stylesheet" href="Assets/CSS/style.css">


   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Consultancy</title>


  </head> 
  <body>
  <nav class="navbar navbar-expand-lg navbar-light px-5" >
      <div class="container-fluid " >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-0 mr-auto " href="index.php"><img src="Assets/Images/logo.png" width="200px" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-5 mb-lg-0" id="topUl">
            <!-- for the university -->
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Universities
              </a>
              <ul class="dropdown-menu drop-down-links1" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item my-2" href="collegeList.php" target="_BLANK">University List</a></li>
                <li><a class="dropdown-item my-2" href="collegeListPersonal.php">Your Personal List</a></li>
              </ul>
            </li>
            <!-- ends unuversity -->
            <li class="nav-item">
              <a class="nav-link" href="QA.php">Q & A</a>
            </li>
    
  <li class="nav-item dropdown menu-area d-none d-lg-block" id="megaMenu">
    <a class="nav-link dropdown-toggle" href="#"  id="ellipsis" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fas fa-ellipsis-h"></i>
    </a>
    <ul class="dropdown-menu drop-down-links"  aria-labelledby="navbarDropdown" >
       <div class="container drop-down-page">
      <!-- collegues part -->
      <div class="row text-left mx-5 py-5  ">
      <div class="col-sm-6 col-lg-3" >
      <p class="text-uppercase drop-header mx-3 ">Find School</p>
      <hr class="text-black" >
      <ul class="list-unstyled pl-0 ml-0">
      <li class="dropdown-item my-2"><a class="text-info" href="CalculateChance.php">Calculate your chance</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByEngineering.php"> Collages for Engineering</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByMedicine.php">Collages for  Medicine</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByBusiness.php">Collages for Business</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Addis Ababa">Collages in Addis Ababa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Oromia">Collages in Oromia</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Amhara">Collages in Amhara</a> </li>
      
      </ul>
      </div>

      <!-- guidance -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">guidance</p>
      <hr class="text-black" >

      <ul class="list-unstyled ml-5">
        <li class="dropdown-item my-2"><a class="text-info" href="collegeList.php">Find school</a> </li>
        
        
      </ul>
      </div>

      <!-- more resorces -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">Quick Links</p>
      <hr class="text-black" >
      <ul class="list-unstyled ml-5">
      <li class="dropdown-item my-2"><a class="text-info" href="inspire.php">Inspirational Advice</a> </li>
     
      </ul>
      </div>

      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">about</p>
      <hr class="text-black" >
      <ul class="list-unstyled">
        
        <li class="dropdown-item my-2"><a class="text-info" href="about.php">About Us</a> </li>
        <li class="dropdown-item my-2"><a class="text-info" href="contact.php">Contact Us</a> </li>
      </ul>
      </div>
      </div>
      </div>
    </ul>
  </li>
          </ul>
        </div>
        <img src="https://img.icons8.com/fluent/20/000000/person-male.png"/>

        <div>

<?php

if(isset($_SESSION["email"])){
echo $_SESSION["email"];
}
?>

</div>
<div class="nav-item mx-2">
  
  <a class="btn btn-outline-dark mx-0" id="loginBtn" href="indexMain.php? id=2">
    
<?php

if(isset($_SESSION["email"])){
echo "Logout";
}

?>


  
  </a>
  
</div>

      </div>
    </nav>
   
    <hr class="text-black" >


        <!-- below the navbar -->
      <div class="container my-5 pt-5">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4">
              <p style="font-size: 30px; color: black;" >Expert college advising — for free.</p>
          <a href="#middle">    <button class="btn btn-primary mb-4">Get started today - it is free</button></a>

              <!-- the accordion part which is edited later -->
              <div class="accordion accordion-flush mb-5 " id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     Calculate your chances
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse p-1" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">
                      Calculate your chances of getting into your dream school.

                     </div>
                    <div class="accordion-body"> <a href="CalculateChance.php">Learn more..</a> </button>
                    </div>
                  </div>
                </div>
                
              </div>
          </div>

          <!-- the accordion part ends here -->

         <!-- the image part which the texts are hovering over -->
          <div class="col-md-6 mx-3 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-aos="fade-up"
            data-aos-duration="3000">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 img-fluid rounded" src="Assets/Images/collegeFrontImg1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid d-block w-100 rounded  " src="Assets/Images/collegeFrontImg2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="Assets/Images/collegeFrontImg3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="Assets/Images/collegeFrontImg4.png" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="Assets/Images/collegeFrontImg5.png" alt="Fifth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
              </div>
          </div>
        </div>
      </div>
      <!-- the image field ends here -->
       
      <!-- the text field below the image fields -->
   <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-6 my-5" data-aos="zoom-out-up">
        <div class="main text-center">
            <h4 class="text-success">We’re bringing free guidance to all students</h4>
            <p class = ' my-3 middleSizedFonts' >Most students don’t get the guidance they need in high school. 
                And this becomes the challenge for most of the students.
                We’re leveling the playing field by offering expert college guidance — all in one 
                free platform.</p>
               <a id="learnHow" href="#more" class="btn btn-light text-primary" >Learn How</a>
          </div>
       </div>
   </div>
      <!-- the text field ends here -->

      <!-- the cards below -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title"><i class="fas fa-stream" ></i> Build and visualize your University list</h6>
                  <p class="card-text">Here you can see the list of all the university in Ethiopia</p>
                  <a id="card1" href="collegeListPersonal.php" class="btn btn-outline-primary btn-sm">Get started</a>
                </div>
              </div>
          </div>
          <div class="col-md-4" id="middle" >
            <div class="card" >
                <div class="card-body">
                  <h6 class="card-title"><i class="fas fa-business-time"></i> Time sometimes matter quality</h6>
                  <p class="card-text">Here you can find Organized list of universities in chronological order.
                </p>
                  <a id="card1" href="collegeList.php#age" class="btn btn-outline-primary btn-sm">try it now</a>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="card" >
                <div class="card-body">
                  <h6 class="card-title"><i class="fas fa-trophy"></i> Go to the best</h6>
                  <p class="card-text">See your change of getting into Ethiopia's NO.1 university; Addis Ababa University</p>
                  <a id="card1" href="collegeList.php#top10" class="btn btn-primary btn-sm">check it out</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 ">

        <div class="container container_one my-5" data-aos="flip-up">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <div class="mt-5 card" style="width: 100%;">
                    <img class="card-img-top" src="Assets/Images/AddisAbabaUniversity.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Your chance of admission</h5>
                      <div class="progress">
                        <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" style="width:70%">50-60%</div>
                      </div>                    </div>
                  </div>
                  
                </div>
                <div class="col-md-5 marks mt-5">
                  <h5>Calculate your admissions chances and <span class="text-primary">see what you can improve.</span></h5>
              <p class="my-3">Your GPA is the major factor in the admission process of most universities and colleges.</p>    
                </div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6 my-5" data-aos="zoom-out-up">
               <div class="main text-center">
                   <h6 class="freeCon" id="more">How is Azur consultancy free? </h6>
                   <p class = ' my-3'>We believe that every student deserves expert guidance.
                      To make that possible, access to the Azur Consultancy platform is free for students.
                  </p>
                  <p class = ' my-3'>There are zero ads on our site and you can rest assured that you are always in control of your personal data.
                  </p>
                      <a id="signupBtn" class="btn btn-dark" href ="indexMain.php">Sign Up</a>
                 </div>
              </div>
          </div>
   
</div>


</div>


   <!-- the footer part -->
  <footer class="footer_link" >
     <div class="page-footer bg-dark text-white">

        <!-- the contact information -->
      <div class="row text-left mx-5 py-5 px-3 ">
        <div class="col-md-3 col-sm-6 my-xs-3">
            <a href="index.php"><h3 class="mx-2 text-success">Azur Consultancy</h3></a> 
         <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
          <a class="m-2" id="email" href="">azurConsultancy@gmail.com</a>
          <div class="row d-flex align-items-left">
            <div class="col-md-12">
                <a href=""><i class="fab fa-instagram fa-2x m-2"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x m-2"></i></a>
                <a href=""><i class="fab fa-twitter fa-2x m-2"></i></a>
                <a href=""><i class="fab fa-linkedin fa-2x m-2"></i></a>
                <a href=""><i class="fab fa-instagram-square fa-2x m-2"></i></a>
            </div>
          </div>
          <p class="m-2">&copy; 2021 azurConsultancy</p>
        </div>

    <!-- guidance -->
        <div class="col-md-3 col-sm-6 my-xs-3">
          <p class="text-uppercase footer_header">guidance</p>
          <hr class="bg-light mt-0 ml-0" style="width: 7rem; height: 0.1rem;">
            <ul class="list-unstyled ml-5">
                <li class="my-2"><a class="text-info" href="index.php">Build Your schoole List</a> </li>
            </ul>
        </div>

             <!-- quick links -->
             <div class="col-md-3">
         <p class="text-uppercase footer_header">Quick Links</p>
         <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
         <ul class="list-unstyled ml-5">
             <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Personal List</a> </li>
             <li class="my-2"><a class="text-info" href="inspire.php">Inspirational Advice</a> </li>
         </ul>
     </div>


        <div class="col-md-3 col-sm-6">
            <p class="text-uppercase footer_header">about</p>
            <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
            <ul class="list-unstyled">
<a href="about.php"><li class="m-2">About us</li></a>
<a href="contact.php"><li class="m-2">Contact us</li></a>


</ul>
        </div>
        </div>
    </div>
  </footer>


  <script>
    AOS.init();
  </script>
  <script src="Assets/JS/style.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</php>
