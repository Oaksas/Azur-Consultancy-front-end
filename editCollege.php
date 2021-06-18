<?php
      // require('indexMain.php');
     session_start();

     if(!isset($_SESSION["email"])){
        header("Location:indexMain.php");

    }
 
?>

<?php

include("Includes/create.php");
$url= apiURL();
$newURL = str_replace(' ', '%20', $_REQUEST['univName']);
$url = $url."/api/universities/".$newURL;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$res = json_decode($response); //because of true, it's in an array

curl_close($curl);

?>

<?php
$url2= apiURL();
$newURL2 = str_replace(' ', '%20', $_REQUEST['univName']);

$url2 = $url2."/api/universities/".$newURL2."/studyAreas";
$curl2 = curl_init();

curl_setopt_array($curl2, array(
  CURLOPT_URL => $url2,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response2 = curl_exec($curl2);
$err2 = curl_error($curl2);
$res2 = json_decode($response2); //because of true, it's in an array



curl_close($curl2);

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
      <p class="text-uppercase drop-header ">Find School</p>
      <hr class="text-black" >
      <ul class="list-unstyled pl-0">
      <li class="dropdown-item my-2"><a class="text-info" href="CalculateChance.php">Calculate your chance</a> </li>
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
        <li class="dropdown-item my-2"><a class="text-info" href="collegeList.php">Find school</a> </li>
        
        
      </ul>
      </div>

      <!-- more resorces -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">more resources</p>
      <hr class="text-black" >
      <ul class="list-unstyled ml-5">
      <li class="dropdown-item my-2"><a class="text-info" href="index.php">Downloads</a> </li>
     
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


   
      <div class="row my-5 pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 my-5" data-aos="zoom-out-up">
         <div class="main text-center">

 
             
           </div>
        </div>
    </div>
    <div class="row" data-aos="zoom-in-right">
      <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 display-6" id="unname"><?php print_r($res->Name); ?></div>
      <div class="col-lg-4 col-md-4"></div>

      <div class="col-md-3"><button type="button" class="btn btn-outline-success btn-lg depop" onclick="depopulate()" ><i class="fas fa-edit text-success"></i> Add new University </button>
      </div>

  </div>

  <div class="container py-4 mt-4 container_one" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <h4 class="header text-success" >Overview <i class="fas fa-binoculars text-success"></i></h4>
    <hr class="text-black" >





    <form  method="POST">

  <div class="px-4" >
   <div class="form-group">
    
    <textarea class="form-control"  id="overview" name="overView"  rows="5" required><?php print_r($res->Overview); ?></textarea>
  </div>
  </div>
    

  </div>

  <!--University identity section-->
  <div class="row my-3 "  data-aos="fade-up"
     data-aos-anchor-placement="top-center">
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-6 col-md-12 col-sm-12">
<div class="container-fluid container_one py-4 my-4">
  <h4 class="header text-success">University Identity <i class="fas fa-passport text-success"></i></h4>
  <hr class="text-black" >
<div class="row" >
<h4 class="text-primary">Name</h4> 
<span id="unname">  

<?php echo('  <input type="text" class="form-control" id="name" name="name" placeholder="University Name" value="'. $_REQUEST['univName']. '"  required>');?>
</span>
</div>
<div class="row my-3">
  <h4 class="text-primary">Acronym</h4>
   <span id="unacr">
<?php echo('<input type="text" class="form-control" id="univAcr" name="univAcr" placeholder="Acronym" value= "' .($res->Acronyms).'" required>');?>
   </span>
</div>
  <div class="row my-3">
    <h4 class="text-primary">Founded</h4> 
    <span id="unfounded">
    
<?php echo('<input type="text" class="form-control" id="univFounded"  name="univFounded" placeholder="Founded" value= "'.($res->FoundationYear).'" required>')?>
    </span>
  </div>
    <div class="row my-3">
      <h4 class="text-primary">Motto</h4> 
      <span id="unmotto">
      <?php echo('<input type="text" class="form-control" id="univMotto"  name="univMotto" placeholder="Motto" value="' .($res->Motto).'" required>')?>

      
      </span>
    </div>
      <div class="row my-3">
        <h4 class="text-primary">Website </h4> 
        <span >
        <input type="text" class="form-control" id="univWeb" name="univWeb" placeholder="Website" value=<?php print_r($res->Website); ?>  required>

        
        </span>
 
        </div>

        <div class="row my-3">
        <h4 class="text-primary">Rank </h4> 
        <span >
        <input type="text" class="form-control" id="univRank" name="univRank" placeholder="Rank" value=<?php print_r($res->Rank); ?>  required>

        
        </span>
 
        </div>
</div>


    </div>
  
    <div class="col-lg-4 col-md-12 col-sm-12 my-4">
      <div class="container-fluid container_one py-4">
        <h4 class="header text-success">University Location <i class="fas fa-compass text-success"></i></h4>
        <hr class="text-black" >
      <div class="row" >
        <h4 class="text-primary"><i class="fas fa-thumbtack "></i></h4> 
        <span id="address">
       <?php echo(' <input type="text" class="form-control" id="univAdd" name="univAdd" placeholder="Address" value="'.($res->Location).'" required>')?>
        

        </span>
      </div>

      <div class="row my-3" >
        <h4 class="text-primary"><img src="https://img.icons8.com/ios-filled/25/000000/china-and-taiwan-map.png"/></h4>
         <span id="region">
         
         <?php echo(' <input type="text" class="form-control" id="univRegion" name="univRegion" placeholder="Region" value="' .($res->Region).'" required>')?>
         
         </span>
        </div>


      <div class="row my-3" >
        <h4 class="text-primary"><i class="fas fa-phone"></i></h4>
         <span id="tel">
         
       <?php echo('<input type="tel" class="form-control" id="univTell" name="univTell" placeholder="Tel" required value="'.($res->Phone).'">')?>        
         
         </span>
        </div>
        <div class="row my-3" >
          <h4 class="text-primary"><i class="fas fa-fax"></i></h4>
           <span id="fax">
           <?php echo('<input type="tel" class="form-control" id="univFax" placeholder="Fax" name="univFax" required value="'.($res->Fax).'">')?>

           
           </span>
        </div>
         
      </div>
      
      
          </div>


    </div>


<!--University courseList section-->

<div class="container container_one py-4 my-4" data-aos="zoom-out-right">
<h4 class="header text-success">Study Areas and Degree Levels <i class="fas fa-user-graduate text-success"></i></h4>
<hr class="text-black" >  
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6"></div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <h5 class=" text-success "><img src="https://img.icons8.com/wired/30/000000/university.png"/> Degrees</h5>
    <hr class="text-black" >
  </div>


   
  </div>


  <!--Arts & Humanities-->
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/plasticine/50/000000/art-prices.png"/>Arts & Humanities</div>
  
    <div class="col-lg-6 col-md-6 col-sm-6">

      <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox"  value="0"  id="degreeUnderArt" name="degreeUnderArt">
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox"  value="0"  id="degreePostArt" name="degreePostArt" >
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>   
      
      <hr class="text-black" >
    </div>
  
    </div>
  <!--Business & Social Sciences -->

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/bubbles/50/000000/man-with-red-tie-target.png"/>Business & Social Sciences </div>
    
      <div class="col-lg-6 col-md-6 col-sm-6">


      <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreeUnderBusiness" name="degreeUnderBusiness" >
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreePostBusiness" name="degreePostBusiness" >
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>  

<hr class="text-black" >
</div>
      </div>

 <!--Language & Cultural -->

 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/bubbles/50/000000/globe.png"/>Language & Cultural </div>

  <div class="col-lg-6 col-md-6 col-sm-6">

     
  <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreeUnderLanguage" name="degreeUnderLanguage" >
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreePostLanguage" name="degreePostLanguage">
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>  
      
      <hr class="text-black" >
    </div>
  </div>

 <!--Medicine & Health -->

 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/pastel-glyph/50/000000/first-aid-kit.png"/> Medicine & Health </div>

  <div class="col-lg-6 col-md-6 col-sm-6">


  <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreeUnderMedicine" name="degreeUnderMedicine">
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreePostMedicine" name="degreePostMedicine">
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>  

<hr class="text-black" >
</div>
  </div>

<!-- Engineering-->

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/officel/50/000000/engineering.png"/>Engineering </div>

  <div class="col-lg-6 col-md-6 col-sm-6">

  <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreeUnderEngineering" name="degreeUnderEngineering">
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreePostEngineering" name="degreePostEngineering" >
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>  
<hr class="text-black" >
</div>
  </div>

<!-- Science & Technology-->

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6"><img src="https://img.icons8.com/color/50/000000/stargaze.png"/>Science & Technology </div>
  <div class="col-lg-6 col-md-6 col-sm-6">




  <span id="artUnderCheck" >
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreeUnderScience" name="degreeUnderScience">
  <label class="form-check-label" for="flexCheckDefault">
    Undergraduate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="0" id="degreePostScience" name="degreePostScience">
  <label class="form-check-label" for="flexCheckChecked">
    Postgraduate
  </label>
</div>
      </span>  




<hr class="text-black" >
</div>
  </div>

  <div class="row">
  <!-- <div class="col-lg-5 col-5-md col-sm-12 ">
        <button class= "btn btn-primary btn-qa  py-2" data-bs-toggle="modal" data-bs-target="#newField">Add new study area</button>

      </div> -->



  </div>
  






  
    
  </div>
  
</div>


</div>


<!--University size and profile section-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Size and Profile <i class="fas fa-users text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  <h4 class="text-primary"><i class="fas fa-user-clock "></i> Student Enrollment</h4> 
  <span id="unenroll">
  <input type="text" class="form-control" id="studEnroll" name="studEnroll" placeholder="example 20,000"  value=<?php print_r($res->StudentSize); ?> required>

  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-user-friends"></i> Academic Stuff</h4> 
  <span id="unstuff">
  <input type="text" class="form-control" id="stuffEnroll" name="stuffEnroll" placeholder="example 20,000"  value=<?php print_r($res->AcademicStaffSize); ?> required>

  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-university"></i>  Control Type    </h4>
  <span id="uncontrol">
  <input type="text" class="form-control"  name="controlType" id="controlType" placeholder="Public"  value=<?php print_r($res->ControlType); ?> required>

  </span>

  </div>

   
</div>


  </div>

  </div>


  <!--University identity section-->
  <div class="row my-3 "  data-aos="fade-up"
     data-aos-anchor-placement="top-center">
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-6 col-md-12 col-sm-12">
<div class="container-fluid container_one py-4 my-4">
  <h4 class="header text-success">Pass Mark <i class="fas fa-passport text-success"></i></h4>
  <hr class="text-black" >
<div class="row" >
<h4 class="text-primary">Natural </h4> 
<span id="unname">  
  <input type="text" class="form-control" id="naturalPassMark" name="naturalPassMark" placeholder="Passmark" value=<?php print_r($res->NaturalPassMArk); ?> required>
</span>
</div>
<div class="row my-3">
  <h4 class="text-primary">Social</h4>
   <span id="unacr">
   <input type="text" class="form-control" id="socialPassMark" name="socialPassMark" placeholder="Passmark" value= <?php print_r($res->SocialPassMArk); ?> required>

   </span>

 
        </div>
</div>


    </div>
  



<!--University Facilities and Services-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Facilities and Services <i class="fas fa-hands text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  
  <h4 class="text-primary">Library <i class="fas fa-book-open"></i></h4>
  
  
   <span id="ulib">
   <input class="form-check-input" type="checkbox" value="0" id="library" name="library" >

   </span>
</div>
<div class="row my-3">
   
  <h4 class="text-primary">Housing <i class="fas fa-warehouse"></i></h4> 
  <span id="uhouse">
  <input class="form-check-input" type="checkbox" value="0" id="housing" name="housing" >

  </span>

</div>
<div class="row my-3">
  <h4 class="text-primary">  Sport Facilities	<i class="fas fa-volleyball-ball"></i>   </h4> 
  <span id="usport">
  <input class="form-check-input" type="checkbox" value="0" id="sport" name="sport" >

  </span>
 
  </div>
  <div class="row my-3">
    <h4 class="text-primary">     Financial Aids <i class="fas fa-hands-helping"></i>   </h4>
     <span id="ufinance">
     <input class="form-check-input" type="checkbox" value="0" id="financialAid" name="financialAid" >

     </span>

    </div>
   
</div>


  </div>




  </div>



<!--University Social Media section-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Social Media <i class="fas fa-share-alt text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/facebook-new.png"/> </h4> 
  <span id="ufacebook">
  <input type="text" class="form-control" id="facebook" name="facebook"  placeholder="facebook"  value=  <?php
if($res->SocialMedia){
  $sm=explode(',',$res->SocialMedia);
  print_r($sm[0]);
}
  ?> 
    >

  
  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/twitter.png"/> </h4> 
  <span id="utwitter">
  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter"  value=  <?php
if($res->SocialMedia){
  $sm=explode(',',$res->SocialMedia);
  print_r($sm[1]);
}
  ?> >

  </span>
 
</div>
<div class="row my-3">
    
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/linkedin.png"/> </h4>
  
   <span id="ulinkedln">
   <input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="linkedIn"   value=  <?php
if($res->SocialMedia){
  $sm=explode(',',$res->SocialMedia);
  print_r($sm[2]);
}
  ?> 
  >

   </span>
<!-- this is the last one -->
  </div>
  <div class="row my-3">
   
  <h4 class="text-primary"><img src="https://img.icons8.com/plasticine/40/000000/youtube.png"/> </h4>
   <span id="uyoutube">
   <input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube"   value=  <?php
if($res->SocialMedia){
  $sm=explode(',',$res->SocialMedia);
  print_r($sm[3]);
}
  ?>  >

   </span>

    </div>
   
</div>


  </div>




  </div>
  <div class="col-md-12">
  <button type="submit" class="btn btn-outline-success btn-lg  " id="addToDB" name="addToDB">
  <i class="fas fa-edit text-success"></i> Save Changes
  
  </button>
  <button type="submit" class="btn btn-outline-success btn-lg " style="display:none;"  id="createUniv" name="createUniv">
  <i class="fas fa-edit text-success"></i> Create University
  
  </button>

      </div>
</form>

<!-- setting html elements innerHTML-->

<script>
 
var overview = document.querySelector('#overview'); //The UL
var univName = document.querySelector('#name'); //The UL
var univAcr = document.querySelector('#univAcr'); //The UL
var univFound = document.querySelector('#univFounded'); //The UL
var univMotto = document.querySelector('#univMotto'); //The UL
var univWeb = document.querySelector('#univWeb'); //The UL
var univAdd = document.querySelector('#univAdd'); //The UL
var univRegion = document.querySelector('#univRegion'); //The UL

var univTell = document.querySelector('#univTell'); //The UL
var univFax = document.querySelector('#univFax'); //The UL

var studEnroll = document.querySelector('#studEnroll'); //The UL
var staffEnroll = document.querySelector('#stuffEnroll'); //The UL
var controlType = document.querySelector('#controlType'); //The UL

var socialPassMark = document.querySelector('#socialPassMark'); //The UL
var naturalPassMark = document.querySelector('#naturalPassMark'); //The UL

var library = document.querySelector('#library');
var sport = document.querySelector('#sport');
var housing = document.querySelector('#housing')
var financialAid = document.querySelector('#financialAid')

//social medias
var facebook = document.querySelector('#facebook');
var twitter = document.querySelector('#twitter');
var linkedIn = document.querySelector('#linkedIn')
var youtube = document.querySelector('#youtube')


//study areas section

var degreeUnderArt = document.querySelector('#degreeUnderArt'); //The UL
var degreePostArt = document.querySelector('#degreePostArt'); //The UL
var degreeUnderBusiness = document.querySelector('#degreeUnderBusiness'); //The UL
var degreePostBusiness = document.querySelector('#degreePostBusiness'); //The UL
var degreeUnderLanguage = document.querySelector('#degreeUnderLanguage'); //The UL
var degreePostLanguage = document.querySelector('#degreePostLanguage'); //The UL
var degreeUnderMedicine = document.querySelector('#degreeUnderMedicine'); //The UL
var degreePostMedicine = document.querySelector('#degreePostMedicine'); //The UL
var degreeUnderEngineering = document.querySelector('#degreeUnderEngineering'); //The UL
var degreePostEngineering = document.querySelector('#degreePostEngineering'); //The UL
var degreeUnderScience = document.querySelector('#degreeUnderScience'); //The UL
var degreePostScience = document.querySelector('#degreePostScience'); //The UL
var saveChangesBtn = document.querySelector('#addToDB'); //The UL
var createUnivBtn = document.querySelector('#createUniv'); //The UL





 function depopulate(){

       saveChangesBtn.style.display="none";
       createUnivBtn.style.display="block";
        univName.value="";
        overview.value="";
        univAcr.value="";
        univFound.value="";
        univMotto.value="";
        univWeb.value="";
        univAdd.value="";
        univTell.value="";
        univFax.value="";
        univRegion.value="";
        studEnroll.value="";
        staffEnroll.value="";
        controlType.value="";
        naturalPassMark.value="";
        socialPassMark.value="";
        library.checked=false;
        sport.checked=false;
        housing.checked=false;
        financialAid.checked=false;
        facebook.value="";
        twitter.value="";
        linkedIn.value="";
        youtube.value="";

       // study areas
       degreeUnderArt.checked=false;
       degreePostArt.checked=false;
       degreeUnderBusiness.checked=false;
       degreePostBusiness.checked=false;
       degreeUnderLanguage.checked=false;
       degreePostLanguage.checked=false;
       degreeUnderMedicine.checked=false;
       degreePostMedicine.checked=false;
       degreeUnderEngineering.checked=false;
       degreePostEngineering.checked=false;
       degreeUnderScience.checked=false;
       degreePostScience.checked=false;




        

      }
</script>

<?php

foreach($res2 as $field ){
if($field->Fields === "Arts"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderArt = document.querySelector('#degreeUnderArt'); //The UL
    degreeUnderArt.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostArt = document.querySelector('#degreePostArt'); //The UL
    degreePostArt.checked=true;
    </script>
    <?php
    
  }

}
if($field->Fields === "Buisness"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderBusiness = document.querySelector('#degreeUnderBusiness'); //The UL
    degreeUnderBusiness.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostBusiness = document.querySelector('#degreePostBusiness'); //The UL
    degreePostBusiness.checked=true;
    </script>
    <?php
    
  }

}
if($field->Fields === "Language"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderLanguage = document.querySelector('#degreeUnderLanguage'); //The UL
    degreeUnderLanguage.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostLanguage = document.querySelector('#degreePostLanguage'); //The UL
    degreePostLanguage.checked=true;
    </script>
    <?php
    
  }

}





