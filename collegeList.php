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
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
   
   <link rel="stylesheet" href="Assets/CSS/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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


   
    
       
      <!-- the text field below the image fields -->
   <div class="row my-5 pt-5">

       <div class="col-md-3"></div>
       <div class="col-md-6 my-5" data-aos="zoom-out-up">
        <div class="main text-center">
          <img class="d-block w-100 img-fluid rounded " id = "listImg" src="Assets/Images/lists_and_rankings.svg"  alt="First slide">

            <h6 class="">College Lists & Rankings</h6>
            
          </div>
       </div>
   </div>
     
      <div class="py-5 ">

        <div class="container  container_one px-5 pb-3 mb-5" data-aos="flip-up">
            <div class="row">
             
              <div class="col-md-8 pt-5">
                
                <h4>Best Colleges by Major
                </h4>
              </div>
            

            </div>
            <div class = "row">
              <div class = "col-lg-12">
                    <h7>Explore the best colleges for your intended major. </h7>
              </div>
              <hr class="text-black mb-2" >

            </div>


            <div class="row mb-4">
              <div class = "col-s-12 col-md-6">
               

                   <a href="./collegeListByArt.php">Art & Humanities</a>
              </div> 
              <div class = "col-s-12 col-md-6">
                <a href="./collegeListByBusiness.php">Business</a>
           </div> 
           

            </div>
            
            <div class="row mb-4">
              <div class = "col-s-12 col-md-6">
                   <a href="./collegeListByMedicine.php">Medicine</a>
              </div> 
            
            </div>
           <div class="row mb-4">
              <div class = "col-s-12 col-md-6">
                   <a href="./collegeListByEngineering.php">Engineering</a>
              </div> 
              <div class = "col-s-12 col-md-6">
                 <a href="./collegeListByScience.php">Sciences</a>
           </div> 
           

            </div>

   
</div>
<div class="container  container_one px-5 py-3 " data-aos="flip-up">

  <div class="row">
    <div class="col-md-12 pt-5">
                
      <h4>Colleges by Region
      </h4>
      <hr class="text-black mb-2" >

    </div>
  

  </div>
  


  <div class="row mb-4">
    <div class = "col-s-12 col-md-6">
         <a href="./collegeListByRegion.php?region=Addis Ababa">Addis Ababa</a>
    </div> 
    <div class = "col-s-12 col-md-6">
      <a href="./collegeListByRegion.php?region=Oromia">Oromia</a>
 </div> 
 

  </div>
  
  <div class="row mb-4">
    <div class = "col-s-12 col-md-6">
         <a href="./collegeListByRegion.php?region=Amhara">Amhara </a>
    </div> 
    <div class = "col-s-12 col-md-6">
      <a href="./collegeListByRegion.php?region=Tigray">Tigray </a>
 </div> 
  </div>
 <div class="row mb-4">
    <div class = "col-s-12 col-md-6">
         <a href="./collegeListByRegion.php?region=SNNPR">SNNPR</a>
    </div> 
   
 

  </div>



</div>

