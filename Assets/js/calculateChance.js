let DB;
let order = 1;
let markUpdated;
const mark = document.querySelector('#mark'); //The UL
const gender = document.querySelector('#gender'); //The UL
const field = document.querySelector('#field'); //The UL
const disability = document.querySelector('#disability'); //The UL
const calculate = document.querySelector('#submit'); //The UL
const univList = document.querySelector('.univList'); //The UL


calculate.addEventListener('click',displayCollegeList);



    let univDB = indexedDB.open('univDB', 1);

    // if there's an error
    univDB.onerror = function() {
            console.log('There was an error');
        }

  

        // if everything is fine, assign the result to the instance
        univDB.onsuccess = function() {
        // console.log('Database Ready');

        // save the result
        DB = univDB.result;

    
        }


    function affirmative(){
        if(gender.value === "Female"){ markUpdated = parseInt(mark.value) +10}
        if(disability.value === "Disabled") markUpdated = parseInt(markUpdated) +30
    }


    function displayCollegeList() {
        markUpdated = mark.value
        affirmative();

      
        var fTemp = ""   
        univList.innerHTML = ""
        order = 1
        
        if(parseInt(markUpdated)<=300){
            univList.innerHTML = `<span style="color:red;font-size:60px;"> <i class="fas fa-window-close text-danger"></i> Under the passing mark.</span>`
            
            return

        }
        if(parseInt(markUpdated)>700){
            univList.innerHTML = `<span style="color:red; font-size:60px;" text-center> <i class="fas fa-window-close text-danger"></i> Invalid Input</span>`
            
            return

        }


       field === "Natural"? fTemp ="naturalMark" : fTemp ="socialMark" //Field chosen

        // create the object store
        let objectStore = DB.transaction('univLists').objectStore('univLists');

        
        objectStore.openCursor().onsuccess = function(e) {
            // assign the current cursor
            let cursor = e.target.result;

            if(fTemp === "naturalMark"){
                if (cursor) {
                    if(cursor.value.naturalMark<= parseInt(markUpdated) ){
    
    
                    add(cursor.value.id, cursor.value.univName,cursor.value.acronym);
    
                }
                cursor.continue();
    
            }
            }
            else if(fTemp ==="socialMark"){
                if (cursor) {
                    if(cursor.value.socialMark<= parseInt(markUpdated) ){
    
    
                    add(cursor.value.id, cursor.value.univName,cursor.value.acronym);
    
                }
                cursor.continue();
    

            }

          
    }
}}




    function add(rank,univName,arg){

        const divIdRow = document.createElement('div');
        const divIdCol1 = document.createElement('div');
        const divIdCol2 = document.createElement('div');
        const divIdCol3 = document.createElement('div');

        


        // Add class and the x marker for a 
        divIdRow.className = 'row';
        divIdCol1.className = 'col-2';
        divIdCol2.className = 'col-8';
        divIdCol3.className = 'col-1';

    

        

        divIdCol1.innerHTML = order;
        order +=1;
        divIdCol2.innerHTML = `
         
        <a href="./collegeInfo.php?univName=${univName}">${univName} </a>

        `;
        divIdCol3.innerHTML = arg;

    
        divIdRow.appendChild(divIdCol1);
        divIdRow.appendChild(divIdCol2);
        divIdRow.appendChild(divIdCol3);

        univList.appendChild(divIdRow);


      
        
    }    




