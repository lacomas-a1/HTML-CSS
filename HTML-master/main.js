const span=document.querySelector(".form span");
const icon=document.querySelector(".bx");
const input=document.querySelector(".form input");

span.addEventListener("click",()=>{
    if(icon.classList.contains("bxs-show")){
        icon.className="bx bxs-hide";
        input.setAttribute("type","text");
    }
    else{
        icon.className="bx bxs-show";
        input.setAttribute("type","password");
    }
})