var frames;
function animation(currentFrame){
    currentFrame %= frames.length;
    document.images["imagini"].src=frames[currentFrame];
    window.setTimeout("animation(" + (currentFrame + 1)+")", 8000);
}
window.onload = function(){
    frames =["../imagini/c4_1.jpg","../imagini/c4_2.jpg"];
    animation(0);
}
