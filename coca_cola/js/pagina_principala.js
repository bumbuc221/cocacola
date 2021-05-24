
function unu() {
    location.href = "pagina_home.php";
}
function doi() {
    location.href = "../php/account_or_login.php";
}
$(document).ready(function(){
    if($(window).width()<740)
    {
        document.getElementById("video").innerHTML="<img src='../imagini/img.jpg' width='100%' height='auto'>";
        $(".dropdown").click(function(){
            $(".dropdown-content").fadeIn("slow");
        });
    }
});