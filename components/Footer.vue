<template>

		<!-- footer-copyright start -->
	 <footer class="footer_link navbar-fixed-bottom" >
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


 
</template>

<script>
import {bus}from '../main'

export default {
 props:{
   title:{
     type:String
   }
 },
  data () {
    return {
      isFooter:true,
    }
  },
  created()
  {
	  	  this.changeFooter();
bus.$on('titleChanged',(data) =>{
  this.title =data;
})

  },
  methods :{
	  	  changeFooter:function(){
		if(this.$route.name == "login"){
			  this.isFooter =false;
		  };
	  }
  }, 
   beforeMount(){
	  this.changeFooter()
  }
 
}
</script>
