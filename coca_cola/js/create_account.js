var s="qwertyuioplkjhgfdsazxcvbnm";
const validateEmail = (email)  => {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email.toLowerCase());
}
function validare() {
        var y=document.forms["form_login"]["c_nume"].value;
        var z=document.forms["form_login"]["c_email"].value;
        var q=document.forms["form_login"]["c_parola1"].value;
        var o=document.forms["form_login"]["c_parola2"].value;
        console.log(validateEmail(z));
        if (y=="" || z=="" || q=="" || o=="") {
                alert("Enter the data in all fields!");
                return false;
        }
        else if(s.search(y[0])!=-1)
        {
                alert("Please enter a valid username!");
                return false;
        }
        else if(z.length<9 || !validateEmail(z) || z.search("@")==-1)
        {
                alert("Enter a valid email!");
                return false;
        }
        else if(o.localeCompare(q))
        {
                alert("Password and confirm password does not match!")
                return false;
        }
}