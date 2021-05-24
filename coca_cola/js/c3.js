var frames;
function animation(currentFrame){
    currentFrame %= frames.length;
    document.images["imagini"].src=frames[currentFrame];
    window.setTimeout("animation(" + (currentFrame + 1)+")", 8000);
}
window.onload = function(){
    frames =["../imagini/c3_2.jpg","../imagini/c3_3.jpg","../imagini/c3_4.jpg","../imagini/c3_1.jpg"];
    animation(0);
}
