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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="./Assets/CSS/about.css">
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
	
	<!-- below the navbar -->
	<div class="container-fluid my-5 pt-2 pb-5" >
		<div class="container mt-5" data-aos="flip-up">
			<div class="row">
				<div class="col-sm-1 d-none d-lg-block "><div class = "vertical"></div> </div>
				<div class="col-md-6 col-xs-12 about-header-text">
					<div class="display-4">About Azur  Consultancy</div>

				<div class="description mx-xs-5 my-5 mx-1">
					<p class="text-about ml-5">   We are  volunteers which minimizes the load and the challenges of the students joining 
						higher education at universities and colleges by giving the reliable and exact information.  
					</p>
          <a href="index.php">					<button class="btn btn-success btn-below-header-text mt-3">Take me to homepage </button></a>
				</div>
			  	</div>
			  	<div class="col-md-4 col-xs-12 mx-4">
					<div class="right-header display-6 text">What We Do</div>
					<hr>
					<div>
						<h5><i class="fas fa-university text-success mx-3"></i>Consulting services</h5>
						<p class="text-file" >We are giving consulting services at any time 24/7 online about how to join the best university using your score</p>
					</div>
					<div>
						<h5> <i class="fas fa-graduation-cap text-success mx-3"></i>The list of all Universities</h5>
						<p class="text-file">You can access all the list of Ethiopian Universities and their major course offerings</p>
					</div>
					<div>
						<h5><i class="fas fa-calculator text-success mx-3"></i>Calculating the chance</h5>
						<p class="text-file">You can calculate your chance of joining the best Universities</p>
					</div>
			  	</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="text-center">
			<div class="display-6">About college Consultancy</div>
			<hr class="hr">
		</div>
		<div class="row my-5">
			<div class="col-md-5 col-6  col-xs-12 col-sm-12 mb-4">
               <p class="miss text-success"> <img src="https://img.icons8.com/emoji/30/000000/bullseye.png"/> Our missions</p>
			   <hr>
			   <p class="mission shadow p-2" data-aos="fade-right"><i class="fas fa-medal"></i>  Our first mission is to provide free consultancy to help students and families choose from private or governmental college, 
				or other program that will foster the student's academic and social growth. We are providing a student and family with
				 individual attention, firsthand knowledge of hundreds of educational opportunities in Ethiopian Universities and colleges, and the time to explore all of the options.</p>
	
				<p class="my-2 mission shadow p-2 " data-aos="fade-right"> <i class="fas fa-medal"></i> Using our experience, we broaden the students potential choices and provide vital help in weighing factors 
					such as cost, location and curriculum. This gives students and families the 
					opportunity to explore a wider variety of options and discuss possibilities in a meaningful way.</p>
			</div>
      <div class="col-md-2 col-12"></div>
        <div class="col-md-5 col-6 col-xs-12 col-sm-12">
				<p class="miss text-success"><img src="https://img.icons8.com/color/30/000000/mission-of-a-company.png"/> Our Goals</p>
        <hr>

				<p class="mission shadow p-2 " data-aos="fade-left"><i class="fas fa-medal"></i> The main goal of this college consultancy is pulling to the best Universities based on thier 
					scores in order to be acceptable and get their top choices and minimizing the cost, location
					and many other constraints of students which challenged them not to success in thier higher educations.
				<p></p>
			</div>
		</div>
	</div>
   
    

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
                <li class="my-2"><a class="text-info" href="collegeListPersonal.html">Build Your  List</a> </li>
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
