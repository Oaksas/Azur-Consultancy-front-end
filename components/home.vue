
<template>

<header>
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
                  <img class="d-block w-100 img-fluid rounded" src="/src/assets/images/collegeFrontImg1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid d-block w-100 rounded  " src="/src/assets/images/collegeFrontImg2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="/src/assets/images/collegeFrontImg3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="/src/assets/images/collegeFrontImg4.png" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid rounded" src="/src/assets/images/collegeFrontImg5.png" alt="Fifth slide">
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
                    <img class="card-img-top" src="/src/assets/images/AddisAbabaUniversity.jpg" alt="Card image cap">
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
