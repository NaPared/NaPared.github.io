function dropdown(){
    document.getElementById("drop-menu").classList.toggle("show");
}

window.onclick = function(e){
    if(!e.target.matches('.display-btn')){
        var dropdowns = document.getElementsByClassName("navbar-list");
        var i;
        for (i=0; i < dropdowns.length; i++){
            var openDropDown = dropdowns[i];
            if(openDropDown.classList.contains('show')){
                openDropDown.classList.remove("show");
            }
        }
    }
}
