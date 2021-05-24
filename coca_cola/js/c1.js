var frames;
function animation(currentFrame){
    currentFrame %= frames.length;
    document.images["imagini"].src=frames[currentFrame];
    window.setTimeout("animation(" + (currentFrame + 1)+")", 8000);
}
window.onload = function(){
    frames =["../imagini/c1_1.jpg","../imagini/c1_2.jpg","../imagini/c1_4.jpg","../imagini/c1_3.jpg"];
    animation(0);
}
