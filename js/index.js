document.onreadystatechange = function() {
    console.log(document.readyState);
    if(document.readyState === "interactive") {
        if(window.location.href.indexOf("index.php") > 0 || window.location.href.endsWith(".info/") > 0 || window.location.href.endsWith(".info") || window.location.href.indexOf("spacex.php") > 0) {
            document.getElementById("downArrow").addEventListener("click",function(e) {
                e.preventDefault();
                document.getElementById("mainContent").scrollIntoView({behavior: "smooth",block:"start"});
            });
            window.onscroll = function() {scroll()};
        }
        var header = document.getElementsByTagName("nav")[0];
        var menu = document.getElementById("nav");
        var content = document.getElementsByClassName("content")[0];
        function scroll() {
            if(window.pageYOffset > window.innerHeight) {
                header.classList.add("sticky");
                menu.classList.add("sticky");
                content.classList.add("move");
            }else {
                header.classList.remove("sticky");
                menu.classList.remove("sticky");
                content.classList.remove("move");
            }
        }

        document.getElementById("mobileMenu").addEventListener("click",function() {
            if(window.pageYOffset < window.innerHeight && window.location.href.indexOf("spacex.php") == -1) {
                window.scrollTo(0,window.innerHeight);
            }
            document.body.classList.toggle("noScoll");
        });
    }
    var locLength = window.location.href.split("/").length;
    var elm = document.querySelectorAll(`div a[href = '${window.location.href.split("/")[locLength-1]}']`);
    for(var i = 0; i < elm.length; i++) {
        elm[i].parentNode.id = "selected";
    }
}
