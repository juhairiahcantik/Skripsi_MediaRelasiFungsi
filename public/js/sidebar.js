const toggler = document.querySelector("#mobile-toggle");
if(toggler){
    toggler.addEventListener("click", function(){
        document.querySelector("#sidebar").classList.toggle("show-sidebar");
    });
}