<!doctype html>
<html lang="en">
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

   <!-- <link rel="stylesheet" type="text/css" href="./Assets/CSS/util.css"> -->
   <link rel="stylesheet" type="text/css" href="./Assets/CSS/main.css">
   <!-- <link rel="stylesheet" type="text/css" href="./Assets/CSS/map.css"> -->
   <link rel="stylesheet" href="Assets/CSS/style.css">


   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Consultancy</title>


  </head> 
  <body class="inspireBody">
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
    </nav> <hr class="text-black" >   
        <div class="contact">
            <div class="container-contact">
                <div class="contact-pic">
    
                    <div class="accordion accordion-flush mb-5 " id="calculateAccordion">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
    
                              <p class="text-black text-up">Do you want to contact us? </p>                            
                            </button>
    
                            </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse p-1" aria-labelledby="flush-headingOne" data-bs-parent="#calculateAccordion">
                             <div class="accordion-body">
    
                              <ul id="calList1">
                                <li>
                                  <i class="fas fa-pencil-alt text-success"></i>  Do you want to contact in body? use this map as the reference
                                </li>
                                <li><i class="fas fa-pencil-alt text-success"></i> Do you want to contact and give any suggesions please fill the form
                                  
                                </li>
                              </ul>
                               
                             </div>
                          
                          </div>
                        </div>
                        
                      </div>
                    <!--Google map-->
                        <div id="map-map"  class="z-depth-1-half map-map">
                            <iframe src="https://maps.google.com/maps?q=addis ababa university&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                        </div>              
                </div>
    
                <form  method="POST" action="form.php" >
                    <span class="contact-form-title">
                        Get in touch and collaborate with us
                    </span>
    
                    <div class="wrap-input1 validate-input" data-validate = "Name is required">
                        <input class="input1" id="cname" type="text" name="name" placeholder="Name" required>
                        <span class="shadow-input1"></span>
                    </div>
    
                    <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
                        <input class="input1" id="E-main" type="text" name="email" placeholder="Email" required>
                        <span class="shadow-input1"></span>
                    </div>
    
                    <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                        <input class="input1" id="subject" type="text" name="subject" placeholder="Subject" required>
                        <span class="shadow-input1"></span>
                    </div>
    
                    <div class="wrap-input1 validate-input" data-validate = "Message is required">
                        <textarea class="input1" id="message" name="message" placeholder="Message"></textarea>
                        <span class="shadow-input1"></span>
                    </div>
    
                    <div class="container-contact-form-btn">
                        <button  type="submit"  class="contact-form-btn">
                            <span>
                                Send Email
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
   <!-- the footer part -->
  <footer class="footer_link" >
     <div class="page-footer bg-dark text-white">

        <!-- the contact information -->
      <div class="row text-left mx-5 py-5 px-3 ">
        <div class="col-md-3 col-sm-6 my-xs-3">
            <a href="index.html"><h3 class="mx-2 text-success">Azur Consultancy</h3></a> 
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
                <li class="my-2"><a class="text-info" href="collegeListPersonal.html">Build Your school List</a> </li>
            </ul>
        </div>

         <!-- quick links -->
         <div class="col-md-3">
         <p class="text-uppercase footer_header">Quick Links</p>
         <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
         <ul class="list-unstyled ml-5">
             <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Personal List</a> </li>
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
  <script src="./Assets/JS/contact.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>