import sign  from './components/sign.vue';
import home  from './components/home.vue';
import collegeList  from './components/collegeList.vue';
import personalList  from './components/personalList.vue';
import collegeInfo  from './components/collegeInfo.vue';
import collegeEdit  from './components/collegeEdit.vue';
import collegeEdit  from './components/about.vue';
import collegeEdit  from './components/questionAndanswer.vue';





export default[
    {path:'/sign',name:"sign",component:sign},
    {path:'/',name:"home",component:home},
    {path:'/colleges',name:"colleges",component:collegeList},
    {path:'/personaList',name:"personaList",component:personalList},
    {path:'/collegeInfo',name:"collegeInfo",component:collegeInfo},
    {path:'/collegeEdit',name:"collegeEdit",component:collegeEdit},




    

]
