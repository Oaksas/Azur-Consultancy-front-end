let DB;
let order = 1;

const user = document.querySelector('#user'); 

const newQuestion = document.querySelector('#newQuestion'); 
const submit = document.querySelector('.submitQuestion'); 
const answerView = document.querySelector('#answer'); //The UL
const timeStampView = document.querySelector('#timeStamp'); //The UL
const askerView = document.querySelector('#user'); //The UL

const questionsView = document.querySelector('#question'); //The UL
const questionsList = document.querySelector('#QuestionsView'); //The UL



document.addEventListener('DOMContentLoaded', () => {
    
    let univDB = indexedDB.open('univDB', 1);

    // if there's an error
    univDB.onerror = function() {
            console.log('There was an error');
        }

  

        univDB.onsuccess = function() {
        submit.addEventListener('click', addQuestion)
        

        // save the result
        DB = univDB.result;
        var date = new Date();
        dateYear = date.getFullYear()
        dateMonth = date.getMonth()
        dateDate = date.getDate()
        dateHour = date.getHours()
        dateMinute = date.getMinutes()




        let addQ = {
            question:"" ,
            asker:"",
            timeStamp:`${dateHour}:${dateMinute} ${dateDate}.${dateMonth}.${dateYear}`,
            
        }
        displayQuestions()
        function addQuestion(){
            // Insert the object into the database 
            let transaction = DB.transaction(['questionAndanswer'], 'readwrite');
            let objectStoreQA = transaction.objectStore('questionAndanswer');
      
            objectStoreQA.openCursor().onsuccess = function(e) {
              addToDb();
              let requestt = objectStoreQA.add(addQ);
              requestt.onsuccess = () => {



              } 
          
          } 
           
          transaction.oncomplete = () => {
              console.log('New question added');
           
      
      
              
          }
          transaction.onerror = () => {
              console.log('There was an error, try again!');

          }
      
      
          
      }

      // submit answer section

      // function submitAns(e){
           
      //       let quesID = Number(e.target.parentElement.parentElement.parentElement.getAttribute('question_id'));
      //       // use a transaction

      //       let transaction = DB.transaction(['questionAndanswer'], 'readwrite');
      //       let objectStore = transaction.objectStore('questionAndanswer');
            

      //       objectStore.openCursor().onsuccess = function(e) {
      //           // assign the current cursor
      //           let cursor = e.target.result;
       
      //           if (cursor) {
      //               if (cursor.value.id === quesID) {
      //                 const updateData = cursor.value;
              
      //                 updateData.answer = "Answered";
      //                 const request = cursor.update(updateData);
      //                 request.onsuccess = function() {
      //                   console.log('Answered');
      //                 };
      //               };
      //               cursor.continue();

      //           }
              
               
      //     }

      //       transaction.oncomplete = () => {

      //       }

    


      // }


      function displayQuestions() {
        // clear the previous task list
       

        // create the object store
        let objectStore = DB.transaction('questionAndanswer').objectStore('questionAndanswer');

        objectStore.openCursor().onsuccess = function(e) {
            // assign the current cursor
            let cursor = e.target.result;

            if (cursor) {   
                rank = cursor.value.id;
                add(cursor.value.id,cursor.value.asker,cursor.value.timeStamp,cursor.value.question,cursor);
                cursor.continue();
            } else{console.log("Nan")}
              
            
      }
    }
    function add( id,asker, timeStamp,question,cursor){
      

    

        const divContainer = document.createElement('div');




        divContainer.className="container my-5 rounded py-4"
        divContainer.setAttribute('question_id',id);

        divContainer.style.backgroundColor="white"



         divContainer.innerHTML = `

         <div class="shadow-lg row mt-5 ">
         <div class="col-sm-2 col-lg-1 col-md-3">
           <img src="https://img.icons8.com/fluent/48/000000/person-male.png"/>
         </div>
         <div class="col-sm-10 col-lg-10 col-md-10 display-6 " id="question">
${question}          
          </div>
    
       

     </div>
     <hr class="text-black" >

     <div class="row">
       <div class="col-lg-1"></div>
       
          <div class="col-sm-2 col-lg-2 col-md-2 col-4 py-3 text-success fw-bolder" id="user">
           <i class="fas fa-user-edit text-success"></i>  ${asker}  </div>
         <div class="col-sm-2 col-lg-2 col-md-2 py-3 col-4">
           <i class="fas fa-stopwatch text-success" ></i>  <span >${timeStamp}</span>

         </div>
         <div class="col-sm-2 col-lg-2 col-md-2 py-3 col-4">
           <i class="far fa-comments text-success"></i> <span ><a href="./answers.php?id=${cursor.value.id}">Answers</a></span>

         </div>
         <div class="col-sm-2 col-lg-2 col-md-2 py-3 col-4">
           <i class="fas fa-comment-dots text-success"></i> <span><a href="./comment.php?id=${cursor.value.id}">Comment</a></span>

         </div>
   </div>


 `
        questionsList.append(divContainer)
       

    }
      function addToDb(){

        addQ.question =newQuestion.value;
        addQ.asker = askerView.innerHTML;
        
    
    
        
    
    
    }
      


     
      
        
        
        
    
    
    
}

 


});

