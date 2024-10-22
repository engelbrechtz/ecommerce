const loginContainer = document.querySelector('.login-container');
const form = document.querySelector('.form');
const inputField = document.getElementById('input_field')
const emailErrorBox = document.getElementById('email_error');
const emailSuccessBox = document.getElementById('email_success');

// Function to validate email

const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function validateUsername(username) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(username);
}

// Function to validate password
function validatePassword(password) {
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return regex.test(password);
}

// Event listener for form submission
form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  if(inputField === '' || inputField === null){
    emailErrorBox.innerHTML = "Please enter details in field";
    emailErrorBox.style.color= 'red';
    
    setTimeout(function(){
      emailErrorBox.style.display = 'none'; 
      emailErrorBox.textContent ='';
        }, 2000) 
    } 
});