if($field->Fields === "Medicine"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderMedicine = document.querySelector('#degreeUnderMedicine'); //The UL
    degreeUnderMedicine.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostMedicine = document.querySelector('#degreePostMedicine'); //The UL
    degreePostMedicine.checked=true;
    </script>
    <?php
    
  }

}

if($field->Fields === "Engineering"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderEngineering = document.querySelector('#degreeUnderEngineering'); //The UL
    degreeUnderEngineering.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostEngineering = document.querySelector('#degreePostEngineering'); //The UL
    degreePostEngineering.checked=true;
    </script>
    <?php
    
  }

}

if($field->Fields === "Science"){
  if($field->Undergraduate){
    ?>
    <script>
    var degreeUnderScience = document.querySelector('#degreeUnderScience'); //The UL
    degreeUnderScience.checked=true;
    </script>
    <?php
    
  }
  if($field->Postgraduate){
    ?>
    <script>
    var degreePostScience = document.querySelector('#degreePostScience'); //The UL
    degreePostScience.checked=true;
    </script>
    <?php
    
  }

}



}
if($res->Library){
  ?>
  <script>
  var library = document.querySelector('#library'); //The UL
  library.checked=true;
  </script>
  <?php
  
}
if($res->FinancialAid){
  ?>
  <script>
  var financialAid = document.querySelector('#financialAid'); //The UL
  financialAid.checked=true;
  </script>
  <?php
  
}

