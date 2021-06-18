const genderSelect = document.querySelector('#gender')
const marks = document.querySelector('#fname')
const disability = document.querySelector('#disability')
const submitBtn = document.querySelector('#submitForm')
const displayValue = document.querySelector('.demo') 

function calculateChances(){
    let mark = marks.value
    let gender = genderSelect.options[genderSelect.selectedIndex].text
    let diabilityStatus = disability.options[disability.selectedIndex].text 
    if(mark >= 400 && gender.trim() == "female"){[
        displayValue.innerHTML = 'female'
    ]}
}
submitBtn.addEventListener('click', calculateChances)


