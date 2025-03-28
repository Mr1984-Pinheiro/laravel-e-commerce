const signinBtn = document.querySelector('.signinbtn');
const signupBtn = document.querySelector('.signupbtn');
const formBx = document.querySelector('.formBx');
const body = document.querySelector('body');



signupBtn.onclick = function(){
    formBx.classList.add('active')
    body.classList.add('active')
}

signinBtn.onclick = function(){
    formBx.classList.remove('active')
    body.classList.remove('active')
}

function hideMessages() {
    const messages = document.querySelectorAll('.message-container');
    messages.forEach(message => {
        setTimeout(() => {
            message.classList.add('hide');
        }, 3000); 
    });
}    
document.addEventListener('DOMContentLoaded', hideMessages);