if($res->Housing){
  ?>
  <script>
  var housing = document.querySelector('#housing'); //The UL
  housing.checked=true;
  </script>
  <?php
  
}
if($res->SportFacility){
  ?>
  <script>
  var sportFacility = document.querySelector('#sport'); //The UL
  sportFacility.checked=true;
  </script>
  

  <?php
  
}
?>



<?php

if(isset($_POST["addToDB"])){


  $overView = $_POST["overView"];
  $name = (string)$_POST["name"];
  $acronym = (string)$_POST["univAcr"];
  $founded = (string)$_POST["univFounded"];
  $motto = (string)$_POST["univMotto"];
  $location = (string)$_POST["univAdd"];
  $region = (string)$_POST["univRegion"];
  $tel = (string)$_POST["univTell"];
  $fax = (string)$_POST["univFax"];
  $web = (string)$_POST["univWeb"];
  $studEnroll = (string)$_POST["studEnroll"];
  $stuffEnroll = (string)$_POST["stuffEnroll"];
  $controlType = (string)$_POST["controlType"];
  $rank = (string)$_POST["univRank"];

//social media links

$facebook = (string)$_POST["facebook"];
$twitter = (string)$_POST["twitter"];
$linkeIn = (string)$_POST["linkeIn"];
$youtube = (string)$_POST["youtube"];


  $naturalPassMark = (string)$_POST["naturalPassMark"];
  $socialPassMark = (string)$_POST["socialPassMark"];


  if(isset($_POST["degreeUnderArt"])){
    $degreeUnderArt=1;
   
  }else{
    $degreeUnderArt=0;
  }
  
  if(isset($_POST["degreePostArt"])){
    $degreePostArt =1;

  }else{
    $degreePostArt=0;
  }


  if(isset($_POST["degreeUnderBusiness"])){
    $degreeUnderBusiness =1;

  }else{
    $degreeUnderBusiness=0;
  }

  if(isset($_POST["degreePostBusiness"])){
    $degreePostBusiness =1;
  }else{
    $degreePostBusiness=0;
  }


  
  if(isset($_POST["degreeUnderLanguage"])){
    $degreeUnderLanguage =1;

  }else{
    $degreeUnderLanguage=0;
  }

  if(isset($_POST["degreePostLanguage"])){
    $degreePostLanguage =1;
  }else{
    $degreePostLanguage=0;
  }

  if(isset($_POST["degreeUnderMedicine"])){
    $degreeUnderMedicine =1;

  }else{
    $degreeUnderMedicine=0;
  }
  if(isset($_POST["degreePostMedicine"])){
    $degreePostMedicine =1;

  }else{
    $degreePostMedicine=0;
  }

  
  if(isset($_POST["degreeUnderEngineering"])){
    $degreeUnderEngineering =1;

  }else{
    $degreeUnderEngineering=0;
  }

  if(isset($_POST["degreePostEngineering"])){
    $degreePostEngineering =1;

  }else{
    $degreePostEngineering=0;
  }
  if(isset($_POST["degreeUnderScience"])){
    $degreeUnderScience =1;

  }else{
    $degreeUnderScience=0;
  }
  if(isset($_POST["degreePostScience"])){
    $degreePostScience =1;

  }else{
    $degreePostScience=0;
  }
//facilities
if(isset($_POST["financialAid"])){
  $financialAid =1;

}else{
  $financialAid=0;
}

if(isset($_POST["library"])){
  $library =1;

}else{
  $library=0;
}
 if(isset($_POST["sport"])){
  $sport =1;

}else{
  $sport=0;
}
if(isset($_POST["housing"])){
  $housing =1;

}else{
  $housing=0;
}

 






$data = array(
  "Name"=> $name,
  "Overview"=> $overView,
  "Acronyms"=> $acronym,
  "FoundationYear"=> $founded,
  "Motto"=> $motto,
  "Website"=> $web,
  "Location"=> $location,
  "Phone"=> $tel,
  "Fax"=> $fax,
  "StudentSize"=> $studEnroll,
  "AcademicStaffSize"=> $stuffEnroll,
  "ControlType"=> $controlType,
  "Library"=> $library,
  "Housing"=> $housing,
  "Region"=> $region,
  "SportFacility"=> $sport,
  "FinancialAid"=> $financialAid,
  "SocialMedia"=> $facebook.$twitter.$linkeIn.$youtube,
  "Rank"=>$rank,
  "SocialPassMArk"=>$socialPassMark,
  "NaturalPassMArk"=>$naturalPassMark,
);     
$tempData = array(
   ["Art",$degreeUnderArt,$degreePostArt],
   ["Business",$degreeUnderBusiness,$degreePostBusiness],
   ["Language",$degreeUnderLanguage,$degreePostLanguage],
   ["Medicine",$degreeUnderMedicine,$degreePostMedicine],
   ["Engineering",$degreeUnderEngineering,$degreePostEngineering],
   ["Science",$degreeUnderScience,$degreePostScience]

  
);    
$dataStudyAreas=array("List"=>$tempData); 



$data_string = json_encode($data);                                                                                   
$url= apiURL();
$updateURL = str_replace(' ', '%20', $_REQUEST['univName']);
                                                              
$ch = curl_init($url.'/api/universities/'.$updateURL);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
'Content-Type: application/json',                                                                                
'Content-Length: ' . strlen($data_string))                                                                       
);             



