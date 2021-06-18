<template>

    <div>
      <app-header></app-header>
      <router-view ></router-view>
      <app-footer></app-footer>

    </div>
</template>

<script>
import header from './components/Header.vue';
import footer from './components/Footer.vue';

export default {
  
  components:{
     'app-header': header,
     'app-footer': footer
},
  data () {

    return {

     
    }
  },
 

 
 
 
 
}
</script>

<style>

</style>
