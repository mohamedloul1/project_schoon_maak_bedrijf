iconDonkerMode = document.querySelector('.dark-mode-siwtch');
navbarBtn = document.querySelector('#menu-btn');
iconDonkerMode.onclick = () => {
    document.querySelector('body').classList.toggle('donker-mode');
};
navbarBtn.onclick = () => {
    navbarBtn.classList.toggle('fa-times');
    document.querySelector('.navbar').classList.toggle('active');
};
const errorName = document.getElementById('message-name');
const errorEmail = document.getElementById('message-email');
const errorPhone = document.getElementById('message-phone');
const errorMessage = document.getElementById('message-opmerking');
const submitError = document.getElementById('submit-error');
function validate() {
    var name = document.getElementById('naam').value;

    if (name.length == 0) {
        errorName.innerHTML = "<i class='fa-solid fa-circle-check'></i> enter your name";
        document.getElementById('naam').style.border = '2px solid red';
        return false;
    } else if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        errorName.innerHTML = "<i class='fa-solid fa-circle-check'></i>Write full name";
        document.getElementById('naam').style.border = '2px solid red';
        return false;
    }
    else {
        errorName.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        document.getElementById('naam').style.border = '2px solid green';
    }
}
function validateEmail() {
    var email = document.getElementById('email').value;

    if (email.length == 0) {
        errorEmail.innerHTML = "<i class='fa-solid fa-circle-check'></i> enter your email";
        document.getElementById('email').style.border = '2px solid red';
        return false;
    } else if (!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        errorEmail.innerHTML = "<i class='fa-solid fa-circle-check'></i> type meaningful email";
        document.getElementById('email').style.border = '2px solid red';
        return false;
    }
    else {
        errorEmail.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        document.getElementById('email').style.border = '2px solid green';
    }
}
function validatePhone() {
    var phone = document.getElementById('telefoonnummer').value;

    if (phone.length == 0) {
        errorPhone.innerHTML = "<i class='fa-solid fa-circle-check'></i> enter your phonenumber";
        document.getElementById('telefoonnummer').style.border = '2px solid red';
        return false;
    } else if (!phone.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)) {
        errorPhone.innerHTML = "<i class='fa-solid fa-circle-check'></i>  type meaningful phonenumber";
        document.getElementById('telefoonnummer').style.border = '2px solid red';
        return false;
    }
    else {
        errorPhone.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        document.getElementById('telefoonnummer').style.border = '2px solid green';
        return true;
    }
}
function validateMessage() {
    var message = document.getElementById('message').value;

    if (message == 0) {
        errorMessage.innerHTML = "<i class='fa-solid fa-circle-check'></i> enter your message";
        document.getElementById('message').style.border = '2px solid red';
        return false;
    }
    else {
        errorMessage.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        document.getElementById('message').style.border = '2px solid green';
        return true;
    }
}
function validateForm() {
    if (!(validate() || validateEmail() || validatePhone() || validateMessage())) {
        submitError.innerHTML = 'Please fix the error';
        submitError.style.display = 'block';
        setTimeout(function () { submitError.style.display = 'none'; }, 3000);
        return false;
    } else {
        submitError.innerHTML = 'goed zo';
        return true;
    }
}
window.addEventListener('scroll', () => {
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = window.scrollY;

    if (Math.ceil(scrolled) === scrollable) {
        document.querySelector('.wahtsapp-container').classList.add('whatsapp-active');
    } else {
        document.querySelector('.wahtsapp-container').classList.remove('whatsapp-active');
    }
});


window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    if(scrolled > 20){
        document.querySelectorAll('#scroll-effect').forEach((scroll) => {
            scroll.style.display = 'block'
        });
    }
})