//api call for study areas
   



$data_string_study_areas = json_encode($dataStudyAreas);                                                                                   
$url= apiURL();
$updateStudyAreasURL = str_replace(' ','%20', $_REQUEST['univName']);
                                                              
$request = curl_init($url.'/api/universities/'.$updateStudyAreasURL.'/studyAreas');                                                                      
curl_setopt($request, CURLOPT_CUSTOMREQUEST, "PUT");                                                                     
curl_setopt($request, CURLOPT_POSTFIELDS, $data_string_study_areas);                                                                  
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($request, CURLOPT_HTTPHEADER, array(                                                                          
'Content-Type: application/json',                                                                                
'Content-Length: ' . strlen($data_string_study_areas))                                                                       
);                                                                                                                   



$result =curl_exec($ch);
$resultStudyAreas=curl_exec($request);
?>
<script>

window.location.href ="colleges.php";

</script>

<?php




}








?>

<?php

if(isset($_POST["createUniv"])){


  $overView = $_POST["overView"];
  $name = (string)$_POST["name"];
  $acronym = (string)$_POST["univAcr"];
  $founded = (string)$_POST["univFounded"];
  $motto = (string)$_POST["univMotto"];
  $location = (string)$_POST["univAdd"];
  $region = (string)$_POST["univRegion"];
  $tel = (string)$_POST["univTell"];
  $fax = (string)$_POST["univFax"];
  $web = (string)$_POST["univWeb"];
  $studEnroll = (string)$_POST["studEnroll"];
  $stuffEnroll = (string)$_POST["stuffEnroll"];
  $controlType = (string)$_POST["controlType"];
  $rank = (string)$_POST["univRank"];

//social media links

$facebook = (string)$_POST["facebook"];
$twitter = (string)$_POST["twitter"];
$linkedIn = (string)$_POST["linkedIn"];
$youtube = (string)$_POST["youtube"];


  $naturalPassMark = (string)$_POST["naturalPassMark"];
  $socialPassMark = (string)$_POST["socialPassMark"];


  if(isset($_POST["degreeUnderArt"])){
    $degreeUnderArt=1;
   
  }else{
    $degreeUnderArt=0;
  }
  
  if(isset($_POST["degreePostArt"])){
    $degreePostArt =1;

  }else{
    $degreePostArt=0;
  }


  if(isset($_POST["degreeUnderBusiness"])){
    $degreeUnderBusiness =1;

  }else{
    $degreeUnderBusiness=0;
  }

  if(isset($_POST["degreePostBusiness"])){
    $degreePostBusiness =1;
  }else{
    $degreePostBusiness=0;
  }


  
  if(isset($_POST["degreeUnderLanguage"])){
    $degreeUnderLanguage =1;

  }else{
    $degreeUnderLanguage=0;
  }

  if(isset($_POST["degreePostLanguage"])){
    $degreePostLanguage =1;
  }else{
    $degreePostLanguage=0;
  }

  if(isset($_POST["degreeUnderMedicine"])){
    $degreeUnderMedicine =1;

  }else{
    $degreeUnderMedicine=0;
  }
  if(isset($_POST["degreePostMedicine"])){
    $degreePostMedicine =1;

  }else{
    $degreePostMedicine=0;
  }

  
  if(isset($_POST["degreeUnderEngineering"])){
    $degreeUnderEngineering =1;

  }else{
    $degreeUnderEngineering=0;
  }

  if(isset($_POST["degreePostEngineering"])){
    $degreePostEngineering =1;

  }else{
    $degreePostEngineering=0;
  }
  if(isset($_POST["degreeUnderScience"])){
    $degreeUnderScience =1;

  }else{
    $degreeUnderScience=0;
  }
  if(isset($_POST["degreePostScience"])){
    $degreePostScience =1;

  }else{
    $degreePostScience=0;
  }
//facilities
if(isset($_POST["financialAid"])){
  $financialAid =1;

}else{
  $financialAid=0;
}

if(isset($_POST["library"])){
  $library =1;

}else{
  $library=0;
}
 if(isset($_POST["sport"])){
  $sport =1;

}else{
  $sport=0;
}
if(isset($_POST["housing"])){
  $housing =1;

}else{
  $housing=0;
}

 






$data = array(
  "Name"=> $name,
  "Overview"=> $overView,
  "Acronyms"=> $acronym,
  "FoundationYear"=> $founded,
  "Motto"=> $motto,
  "Website"=> $web,
  "Location"=> $location,
  "Phone"=> $tel,
  "Fax"=> $fax,
  "StudentSize"=> $studEnroll,
  "AcademicStaffSize"=> $stuffEnroll,
  "ControlType"=> $controlType,
  "Library"=> $library,
  "Housing"=> $housing,
  "Region"=> $region,
  "SportFacility"=> $sport,
  "FinancialAid"=> $financialAid,
  "SocialMedia"=> $facebook.",".$twitter.",".$linkedIn.",".$youtube,
  "Rank"=>$rank,
  "SocialPassMArk"=>$socialPassMark,
  "NaturalPassMArk"=>$naturalPassMark,
);     
$tempData = array(
   ["Art",$degreeUnderArt,$degreePostArt],
   ["Business",$degreeUnderBusiness,$degreePostBusiness],
   ["Language",$degreeUnderLanguage,$degreePostLanguage],
   ["Medicine",$degreeUnderMedicine,$degreePostMedicine],
   ["Engineering",$degreeUnderEngineering,$degreePostEngineering],
   ["Science",$degreeUnderScience,$degreePostScience]

  
);    
$dataStudyAreas=array("List"=>$tempData); 

$data_string = json_encode($data);     


$url= apiURL();
                                                              
$ch = curl_init($url.'/api/universities');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
'Content-Type: application/json',                                                                                
'Content-Length: ' . strlen($data_string))                                                                       
);             

