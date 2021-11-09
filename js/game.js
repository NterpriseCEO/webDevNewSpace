document.onreadystatechange = function() {
    if(document.readyState === "complete") {
        var canvas = document.getElementById("canvas"),
            ctx = canvas.getContext("2d");

        ctx.canvas.width  = window.innerWidth;
        ctx.canvas.height = window.innerHeight;
        var img = document.getElementsByTagName("img")[0];
        ctx.drawImage(img,Math.random()*1500,Math.random()*1000,100,100);
        setInterval(function() {
            ctx.drawImage(img,Math.random()*1500,Math.random()*1000,100,100);
        },100)
    }
}
