let DB;
let order = 1;
let qID = 1;
let commenter =""
let comment = ""




const questionView = document.querySelector('#question'); 

const askerView= document.querySelector('#asker'); 

const user= document.querySelector('#user'); 
const answers= document.querySelector('#answers'); 

const commentBtn= document.querySelector('#comment'); 

const textArea= document.querySelector('#commentField'); 

const timeStampView = document.querySelector('#timeStamp'); 
const answerContainerView = document.querySelector('#answersContainer'); 

const urlParams = new URLSearchParams(window.location.search);
const questionID = urlParams.get('id').trim();


document.addEventListener('DOMContentLoaded', () => {
    

    let univDB = indexedDB.open('univDB', 1);

    // if there's an error
    univDB.onerror = function() {
            console.log('There was an error');
        }

  

        univDB.onsuccess = function() {
        

        // save the result
        DB = univDB.result;
        commentBtn.addEventListener('click',add)
        var date = new Date();
        dateYear = date.getFullYear()
        dateMonth = date.getMonth()
        dateDate = date.getDate()
        dateHour = date.getHours()
        dateMinute = date.getMinutes()
        let addComment = {
          comment:"" ,
          commenter:"",
          timeStamp:`${dateHour}:${dateMinute} ${dateDate}.${dateMonth}.${dateYear}`,
          ID : ""
          
      }
     
        displayQuestion()
        
//add to database

function add(){
  // Insert the object into the database 
  let transaction = DB.transaction(['Answers'], 'readwrite');
  let objectStoreAnswer = transaction.objectStore('Answers');

  objectStoreAnswer.openCursor().onsuccess = function(e) {
    addToDb();
    let request = objectStoreAnswer.add(addComment);
    request.onsuccess = () => {

    } 

} 
 
transaction.oncomplete = () => {
    console.log('New comment added');
 


    
}
transaction.onerror = () => {
    console.log('There was an error, try again!');
}



}


     
function displayQuestion() {
  //Object stores  of question and answer

  let objectStoreQuestion = DB.transaction('questionAndanswer').objectStore('questionAndanswer');
  let objectStoreAnswer = DB.transaction('Answers').objectStore('Answers');



  //Painting the quesiton and answer UI
  objectStoreQuestion.openCursor().onsuccess = function(e) {

    // assign the current cursor
    let cursor = e.target.result;

    if (cursor) {   

      if(parseInt(cursor.value.id ) === parseInt(questionID) ){

        paintQuestion(cursor.value.asker,cursor.value.timeStamp,cursor.value.question,cursor);

      }
      cursor.continue();

    } else{console.log("Nan")}
      
    
}
  
}
// painting functions

    // painting functions

    function paintQuestion( asker, timeStamp,question,cursor){
      
     questionView.innerHTML = question;
     timeStampView.innerHTML = timeStamp;
     askerView.innerHTML = asker;
     answers.innerHTML = `<i class="far fa-comments text-success"></i> <span ><a href="answers.php?id=${cursor.value.id}">Answers</a></span>
     `

    
       

    }
      function addToDb(){

        addComment.ID = questionID;
        addComment.comment = textArea.value
        addComment.commenter = user.innerHTML
      
        
    
    
        
    
    
    }
      



     
      
        
        
        
    
    
    
}

 


});

