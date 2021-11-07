// function to validate contact form
function validateForm(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var msg = document.getElementById("msg").value;

     
    if(fname == ""){
        window.alert("Please enter your first name..");
        fname.focus();
        return false;
    }

    if(lname == ""){
        window.alert("Please enter your last name..");
        lname.focus();
        return false;
    }

    if(email == ""){
        window.alert("Please enter your email..");
        email.focus();
        return false;
    }

    if(email.indexOf("@") == -1 || email.length < 6){
        window.alert("Please enter a valid email..");
        email.focus();
        return false;
    }

    if(number == ""){
        window.alert("Please enter your contact number..");
        number.focus();
        return false;
    }

    if(isNaN(number) || number.length != 10){
        alert("Please enter a valid number..")
        return false;
    }

    if(msg == ""){
        window.alert("Please enter your message..");
        msg.focus();
        return false;
    }

    alert("Form Submitted Successfully!");
    return true;

}

