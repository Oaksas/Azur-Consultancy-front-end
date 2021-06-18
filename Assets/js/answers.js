let DB;
let order = 1;
let  commentCount = 0;



const questionView = document.querySelector('#question'); 
const askerView= document.querySelector('#asker'); 
const cCount= document.querySelector('#commentCount'); 
const commentLink = document.querySelector("#comment");
const timeStampView = document.querySelector('#timeStamp'); 
const answerContainerView = document.querySelector('#answersContainer'); 

const urlParams = new URLSearchParams(window.location.search);
const questionID = urlParams.get('id').trim();


document.addEventListener('DOMContentLoaded', () => {
    

    let univDB = indexedDB.open('univDB', 1);
    commentLink.innerHTML =` <a href="comment.php?id=${questionID}">Comment</a>`
    // if there's an error
    univDB.onerror = function() {
            console.log('There was an error');
        }

  

        univDB.onsuccess = function() {
        

        // save the result
        DB = univDB.result;
   


     
        displayQuestion()


      function displayQuestion() {
        //Object stores  of question and answer

        let objectStoreQuestion = DB.transaction('questionAndanswer').objectStore('questionAndanswer');
        let objectStoreAnswer = DB.transaction('Answers').objectStore('Answers');



        //Painting the quesiton and answer UI
        objectStoreQuestion.openCursor().onsuccess = function(e) {

          // assign the current cursor
          let cursor = e.target.result;
  
          if (cursor) {   
  
            if(parseInt(cursor.value.id )=== parseInt(questionID) ){
  
              paintQuestion(cursor.value.asker,cursor.value.timeStamp,cursor.value.question);
            }
            cursor.continue();
  
          } else{console.log("Nan")}
            
          
    }
        objectStoreAnswer.openCursor().onsuccess = function(e) {
            // assign the current cursor
            let cursor = e.target.result;

            if (cursor) {   
          
                if(cursor.value.ID === questionID){
                  rank = cursor.value.id;

                  paintAnswers(cursor.value.commenter,cursor.value.timeStamp,cursor.value.comment);
                
     
              }
              cursor.continue();

              
            } else{        cCount.innerHTML = commentCount
            }
              
            
      }
   
    }
    // painting functions

    function paintAnswers(responder,timeStamp,answer){
      commentCount +=1
      var questionEach = document.createElement('div');
      questionEach.style.backgroundColor = "white"
      questionEach.classList = "py-2 my-4"

      questionEach.innerHTML = `
        <div class="row mb-3 shadow  ">
          <div class="col-sm-2 col-lg-1 col-md-3">
          </div>
          <div class="col-sm-10 col-lg-10 col-md-10  " >
${answer}           </div>
        
        
        
        </div>
        
        <div class="row mb-3">
        <div class="col-lg-1"></div>
        
           <div class="col-sm-2 col-lg-2 col-md-2 py-3 text-success fw-bolder" id="user">
            <i class="fas fa-user-edit text-success"></i>  ${responder}        </div>
          <div class="col-sm-2 col-lg-2 col-md-2 py-3">
            <i class="fas fa-stopwatch text-success" ></i>  <span >${timeStamp}</span>
        
          </div>
         
        </div>`

        answerContainerView.appendChild(questionEach);
    }
    function paintQuestion( asker, timeStamp,question){
     questionView.innerHTML = question
     timeStampView.innerHTML = timeStamp
     askerView.innerHTML = asker
   

    
       

    }
   



     
      
        
        
        
    
    
    
}

 


});

