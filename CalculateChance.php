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
              <a class="nav-link" href="#">Q & A</a>
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
      <p class="text-uppercase drop-header ">Find School</p>
      <hr class="text-black" >
      <ul class="list-unstyled pl-0">
        <li class="dropdown-item my-2"><a class="text-info" href="collegeList.php">Find school</a> </li>

      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByEngineering.php"> Collages for Engineering</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByMedicine.php">Collages for  Medicine</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByBusiness.php">Collages for Business</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Addis Ababa">Collages in Addis Ababa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Hawassa">Collages in Hawassa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Gondar">Collages in Gonder</a> </li>
      </ul>
      </div>

      <!-- guidance -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">guidance</p>
      <hr class="text-black" >

      <ul class="list-unstyled ml-5">
        <li class="dropdown-item my-2"><a class="text-info" href="CalculateChance.php">Calculate your chance</a> </li>

        
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


      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">about</p>
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
   
    <!-- below the navbar this is the body -->
    <div class="container container_one my-3" data-aos="fade-down">>
        <div class="header">
            <h3 class="text-center my-5 pt-5 text-success" >Calculate your chances of joining the best universities based on your status.</h3>

            <hr>
            <div class="row">
              <div class="col-md-1 col-sm-12"></div>
              <div class="col-md-6 col-sm-12">
               <div class="upper-content text-right">
                 
                       <div class="accordion accordion-flush mb-5 " id="calculateAccordion">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                              <p class="text-black"><i class="fas fa-dice text-success"></i> How can I calculate my chances ?   </p>                            
                            </button>

                            </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse p-1" aria-labelledby="flush-headingOne" data-bs-parent="#calculateAccordion">
                             <div class="accordion-body">

                              <ul id="calList1">
                                <li>
                                  <i class="fas fa-pencil-alt text-success"></i>   In the first field please fill your grade 12 result
                                </li>
                                <li><i class="fas fa-pencil-alt text-success"></i> In the second field choose your gender
                                  
                                </li>
                                <li>
                                  <i class="fas fa-pencil-alt text-success"></i>    Choose your field
                                </li>
                                <li>
                                  <i class="fas fa-pencil-alt text-success"></i>  And finally in the choose weather you are disable or not
                                </li>
                              </ul>
                               
                             </div>
                          
                          </div>
                        </div>
                        
                      </div>
                       
                  
                 </div>
                </div>
                <div class="col-md-5 col-sm-10 my-md-1" data-aos="fade-left">
                  <img class ="img-fluid rounded" src="./Assets/Images/calculate.jpg" alt="">
               </div>
            </div>
        </div>
    </div>
    <!-- the calculate form and displayed content -->
    <div class="container calculate-main" data-aos="flip-down">
        <div class="row">              
            <div class="theForm col-12 col-xl-4 col-lg-4 col-md-10 col-sm-12 col-xs-12
             p-5 m-md-5">
            <div  id="submitForm" >
                <div class="form-group my-3">
                    <label for="mark" class="m-2">Your grade 12 mark </label>
                    <input class="form-control" type="text" name="mark" id="mark" required>
                </div>
                <div class="form-group my-3">
                    <label class="m-2">Gender</label>
                    <select class="form-select" id="gender" >
                        <option value="Male"selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group my-3">
                  <label class="m-2">Field </label>
                  <select class="form-select" id="field" >
                      <option value="Social" selected>Social</option>
                      <option value="Natural">Natural</option>
                  </select>
              </div>
                <div class="form-group my-3">
                    <label for="" class="m-2" >Disability status </label>
                    <select class="form-select" id="disability">
                        <option value="Normal"selected>Normal</option>
                        <option value="Disabled">Disabled</option>
                    </select>
                </div>
                <div class="form-group my-3 text-center">
                  <button class="btn btn-outline-success" id="submit">Calculate</button>
              </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 ml-sm-0 text-center my-md-5 p-md-5 text-success bg-white displayValue">
              <div class="text-center univList">
                  List of Universities in your score range
              </div>
            </div>
        </div>
    </div>
    <div class="container p-md-5" data-aos="zoom-in-up">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 text-center"  data-aos="zoom-in-left">
            <h3 class="m-3" >Understanding your chances can be difficult</h3>
            <hr>
            <p>CollegeVine takes the guesswork out of college admissions. 
              Students have many misconceptions about average acceptance rates and their 
              personal admissions chances. Here are important things you need to understand 
              about your chances:</p>
          </div>
        </div>
      <div class="row py-5">
        <div class="col-md-4 col-sm-12">
          <p><i class="fas fa-percent"></i></p>
          <h6>The acceptance rate on a school’s website is not your chance of getting in </h6>
          <p class="description mt-4">Universities calculate the acceptance rates by investigating the entrance exam results
            from the ministry of education. That means they see and compare the number of the student which get 
            the entrance mark or kota of the university.
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p><i class="fas fa-home"></i></p>
          <h6>There are factors outside your control that have an impact on your chances </h6>
          <p class="description mt-4">
            Colleges and universities build each freshman class to include a diverse array of students, 
            and that means selecting for diverse racial, economic, and personal backgrounds.
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p><i class="fas fa-sliders-h"></i></p>
          <h6> Did high school scores can impact your admissions outcomes? </h6>
          <p class="description mt-4">Universities calculate the acceptance rates by investigating the entrance exam results only.
            your high school grade results are not get in to account in case of choosing the university in Ethiopia.
            but in order to get the top university in Ethiopia you must score good grades in matric result.
          </p>
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
                <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Build Your school List</a> </li>
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
  <script src="Assets/JS/calculateChance.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
