
<template>

<header>
  
       <div class="row my-5 pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 my-5" data-aos="zoom-out-up">
         <div class="main text-center">
           <img class="d-block w-100 img-fluid rounded " id="cover" src="/src/assets/images/Covers/University of Gondar.jpg"  alt="University Image">

 
             
           </div>
        </div>
    </div>
    <div class="row" data-aos="zoom-in-right">
      <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 display-6" id="unname">Addis Ababa University</div>
      <div class="col-lg-4 col-md-4"></div>

      <div class="col-md-3"><button type="button" class="btn btn-outline-success btn-lg"  onclick="bootstrapGrowl()" id="addToList"><i class="fas fa-edit text-success"></i> Add to List </button>
      </div>

  </div>

  <div class="container py-4 mt-4 container_one" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <h4 class="header text-success" >Overview <i class="fas fa-binoculars text-success"></i></h4>
    <hr class="text-black" >

  <div class="px-4" id="overview">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    Why do we use it?
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    
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
<h4 class="text-primary">Name</h4> <span id="unname"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary">Acronym</h4> <span id="unacr"></span>
</div>
  <div class="row my-3">
    <h4 class="text-primary">Founded</h4> <span id="unfounded"></span>
  </div>
    <div class="row my-3">
      <h4 class="text-primary">Motto</h4> <span id="unmotto"></span>
    </div>
      <div class="row my-3">
        <h4 class="text-primary">Website </h4> <span id="unweb"></span>
 
        </div>
</div>


    </div>
  
    <div class="col-lg-4 col-md-12 col-sm-12 my-4">
      <div class="container-fluid container_one py-4">
        <h4 class="header text-success">University Location <i class="fas fa-compass text-success"></i></h4>
        <hr class="text-black" >
      <div class="row" >
        <h4 class="text-primary"><i class="fas fa-thumbtack "></i></h4> <span id="address"></span>
      </div>
      <div class="row my-3" >
        <h4 class="text-primary"><i class="fas fa-phone"></i></h4> <span id="tel"></span>
        </div>
        <div class="row my-3" >
          <h4 class="text-primary"><i class="fas fa-fax"></i></h4> <span id="fax"></span>
        </div>
         
      </div>
      
      
          </div>


    </div>


<!--University courseList section-->

<div class="container container_one py-4 my-4" data-aos="zoom-out-right">
<h4 class="header text-success">Study Areas and Degree Levels <i class="fas fa-user-graduate text-success"></i></h4>
<hr class="text-black" >  
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"></div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <h5 class=" text-success "><img src="https://img.icons8.com/wired/30/000000/university.png"/> Undergraduate</h5>
    <hr class="text-black" >
  </div>


    <div class="col-lg-4 col-md-4 col-sm-4"><h5 class=" text-success "><img src="https://img.icons8.com/android/30/000000/university.png"/> Postgraduate</h5>
      <hr class="text-black" ></div>
  </div>


  <!--Arts & Humanities-->
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/plasticine/50/000000/art-prices.png"/>Arts & Humanities</div>
  
    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="artUnderCheck" ></span>   
      
      <hr class="text-black" >
    </div>
  
      <div class="col-lg-4 col-md-4 col-sm-4">

        <span id="artPostCheck" ></span>     
        
        <hr class="text-black" ></div>
    </div>
  <!--Business & Social Sciences -->

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/bubbles/50/000000/man-with-red-tie-target.png"/>Business & Social Sciences </div>
    
      <div class="col-lg-4 col-md-4 col-sm-4">

        <span id="businessUnderCheck" ></span>     

        <hr class="text-black" >
      </div>
    
        <div class="col-lg-4 col-md-4 col-sm-4">
          <span id="businessPostCheck" ></span>    
          <hr class="text-black" >
        
        
        </div>
      </div>

 <!--Language & Cultural -->

 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/bubbles/50/000000/globe.png"/>Language & Cultural </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <span id="languageUnderCheck" ></span> 

    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="languagePostCheck" ></span> 

      <hr class="text-black" ></div>
  </div>

 <!--Medicine & Health -->

 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/pastel-glyph/50/000000/first-aid-kit.png"/> Medicine & Health </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="medicineUnderCheck" ></span> 

    <hr class="text-black" >
  </div>

<form action="" method="post">

    <div class="col-lg-4 col-md-4 col-sm-4">
      
      <span id="medicinePostCheck" ></span> 

      <hr class="text-black" ></div>
  </div>

<!-- Engineering-->

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/officel/50/000000/engineering.png"/>Engineering </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="engineeringUnderCheck" ></span> 


    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
      
      <span id="engineeringPostCheck" ></span> 
      <hr class="text-black" ></div>
  </div>

<!-- Science & Technology-->

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/color/50/000000/stargaze.png"/>Science & Technology </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="scienceUnderCheck" ></span> 



    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="sciencePostCheck" ></span> 


      <hr class="text-black" ></div>
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
  <h4 class="text-primary"><i class="fas fa-user-clock "></i> Student Enrollment</h4> <span id="unenroll"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-user-friends"></i> Academic Stuff</h4> <span id="unstuff"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-university"></i>  Control Type    </h4> <span id="uncontrol"></span>

  </div>

   
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
  
  <h4 class="text-primary">Library <i class="fas fa-book-open"></i></h4> <span id="ulib"></span>
</div>
<div class="row my-3">
   
  <h4 class="text-primary">Housing <i class="fas fa-warehouse"></i></h4> <span id="uhouse"></span>

</div>
<div class="row my-3">
  <h4 class="text-primary">  Sport Facilities	<i class="fas fa-volleyball-ball"></i>   </h4> <span id="usport"></span>
 
  </div>
  <div class="row my-3">
    <h4 class="text-primary">     Financial Aids <i class="fas fa-hands-helping"></i>   </h4> <span id="ufinance"></span>

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
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/facebook-new.png"/> </h4> <span id="ufacebook"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/twitter.png"/> </h4> <span id="utwitter"></span>
 
</div>
<div class="row my-3">
    
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/linkedin.png"/> </h4> <span id="ulinkedln"></span>
<!-- this is the last one -->
  </div>
  <div class="row my-3">
   
  <h4 class="text-primary"><img src="https://img.icons8.com/plasticine/40/000000/youtube.png"/> </h4> <span id="uyoutube"></span>

    </div>
   
</div>


  </div>




  </div>
  
</form>


</header>
</template>

<script>
export default {

    
  data () {
	  
    return {
		
		
		
    } 
  },
  methods:{
    
	
	

  },

}
</script>

<style scoped>

</style>
