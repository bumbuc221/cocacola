var frames;
function animation(currentFrame){
    currentFrame %= frames.length;
    document.images["toons"].src=frames[currentFrame];
    window.setTimeout("animation(" + (currentFrame + 1)+");", 200);
}
window.onload = function(){
    frames =["../imagini/1.jpg","../imagini/2.jpg","../imagini/3.jpeg","../imagini/4.jpg"]
    animation(0);
}