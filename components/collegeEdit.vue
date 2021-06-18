<template>
<header>
  
   
      <div class="row my-5 pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 my-5" data-aos="zoom-out-up">
         <div class="main text-center">
           <img class="d-block w-100 img-fluid rounded " id="cover" src="Assets/Images/Covers/University of Gondar.jpg"  alt="University Image">

 
             
           </div>
        </div>
    </div>
    <div class="row" data-aos="zoom-in-right">
      <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 display-6" id="unname">Addis Ababa University</div>
      <div class="col-lg-4 col-md-4"></div>

      <div class="col-md-3"><button type="button" class="btn btn-outline-success btn-lg" id="addToList"><i class="fas fa-edit text-success"></i> Add new University </button>
      </div>

  </div>

  <div class="container py-4 mt-4 container_one" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <h4 class="header text-success" >Overview <i class="fas fa-binoculars text-success"></i></h4>
    <hr class="text-black" >





    <form action="" method="post">

  <div class="px-4" id="overview">
   <div class="form-group">
    
    <textarea class="form-control" id="overview" rows="5"></textarea>
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
  <input type="email" class="form-control" id="univName" placeholder="University Name">
</span>
</div>
<div class="row my-3">
  <h4 class="text-primary">Acronym</h4>
   <span id="unacr">
   <input type="email" class="form-control" id="univAcr" placeholder="Acronym">

   </span>
</div>
  <div class="row my-3">
    <h4 class="text-primary">Founded</h4> 
    <span id="unfounded">
    
    <input type="text" class="form-control" id="univFounded" placeholder="Founded">

    </span>
  </div>
    <div class="row my-3">
      <h4 class="text-primary">Motto</h4> 
      <span id="unmotto">
      <input type="text" class="form-control" id="univMotto" placeholder="Motto">

      
      </span>
    </div>
      <div class="row my-3">
        <h4 class="text-primary">Website </h4> 
        <span id="unweb">
        <input type="email" class="form-control" id="univWeb" placeholder="Website">

        
        </span>
 
        </div>
</div>


    </div>
  
    <div class="col-lg-4 col-md-12 col-sm-12 my-4">
      <div class="container-fluid container_one py-4">
        <h4 class="header text-success">University Location <i class="fas fa-compass text-success"></i></h4>
        <hr class="text-black" >
      <div class="row" >
        <h4 class="text-primary"><i class="fas fa-thumbtack "></i></h4> <span id="address">
        <input type="text" class="form-control" id="univAdd" placeholder="Address">

        </span>
      </div>
      <div class="row my-3" >
        <h4 class="text-primary"><i class="fas fa-phone"></i></h4>
         <span id="tel">
        <input type="tel" class="form-control" id="univTell" placeholder="Tel">
         
         
         </span>
        </div>
        <div class="row my-3" >
          <h4 class="text-primary"><i class="fas fa-fax"></i></h4>
           <span id="fax">
           <input type="tel" class="form-control" id="univFax" placeholder="Fax">

           
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
      <div class="form-group">
    <select multiple class="form-control" id="degree">
      <option>Undergraduate</option>
      <option>Postgraduate</option>
   
    </select>
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
<div class="form-group">
<select multiple class="form-control" id="degree">
<option>Undergraduate</option>
<option>Postgraduate</option>

</select>
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
      <div class="form-group">
    <select multiple class="form-control" id="degree">
      <option>Undergraduate</option>
      <option>Postgraduate</option>
   
    </select>
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
<div class="form-group">
<select multiple class="form-control" id="degree">
<option>Undergraduate</option>
<option>Postgraduate</option>

</select>
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
<div class="form-group">
<select multiple class="form-control" id="degree">
<option>Undergraduate</option>
<option>Postgraduate</option>

</select>
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
<div class="form-group">
<select multiple class="form-control" id="degree">
<option>Undergraduate</option>
<option>Postgraduate</option>

</select>
</div>
</span>   

<hr class="text-black" >
</div>
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
  <input type="text" class="form-control" id="studEnroll" placeholder="example 20,000">

  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-user-friends"></i> Academic Stuff</h4> 
  <span id="unstuff">
  <input type="text" class="form-control" id="stuffEnroll" placeholder="example 20,000">

  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-university"></i>  Control Type    </h4>
  <span id="uncontrol">
  <input type="text" class="form-control" id="controlType" placeholder="Public">

  </span>

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
  
  <h4 class="text-primary">Library <i class="fas fa-book-open"></i></h4>
  
  
   <span id="ulib">
   <input class="form-check-input" type="checkbox" id="library">

   </span>
</div>
<div class="row my-3">
   
  <h4 class="text-primary">Housing <i class="fas fa-warehouse"></i></h4> 
  <span id="uhouse">
  <input class="form-check-input" type="checkbox" id="housing">

  </span>

</div>
<div class="row my-3">
  <h4 class="text-primary">  Sport Facilities	<i class="fas fa-volleyball-ball"></i>   </h4> 
  <span id="usport">
  <input class="form-check-input" type="checkbox" id="sport">

  </span>
 
  </div>
  <div class="row my-3">
    <h4 class="text-primary">     Financial Aids <i class="fas fa-hands-helping"></i>   </h4>
     <span id="ufinance">
     <input class="form-check-input" type="checkbox" id="financialAid">

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
  <input type="text" class="form-control" id="controlType" placeholder="facebook">

  
  </span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/twitter.png"/> </h4> 
  <span id="utwitter">
  <input type="text" class="form-control" id="controlType" placeholder="twitter">

  </span>
 
</div>
<div class="row my-3">
    
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/linkedin.png"/> </h4>
  
   <span id="ulinkedln">
   <input type="text" class="form-control" id="controlType" placeholder="linkedIn">

   </span>
<!-- this is the last one -->
  </div>
  <div class="row my-3">
   
  <h4 class="text-primary"><img src="https://img.icons8.com/plasticine/40/000000/youtube.png"/> </h4>
   <span id="uyoutube">
   <input type="text" class="form-control" id="controlType" placeholder="youtube">

   </span>

    </div>
   
</div>


  </div>




  </div>
  <div class="col-md-3"><button type="button" class="btn btn-outline-success btn-lg" id="addToList"><i class="fas fa-edit text-success"></i> Save Changed </button>
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
