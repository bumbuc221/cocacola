    var imagini = ["../imagini/1.jpg","../imagini/2.jpg","../imagini/3.jpeg", "../imagini/4.jpg"];
var link=["c1.php","c2.php","c3.php","c4.php"];
var nr=0,d=0;
var  timer=0;
var s=0,e=0;

function gonext() {
    if(nr<0) {
        nr = 4 - Math.abs(nr)%4;
    }
    document.getElementById("u").href=link[Math.abs(nr)%4];
    console.log(link[Math.abs(nr)%4]);
    document.imgs.src = imagini[Math.abs(nr)%4];
    nr++;
    s=setTimeout(gonext, 3000);
}
function goback() {
    if(nr<=0) {
        document.getElementById("u").href =link[4 - (Math.abs(nr) % 4)-1];
        document.imgs.src = imagini[4 - (Math.abs(nr) % 4) - 1];
    }
    else{
        document.getElementById("u").href = link[Math.abs(nr-1) % 4];
        document.imgs.src = imagini[Math.abs(nr-1) % 4];
    }
    nr--;
    e=setTimeout(goback, 3000);
}
function start() {
    clearTimeout(e);
    gonext();
}
function stop()
{clearTimeout(s);
    goback();
}
function end()
{
    clearTimeout(s);
    clearTimeout(e);
}