<div class="container  container_one px-5 mt-5 py-2 mb-5 " data-aos="fade-right">

  <div class="row">
    <div class="col-md-12">

      <div class="accordion  accordion-flush" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<h5>
  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
  width="64" height="64"
  viewBox="0 0 172 172"
  style=" fill:#000000;"><defs><linearGradient x1="44.34375" y1="145.31313" x2="44.34375" y2="150.18825" gradientUnits="userSpaceOnUse" id="color-1_L09zAuwGVoGB_gr1"><stop offset="0" stop-color="#d9f7ee"></stop><stop offset="1" stop-color="#2df19b"></stop></linearGradient><linearGradient x1="130.34375" y1="110.87012" x2="130.34375" y2="117.98931" gradientUnits="userSpaceOnUse" id="color-2_L09zAuwGVoGB_gr2"><stop offset="0" stop-color="#d9f7ee"></stop><stop offset="1" stop-color="#2df19b"></stop></linearGradient><linearGradient x1="86" y1="16.58994" x2="86" y2="155.21925" gradientUnits="userSpaceOnUse" id="color-3_L09zAuwGVoGB_gr3"><stop offset="0" stop-color="#7de3c3"></stop><stop offset="1" stop-color="#0ba360"></stop></linearGradient><linearGradient x1="86" y1="16.58994" x2="86" y2="155.21925" gradientUnits="userSpaceOnUse" id="color-4_L09zAuwGVoGB_gr4"><stop offset="0" stop-color="#7de3c3"></stop><stop offset="1" stop-color="#0ba360"></stop></linearGradient><linearGradient x1="86" y1="16.58994" x2="86" y2="155.21925" gradientUnits="userSpaceOnUse" id="color-5_L09zAuwGVoGB_gr5"><stop offset="0" stop-color="#7de3c3"></stop><stop offset="1" stop-color="#0ba360"></stop></linearGradient><linearGradient x1="86" y1="16.58994" x2="86" y2="155.21925" gradientUnits="userSpaceOnUse" id="color-6_L09zAuwGVoGB_gr6"><stop offset="0" stop-color="#7de3c3"></stop><stop offset="1" stop-color="#0ba360"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><rect x="9" y="54" transform="scale(2.6875,2.6875)" width="15" height="2" fill="url(#color-1_L09zAuwGVoGB_gr1)"></rect><path d="M153.1875,120.9375h-45.6875v-13.4375h29.76944c3.26531,0 6.35325,1.4835 8.39306,4.03394z" fill="url(#color-2_L09zAuwGVoGB_gr2)"></path><path d="M147.8125,150.5v-18.8125v-8.0625h5.375c1.032,0 1.97531,-0.59394 2.42144,-1.52113c0.44881,-0.93256 0.3225,-2.03713 -0.32519,-2.84606l-7.52231,-9.40356c-2.56387,-3.2035 -6.38819,-5.04175 -10.48931,-5.04175h-2.89713v-37.625h2.6875c1.4835,0 2.6875,-1.20131 2.6875,-2.6875c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375h-21.5v-7.37719c0,-9.45731 -7.02244,-17.286 -16.125,-18.5975v-8.96281h-5.375v8.96281c-9.10256,1.3115 -16.125,9.14019 -16.125,18.5975v15.43969h-32.25c-6.48762,0 -11.91638,4.62519 -13.16606,10.75h-5.64644v5.375h2.6875c1.48081,0 2.6875,1.204 2.6875,2.6875v72.5625h-5.375v5.375h139.75v-5.375zM142.4375,131.6875h-32.25v-8.0625h32.25zM94.0625,139.75v10.73388h-5.375v-10.73388zM83.3125,150.48388h-5.20838v-10.73388h5.20838zM104.8125,150.48388h-5.375v-13.42138c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875h-21.33338c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875v13.42138h-5.375v-61.79638h37.45838zM104.8125,67.1875h10.75v37.625h-5.375v-18.8125c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875h-2.6875zM120.9375,88.6875h8.0625v5.375h-8.0625zM129,83.3125h-8.0625v-5.375h8.0625zM143.56625,113.21363l4.02856,5.03638h-37.40731v-8.0625h8.0625h13.4375h5.58463c2.46175,0 4.75687,1.10187 6.29412,3.02612zM120.9375,104.8125v-5.375h8.0625v5.375zM129,72.5625h-8.0625v-5.375h8.0625zM126.3125,56.4375c3.5045,0 6.493,2.24675 7.60294,5.375h-29.10294v-5.375zM72.5625,43.68531c0,-7.40944 6.02806,-13.4375 13.4375,-13.4375c7.40944,0 13.4375,6.02806 13.4375,13.4375v10.06469v10.75v18.8125h-26.875zM67.1875,69.875h-5.375v-5.375h5.375zM51.0625,69.875v-5.375h5.375v5.375zM45.6875,64.5v5.375h-5.375v-5.375zM34.9375,64.5v5.375h-7.60294c1.10994,-3.12825 4.09844,-5.375 7.60294,-5.375zM26.875,75.25h40.3125v8.0625h-2.52088c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875v53.75h-35.10413v-10.75h21.5c2.96431,0 5.375,-2.41069 5.375,-5.375v-8.0625c0,-2.96431 -2.41069,-5.375 -5.375,-5.375h-21.5v-5.375h21.5c2.96431,0 5.375,-2.41069 5.375,-5.375v-8.0625c0,-2.96431 -2.41069,-5.375 -5.375,-5.375h-21.5zM48.375,91.375l0.00269,8.0625h-10.75269v-8.0625zM32.25,99.4375h-5.375v-8.0625h5.375zM48.375,115.5625l0.00269,8.0625h-10.75269v-8.0625zM32.25,123.625h-5.375v-8.0625h5.375zM26.875,145.125h35.10681v5.375h-35.10681zM110.1875,137.0625h13.4375v13.4375h-13.4375zM129,150.5v-13.4375h13.4375v13.4375z" fill="url(#color-3_L09zAuwGVoGB_gr3)"></path><path d="M80.625,77.9375h10.75c1.4835,0 2.6875,-1.20131 2.6875,-2.6875v-32.25c0,-4.44512 -3.61738,-8.0625 -8.0625,-8.0625c-4.44512,0 -8.0625,3.61738 -8.0625,8.0625v32.25c0,1.48619 1.204,2.6875 2.6875,2.6875zM83.3125,72.5625v-5.48788h5.375v5.48788zM83.3125,61.69963v-10.75h5.375v10.75zM86,40.3125c1.48081,0 2.6875,1.204 2.6875,2.6875v2.57462h-5.375v-2.57462c0,-1.4835 1.20669,-2.6875 2.6875,-2.6875z" fill="url(#color-4_L09zAuwGVoGB_gr4)"></path><path d="M96.75,94.0625h-21.5c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875v10.75c0,1.48619 1.204,2.6875 2.6875,2.6875h21.5c1.4835,0 2.6875,-1.20131 2.6875,-2.6875v-10.75c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875zM77.9375,104.8125v-5.375h5.375v5.375zM94.0625,104.8125h-5.375v-5.375h5.375z" fill="url(#color-5_L09zAuwGVoGB_gr5)"></path><path d="M96.75,112.875h-21.5c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875v10.75c0,1.48619 1.204,2.6875 2.6875,2.6875h21.5c1.4835,0 2.6875,-1.20131 2.6875,-2.6875v-10.75c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875zM77.9375,118.25h5.375v5.375h-5.375zM94.0625,123.625h-5.375v-5.375h5.375z" fill="url(#color-6_L09zAuwGVoGB_gr6)"></path></g></g></svg>
   Town
