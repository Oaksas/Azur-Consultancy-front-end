<?php
      // require('indexMain.php');
     session_start();

     if(!isset($_SESSION["email"])){
        header("Location:indexMain.php");

    }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="Assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



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

        <div id="user">

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

      <div class="container  container_one px-5  py-5 my-5 mb-5 " data-aos="fade-up-right">
        <div class="row">
          <div class="col-md-12">
      
            <div class="accordion  accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      
                    <h5>
      
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="48" height="48"
                      viewBox="0 0 172 172"
                      style=" fill:#000000;"><defs><linearGradient x1="70.52" y1="9.60333" x2="134.39292" y2="73.47625" gradientUnits="userSpaceOnUse" id="color-1_xWrA0iOIFz2f_gr1"><stop offset="0" stop-color="#2ecc71"></stop><stop offset="1" stop-color="#195bbc"></stop></linearGradient><linearGradient x1="12.45925" y1="33.95925" x2="29.74883" y2="51.24883" gradientUnits="userSpaceOnUse" id="color-2_xWrA0iOIFz2f_gr2"><stop offset="0.003" stop-color="#42a3f2"></stop><stop offset="1" stop-color="#42a4eb"></stop></linearGradient><linearGradient x1="70.52" y1="52.60333" x2="134.39292" y2="116.47625" gradientUnits="userSpaceOnUse" id="color-3_xWrA0iOIFz2f_gr3"><stop offset="0" stop-color="#2ecc71"></stop><stop offset="1" stop-color="#195bbc"></stop></linearGradient><linearGradient x1="12.45925" y1="76.95925" x2="29.74883" y2="94.24883" gradientUnits="userSpaceOnUse" id="color-4_xWrA0iOIFz2f_gr4"><stop offset="0" stop-color="#42a3f2"></stop><stop offset="1" stop-color="#42a4eb"></stop></linearGradient><linearGradient x1="70.52" y1="95.60333" x2="134.39292" y2="159.47625" gradientUnits="userSpaceOnUse" id="color-5_xWrA0iOIFz2f_gr5"><stop offset="0" stop-color="#2ecc71"></stop><stop offset="1" stop-color="#195bbc"></stop></linearGradient><linearGradient x1="12.45925" y1="119.95925" x2="29.74883" y2="137.24883" gradientUnits="userSpaceOnUse" id="color-6_xWrA0iOIFz2f_gr6"><stop offset="0" stop-color="#42a3f2"></stop><stop offset="1" stop-color="#42a4eb"></stop></linearGradient><linearGradient x1="100.33333" y1="136.16667" x2="172" y2="136.16667" gradientUnits="userSpaceOnUse" id="color-7_xWrA0iOIFz2f_gr7"><stop offset="0" stop-color="#21ad64"></stop><stop offset="1" stop-color="#088242"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M154.08333,53.75h-100.33333c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h100.33333c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-1_xWrA0iOIFz2f_gr1)"></path><path d="M25.08333,53.75h-7.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h7.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-2_xWrA0iOIFz2f_gr2)"></path><path d="M154.08333,96.75h-100.33333c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h100.33333c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-3_xWrA0iOIFz2f_gr3)"></path><path d="M25.08333,96.75h-7.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h7.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-4_xWrA0iOIFz2f_gr4)"></path><path d="M154.08333,139.75h-100.33333c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h100.33333c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-5_xWrA0iOIFz2f_gr5)"></path><path d="M25.08333,139.75h-7.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h7.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-6_xWrA0iOIFz2f_gr6)"></path><circle cx="38" cy="38" transform="scale(3.58333,3.58333)" r="10" fill="url(#color-7_xWrA0iOIFz2f_gr7)"></circle><path d="M137.95833,154.08333h-3.58333c-0.989,0 -1.79167,-0.80267 -1.79167,-1.79167v-32.25c0,-0.989 0.80267,-1.79167 1.79167,-1.79167h3.58333c0.989,0 1.79167,0.80267 1.79167,1.79167v32.25c0,0.989 -0.80267,1.79167 -1.79167,1.79167z" fill="#ffffff"></path><path d="M118.25,137.95833v-3.58333c0,-0.989 0.80267,-1.79167 1.79167,-1.79167h32.25c0.989,0 1.79167,0.80267 1.79167,1.79167v3.58333c0,0.989 -0.80267,1.79167 -1.79167,1.79167h-32.25c-0.989,0 -1.79167,-0.80267 -1.79167,-1.79167z" fill="#ffffff"></path></g></g></svg>
                                        <span id="title"> Colleges</span>
                      </h5>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body row">
                    <div class = "col-2">
      <strong>No</strong>
                    </div>
                    <div class = "col-8">
                      <strong>University</strong>
                    </div>
                   <div class = "col-1">
                    <strong>Acronym</strong>
      
                                 </div>
                  <div class = "col-1">
                  <strong>Rank</strong>
    
                                </div>
      
                      
      
                  </div>
      
                  <div class="accordion-body collectionRegion">
      
                    </div>
                    
      
                  </div>
      
                </div>
              </div>  
            </div>
      
      
      
            
          </div>
          </div>

   


   <!-- the footer part -->
   <footer class="footer_link mt-5 " style="margin-bottom: -100px;">
    <div class="page-footer bg-dark text-white">

       <!-- the contact information -->
     <div class="row text-left mx-5 py-5 px-3 ">
       <div class="col-md-3">
        <a href="index.php">          <h3 class="mx-2 text-success">Azur Consultancy</h3></a> 
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
       <div class="col-md-3">
         <p class="text-uppercase footer_header">guidance</p>
         <hr class="bg-light mt-0 ml-0" style="width: 7rem; height: 0.1rem;">
           <ul class="list-unstyled ml-5">
               <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Build Your schoole List</a> </li>
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


       <div class="col-md-3">
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
  <script src="Assets/JS/collegesByScience.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