//api call for study areas
   



$data_string_study_areas = json_encode($dataStudyAreas);                    
print_r($data_string_study_areas);

$updateStudyAreasURL = str_replace(' ','%20',$name);
echo($updateStudyAreasURL);
$request = curl_init($url.'/api/universities/'.$updateStudyAreasURL.'/studyAreas');                                                                      

curl_setopt($request, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($request, CURLOPT_POSTFIELDS, $data_string_study_areas);                                                                  
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($request, CURLOPT_HTTPHEADER, array(                                                                          
'Content-Type: application/json',                                                                                
'Content-Length: ' . strlen($data_string_study_areas))                                                                       
);                                                                                                                   



$result =curl_exec($ch);
$resultStudyAreas=curl_exec($request);
?>
<script>

window.location.href ="colleges.php";

</script>

<?php


}



?>


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
         <p class="m-2">&copy; 2021 Azur Consultancy</p>
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
             <li class="my-2"><a class="text-info" href="inspire.php">Inspirational Advice</a> </li>
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

   
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
       

  <script>
    AOS.init();
  </script>
    <script src="./Assets/JS/univEdit.js"></script>
  <script src="./Assets/JS/style.js"></script>

<script>
  // $(document).ready(function() {
  //       $('#degree').multiselect({
  //           buttonWidth : '100%',
  //           maxHeight : 100,
  //           includeSelectAllOption : true,
  //           dropRight : true
  //       });
  //   });
    </script>
  <script>
       function bootstrapGrowl(){
      $.bootstrapGrowl("College added to list.",{
type:"success",
offset:{from:"top",amount:200},
align:"center",
delay:2000,
allow_dismiss:true,
stackup_spacing: 10,


  });
}
  </script>  

</body>
</html>
