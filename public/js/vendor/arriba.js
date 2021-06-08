document.getElementById('up').addEventListener('click',scrollUp);

function scrollUp(){
    console.log("Arriba!");
    var currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 0){
        window.requestAnimationFrame(scrollUp);
        window.scrollTo (0, currentScroll - (currentScroll / 10));
    }
}