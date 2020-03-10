let formRegister = document.getElementsByClassName('form-register')[0];
let reg_login = formRegister.RegLogin;
let reg_pass = formRegister.RegPass;
let reg_email = formRegister.RegEmail;
let errorMessage = document.getElementsByClassName('reg_errorMessage')[0];


formRegister.onsubmit = (e) => {

    if(reg_login.value.length < 10){
        e.preventDefault();
        reg_login.style.border = "2px solid red";
        errorMessage.textContent = "Login in Very Small!";
    }

    else if(reg_pass.value.length < 8){
        e.preventDefault();
        reg_pass.style.border ="2px solid red";
        errorMessage.textContent = "Password is very small!";
        reg_login.style.border = "none";
    }

    else if(reg_email.value.split("@").length-1 == 0 || reg_email.value.split(".").length-1 == 0){
        e.preventDefault();
        reg_email.style.border ="2px solid red";
        errorMessage.textContent = "Email is very small!";
        reg_pass.style.border = "none";
    }
    
}







