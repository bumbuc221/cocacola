const validateEmail = (email)  => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email.toLowerCase());
}
function validare() {
    var z=document.forms["form_login"]["email"].value;
    var q=document.forms["form_login"]["parola"].value;
    console.log(validateEmail(z));
    if (z=="" || q=="") {
        alert("Enter the data in all fields!");
        return false;
    }
    else if(z.length<9 || !validateEmail(z) || z.search("@")==-1)
    {
        alert("Enter a valid email!");
        return false;
    }
}