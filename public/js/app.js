
///////////////////////////////////////////////////////////////////////////
// Fix for # href
var aWithHref = document.querySelectorAll('a[href*="#"]');
aWithHref.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.preventDefault();
    })
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Go Back
var goBackButton = document.querySelectorAll(".goBack");
goBackButton.forEach(function (el) {
    el.addEventListener("click", function () {
        window.history.go(-1);
    })
})
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Loader
document.addEventListener('DOMContentLoaded', function () {
    var loader = document.getElementById("loading");
    setTimeout(() => {
        var searchboxOpacity = 1;
        var fadeAnimation = setInterval(() => {
            if (searchboxOpacity <= 0.05) {
                clearInterval(fadeAnimation);
                loader.style.opacity = "0";
                loader.style.display = "none";
            }
            loader.style.opacity = searchboxOpacity;
            loader.style.filter = "alpha(opacity=" + searchboxOpacity * 100 + ")";
            searchboxOpacity = searchboxOpacity - searchboxOpacity * 0.5;
        }, 30);
    }, 500);
})
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Sidebar 
var toggleSidebar = document.querySelectorAll(".toggleSidebar");
var body = document.querySelector("body");
var sidebar = document.querySelector(".sidebarWrapper .sidebar");
var sidebarWrapper = document.querySelector(".sidebarWrapper")
toggleSidebar.forEach(function(el){
    el.addEventListener("click", function(){
        sidebarWrapper.classList.toggle("is-active")
        if(body.classList.contains("sidebarActive")){
            body.classList.remove("sidebarActive")
        }
        else{
            body.classList.add("sidebarActive")
        }
        if(sidebar.classList.contains("is-active")){
            sidebar.classList.remove("is-active")
            sidebar.classList.add("is-passive")
        }
        else{
            sidebar.classList.add("is-active")
        }
    })
})
///////////////////////////////////////////////////////////////////////////