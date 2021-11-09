for(var i = 0; i < 3; i++) {
    addClass(i);
}
function addClass(i) {
    document.getElementsByClassName("showPanelButton")[i].addEventListener("click",function(e) {
        e.preventDefault();
        document.getElementsByTagName("footer")[0].style.display = "none";
        this.parentNode.classList.add("showPanel");
        document.querySelector(".showPanel .showPanelButton").classList.add("hide");
        document.querySelector(".showPanel .panelContent").classList.remove("hide");
        console.log(this.parentNode.clientWidth,document.body.clientWidth);
        if(this.parentNode.clientWidth != document.body.clientWidth) {
            window.scrollTo(0,document.body.scrollHeight);
        }
        document.body.classList.add("noScoll");
        if(this.parentNode.id == "ssSmall") {
            document.getElementById("fullscreenVideo").play();
        }
        //alert("hello")
    });
    document.getElementsByClassName("closePanel")[i].addEventListener("click",function(e) {
        e.preventDefault();
        document.querySelector(".showPanel .showPanelButton").classList.remove("hide");
        document.querySelector(".showPanel .panelContent").classList.add("hide");
        var panel = document.getElementsByClassName("showPanel")[0];
        document.getElementsByClassName("closePanel")[i].parentNode.parentNode.parentNode.classList.remove("showPanel");
        document.body.classList.remove("noScoll");
        if(panel.id == "ssSmall") {
            document.getElementById("fullscreenVideo").pause();
        }
        document.getElementsByTagName("footer")[0].style.display = "block";
    });
}
document.getElementById("fullscreenVideo").addEventListener("loadedmetadata",function() {
    this.currentTime = 2;
},500);
