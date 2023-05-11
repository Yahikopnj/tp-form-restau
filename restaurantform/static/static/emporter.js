document.getElementById("resp").addEventListener("click", ()=>{
    var menu = document.getElementById("men");
    if(window.getComputedStyle(menu).display == "block"){
        
        menu.style.animation = "fadeout 0.5s"
        setTimeout(() => {
            menu.style.display = "none";
          }, 498);
       
    }else{
       
        menu.style.animation = "fadein 0.5s"
        setTimeout(() => {
            menu.style.display = "block";
          }, 500);
    }

    
})
  function journal() {
    let bouton = document.querySelector("#pardon1").play();
    downValue();
}
window.addEventListener('load',(journal));

let suivantb = document.getElementById("suivantb");

window.addEventListener("DOMcontentloaded",()=>{
    setTimeout(() => {
        suivantb.style.height = "250px";
        suivantb.style.fontSize = "200px";
        suivantb.style.padding = "10px";
        suivantb.style.opacity = "1";
        suivantb.style.transition = "1000ms";
    }, 5000);
    console.log(window)
})
