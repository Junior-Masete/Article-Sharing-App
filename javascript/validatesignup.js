//validating 
const fname = document.getElementById("firstname");
const lname = document.getElementById("lastname");
const email = document.getElementById("email");
const pword = document.getElementById("password");
const form = document.querySelector(".form");

form.addEventListener('submit', function(e){
    if(!validatenames(fname)){
        
        const error = form.querySelector('#nam');
        error.style.color = "red";
        error.textContent = "Name must have atleast two letters";

        e.preventDefault();
    }
    
    if(!validatenames(lname)){
        
        const error = form.querySelector('#lnam');
        error.textContent = "Name must have atleast two letters";
        error.style.color = "red";
        e.preventDefault();
    }
   
    
    if(!validateEmail(email)){
        
        const error = form.querySelector('#eml');
        error.textContent = "Enter a valid email";
        error.style.color = "red";
        e.preventDefault();
    }

    if(!validatePword(pword)){
        
        const error = form.querySelector('#pw');
        error.textContent = "Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)";
        error.style.color = "red";
        e.preventDefault();
    }
})

//function to validate names
const validatenames = function(name){ 
    var regname = /^([a-zA-Z]{2,})/;
    if(name.value.match(regname)){
        return true;
    }
    else{
        return false;
    }
}

//function to validate email
const validateEmail = function(emaill){
    var regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emaill.value.match(regemail)){
        return true;
    
    }
    else{
        return false;
    }
}


//function to validate password
const validatePword = function(passw){
    var regpassw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if(passw.value.match(regpassw)){
        return  true;
    }
    else {
        return false;
    }
}