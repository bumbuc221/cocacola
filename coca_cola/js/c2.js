var frames;
function animation(currentFrame){
    currentFrame %= frames.length;
    document.images["imagini"].src=frames[currentFrame];
    window.setTimeout("animation(" + (currentFrame + 1)+")", 8000);
}
window.onload = function(){
    frames =["../imagini/c2_2.jpg","../imagini/c2_3.jpg","../imagini/c2_4.jpg","../imagini/c2_1.jpg","../imagini/c2_5.jpg"];
    animation(0);
}