</h5>            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse p-1" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body row">
              <div class = "col-2">
<strong>Rank</strong>
              </div>
              <div class = "col-8">
                <strong>University</strong>
              </div>
             <div class = "col-2">
              <strong>Town</strong>

                           </div>

                

            </div>

            <div class="accordion-body collectionTown">


 
                    

         
  
            </div>




          </div>
        </div>  
      </div>
    </div>
    </div>
</div>

<div class="container  container_one px-5 mt-5 py-2 mb-5 " data-aos="fade-left">

  <div class="row">
    <div class="col-md-12">

      <div class="accordion  accordion-flush" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

              <h5 id="age">
                <img src="https://img.icons8.com/dusk/64/000000/old-age-home.png"/> 
                Oldest to Youngest
                </h5>
              </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse p-1" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body row">
              <div class = "col-2">
<strong>Rank</strong>
              </div>
              <div class = "col-8">
                <strong>University</strong>
              </div>
             <div class = "col-2">
              <strong>Year</strong>

                           </div>

                

            </div>
            <div class="accordion-body collectionAge">


 
                    

         
  
            </div>


          </div>
        </div>  
      </div>




    </div>
    </div>

   

</div>

<div class="container  container_one px-5 mt-5 py-2 mb-5 " data-aos="fade-right">
  <div class="row">
    <div class="col-md-12">

      <div class="accordion  accordion-flush" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

              <h5>

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="64" height="64"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><defs><linearGradient x1="118.25" y1="107.83594" x2="118.25" y2="112.25419" gradientUnits="userSpaceOnUse" id="color-1_yElsaczI74v1_gr1"><stop offset="0" stop-color="#eaee83"></stop><stop offset="1" stop-color="#fdc599"></stop></linearGradient><linearGradient x1="118.25" y1="118.58594" x2="118.25" y2="123.00419" gradientUnits="userSpaceOnUse" id="color-2_yElsaczI74v1_gr2"><stop offset="0" stop-color="#eaee83"></stop><stop offset="1" stop-color="#fdc599"></stop></linearGradient><linearGradient x1="118.25" y1="129.33594" x2="118.25" y2="133.75419" gradientUnits="userSpaceOnUse" id="color-3_yElsaczI74v1_gr3"><stop offset="0" stop-color="#eaee83"></stop><stop offset="1" stop-color="#fdc599"></stop></linearGradient><linearGradient x1="37.625" y1="129.33594" x2="37.625" y2="133.75419" gradientUnits="userSpaceOnUse" id="color-4_yElsaczI74v1_gr4"><stop offset="0" stop-color="#eaee83"></stop><stop offset="1" stop-color="#fdc599"></stop></linearGradient><linearGradient x1="86" y1="129.33594" x2="86" y2="133.75419" gradientUnits="userSpaceOnUse" id="color-5_yElsaczI74v1_gr5"><stop offset="0" stop-color="#eaee83"></stop><stop offset="1" stop-color="#fdc599"></stop></linearGradient><linearGradient x1="84.65625" y1="33.67975" x2="84.65625" y2="138.66963" gradientUnits="userSpaceOnUse" id="color-6_yElsaczI74v1_gr6"><stop offset="0" stop-color="#d9e021"></stop><stop offset="1" stop-color="#fb872b"></stop></linearGradient><linearGradient x1="64.5" y1="33.67975" x2="64.5" y2="138.66963" gradientUnits="userSpaceOnUse" id="color-7_yElsaczI74v1_gr7"><stop offset="0" stop-color="#d9e021"></stop><stop offset="1" stop-color="#fb872b"></stop></linearGradient><linearGradient x1="61.8125" y1="33.67975" x2="61.8125" y2="138.66963" gradientUnits="userSpaceOnUse" id="color-8_yElsaczI74v1_gr8"><stop offset="0" stop-color="#d9e021"></stop><stop offset="1" stop-color="#fb872b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><rect x="38" y="40" transform="scale(2.6875,2.6875)" width="12" height="2" fill="url(#color-1_yElsaczI74v1_gr1)"></rect><rect x="38" y="44" transform="scale(2.6875,2.6875)" width="12" height="2" fill="url(#color-2_yElsaczI74v1_gr2)"></rect><rect x="38" y="48" transform="scale(2.6875,2.6875)" width="12" height="2" fill="url(#color-3_yElsaczI74v1_gr3)"></rect><rect x="10" y="48" transform="scale(2.6875,2.6875)" width="8" height="2" fill="url(#color-4_yElsaczI74v1_gr4)"></rect><rect x="28" y="48" transform="scale(2.6875,2.6875)" width="8" height="2" fill="url(#color-5_yElsaczI74v1_gr5)"></rect><path d="M150.5,134.375l-0.0645,-43c-0.13706,-0.65844 -0.50794,-1.25506 -1.06694,-1.65281l-15.88044,-11.2875c-0.45419,-0.32519 -0.99706,-0.49719 -1.55606,-0.49719h-22.21487c0.27681,-0.65575 0.47031,-1.34913 0.47031,-2.08281v-12.08031c0,-1.86781 -0.99169,-3.63081 -2.58806,-4.59831l-41.96262,-25.41838c-2.57731,-1.55875 -5.77812,-1.55875 -8.35544,0l-41.2585,24.99375c-1.59637,0.97019 -2.58537,2.7305 -2.58537,4.59563v12.08031c0,1.93769 1.04812,3.73025 2.73588,4.68162c1.6555,0.93256 3.68187,0.91106 5.32663,-0.043v54.309h-5.375v5.375h139.75v-5.375zM131.07206,83.3125l11.34394,8.0625h-40.291v-8.0625zM18.8125,75.42738v-12.08031l41.25581,-24.98837c0.85463,-0.52138 1.92694,-0.52138 2.78156,0l41.96263,25.41569v12.08031l-39.17569,-23.72794c-1.28731,-0.78206 -2.73587,-1.17444 -4.17906,-1.17444c-1.44319,0 -2.88906,0.39238 -4.17906,1.17175zM45.6875,134.375h-18.8125v-5.375h18.8125zM72.5625,134.375h-21.5v-28.92825c0,-1.83287 1.49156,-3.32175 3.32175,-3.32175h14.85381c1.83288,0 3.32444,1.48888 3.32444,3.32175zM96.75,134.375h-18.8125v-5.375h18.8125zM96.75,112.875h-8.0625v5.375h8.0625v5.375h-18.8125v-18.17825c0,-4.7945 -3.90225,-8.69675 -8.69675,-8.69675h-14.85381c-4.79719,0 -8.69944,3.90225 -8.69944,8.69675v18.17825h-18.8125v-5.375h8.0625v-5.375h-8.0625v-36.04744l33.19331,-20.10519c0.85463,-0.51869 1.92694,-0.52137 2.78156,0l33.90013,20.53519zM134.375,134.375h-32.25v-26.875h32.25zM145.125,134.375h-5.375v-29.5625c0,-1.4835 -1.20131,-2.6875 -2.6875,-2.6875h-34.9375v-5.375h43z" fill="url(#color-6_yElsaczI74v1_gr6)"></path><rect x="23" y="42" transform="scale(2.6875,2.6875)" width="2" height="4" fill="url(#color-7_yElsaczI74v1_gr7)"></rect><path d="M51.0625,77.9375c0,5.92862 4.82138,10.75 10.75,10.75c5.92862,0 10.75,-4.82138 10.75,-10.75c0,-5.92862 -4.82138,-10.75 -10.75,-10.75c-5.92862,0 -10.75,4.82138 -10.75,10.75zM67.1875,77.9375c0,2.96431 -2.41069,5.375 -5.375,5.375c-2.96431,0 -5.375,-2.41069 -5.375,-5.375c0,-2.96431 2.41069,-5.375 5.375,-5.375c2.96431,0 5.375,2.41069 5.375,5.375z" fill="url(#color-8_yElsaczI74v1_gr8)"></path></g></g></svg>
                Public Colleges
                </h5>
              </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse p-1" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body row">
              <div class = "col-2">
<strong>Rank</strong>
              </div>
              <div class = "col-8">
                <strong>University</strong>
              </div>
             <div class = "col-2">
              <strong>Acronym</strong>

                           </div>

                

            </div>

            <div class="accordion-body collectionPublic">


 
                    

         
  
            </div>

          </div>
        </div>  
      </div>



      
    </div>
    </div>
</div>
<div class="container  container_one px-5 mt-5 py-2 mb-5 " data-aos="fade-left">
  <div class="row">
    <div class="col-md-12">

      <div class="accordion  accordion-flush" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

              <h5>

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="64" height="64"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f1c40f"><path d="M80.625,16.125v18.77051l-32.25,23.47363v-9.99414h-10.75v10.75h-26.875v10.75h5.375v64.5h139.75v-64.5h5.375v-10.75h-26.875v-10.75h-10.75v9.99414l-32.25,-23.47363v-8.02051h5.375v-10.75zM86,44.27026l26.875,19.56836v0.66138h-53.75v-0.66138zM26.875,69.875h21.5v5.375v48.375h-21.5v-10.75h10.75v-10.75h-10.75v-10.75h10.75v-10.75h-10.75zM123.625,69.875h21.5v10.75h-10.75v10.75h10.75v10.75h-10.75v10.75h10.75v10.75h-21.5zM59.125,75.25h10.75v48.375h-10.75zM80.625,75.25h10.75v48.375h-10.75zM102.125,75.25h10.75v48.375h-10.75z"></path></g></g></svg>
                  Private Colleges
                </h5>
              </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse p-1" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body row">
              <div class = "col-2">
<strong>Rank</strong>
              </div>
              <div class = "col-8">
                <strong>University</strong>
              </div>
             <div class = "col-2">
              <strong>Acronym</strong>

                           </div>

                

            </div>

              <div class="accordion-body collectionPrivate">


 
                    

         
  
              </div>
              

            </div>

          </div>
        </div>  
      </div>



      
    </div>
    </div>

    <div class="container  container_one px-5 mt-5 py-2 mb-5 " data-aos="fade-right">
      <div class="row">
        <div class="col-md-12">
    
          <div class="accordion  accordion-flush" id="accordionExample" >
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
    
                  <h5 id="top10">
    
                    <img src="https://img.icons8.com/emoji/64/000000/trophy-emoji.png"/>
                    Top 10
                    </h5>
                  </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse p-1" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body row">
                  <div class = "col-2">
    <strong>Rank</strong>
                  </div>
                  <div class = "col-8">
                    <strong>University</strong>
                  </div>
                 <div class = "col-2">
                  <strong>Acronym</strong>
    
                               </div>
    
                    
    
                </div>
    
                <div class="accordion-body collection">
    
    
     
                        
    
             
      
                  </div>
                  
    
                </div>
    
              </div>
            </div>  
          </div>
    
    
    
          
        </div>
        </div>





</div>



   <!-- the footer part -->
   <footer class="footer_link mt-5" style="margin-bottom: -100px;">
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
               <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Build Your school List</a> </li>
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
  <script src="Assets/JS/colleges.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
