<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.00000000019">
        <link rel = "stylesheet" href = "css/blue.css?v1.00000000019">
        <script src = "js/index.js?v1.0000000019"></script>
        <meta charset = "utf-8">
        <script src="https://kit.fontawesome.com/2017a19c7d.js" crossorigin="anonymous"></script>
        <title>Image and Video Credits</title>
        <style>
            img,video {
                width:30%;
                border-right:5px solid var(--secondary-colour);
                border-bottom:5px solid var(--secondary-colour);
            }
            .content img:first-of-type {
                border-top:5px solid var(--secondary-colour);
            }
            p {
                float:right;
                width:65%;
            }
        </style>
    </head>
    <body>
        <?php require "header.php" ?>
        <div class = "content">
            <h1>Image Credits</h1>
            <img src = "images/spacex/starman.png" alt="">
            <p>
                This is a screenshot from the video of a Tesla roadster orbiting earth.<br>
                <a target = "_blank" href = "https://www.youtube.com/watch?v=aBr2kKAHN6M">Full Video (4:13:10)</a><br>
                Credit: SpaceX
            </p>
            <img src = "images/tsiolkovsky.png" alt="">
            <p>
                This is a picture of Konstantin Tsiolkovsky.<br>
                Credit: Unknown.
            </p>
            <img src = "images/saturn5.png" alt="">
            <p>
                This is the Saturn 5 taking off on its way to the moon.<br>
                Credit: NASA
            </p>
            <img src = "images/megarockets.png" alt="">
            <p>
                This is - in order - a Vulcan, New Glenn and Starship/Superheavey rocket.<br>
                Credit: United Launch Alliance, Blue Origin, SpaceX, Teslarati
            </p>
            <img src = "images/spacex/spacex.png" alt="">
            <p>
                The SpaceX Logo.<br>
                Credit: SpaceX
            </p>
            <img src = "images/spacex/starshipmars.png" alt="">
            <p>
                A Starship rocket taking off from Mars.<br>
                Credit: SpaceX
            </p>
            <img src = "images/spacex/elonMusk.png" alt="">
            <p>
                This is Elon Musk.<br>
                Credit: Unknown
            </p>
            <img src = "images/spacex/falcon9.png" alt="">
            <p>
                Falcon 9.<br>
                Credit: Spaceflight Now?<br>
                Please let me know who took the photo.
            </p>
            <img src = "images/spacex/falcon9_2.png" alt="">
            <p>
                Falcon 9.<br>
                Credit: Unknown
            </p>
            <img src = "images/spacex/falconHeavy.png" alt="">
            <p>
                Falcon Heavy.<br>
                Credit: Spaceflight Now
            </p>
            <img src = "images/spacex/fhLarge.png" alt="">
            <p>
                Falcon Heavy.<br>
                Credit: Unknown.<br>
                Please let me know who took the photo.
            </p>
            <img src = "images/spacex/starman_2.png" alt="">
            <p>
                Starman.<br>
                Credit: SpaceX
            </p>
            <img src = "images/spacex/starshipSuperheavy.png" alt="">
            <p>
                Starship/Superheavy.<br>
                Credit: SpaceX
            </p>
            <img src = "images/spacex/marsBase.png" alt="">
            <p>
                A Martian Base.<br>
                Credit: SpaceX
            </p>
            <img src = "images/blueOrigin/blueLaunch.png" alt="">
            <p>
                A New Shepard launch.<br>
                Credit: Blue Origin
            </p>
            <img src = "images/blueOrigin/feather.png" alt="">
            <p>
                Blue Origin feather.<br>
                Credut: Blue Origin
            </p>
            <img src = "images/blueOrigin/blueLaunch2.png" alt="">
            <p>
                A New Shepard launch.<br>
                Credit: Blue Origin
            </p>
            <img src = "images/blueOrigin/newShepardFlightTrajectory.png" alt="">
            <p>
                The New Shepard flight trajectory.<br>
                Credit: Blue Origin.
            </p>
            <img src = "images/blueOrigin/newGlenn.png" alt="">
            <p>
                New Glenn.<br>
                Credit: Blue Origin.
            </p>
            <img src = "images/blueOrigin/blueRoho.png" alt="">
            <p>
                Blue Origin's Roll-on Roll-off ship.<br>
                Credit: Blue Origin
            </p>
            <img src = "images/blueOrigin/oneillCylinder.png" alt="">
            <p>
                O'neil Cylinder.<br>
                Credit: Blue Origin
            </p>
            <video src="images/spacex/videoplayback.mp4" controls poster = "images/starman_2.png"></video>
            <p>
                Falcon Heavy &amp; Starman.<br>
                Credit: SpaceX<br>
                Original Video: <a target = "_blank" href = "https://www.youtube.com/watch?v=A0FZIwabctw">Here</a>
            </p>
            <video id = "fullscreenVideo" src = "images/spacex/launchAnimation.mp4" controls></video>
            <p>
                Starship launch animation.<br>
                Credit: SpaceX
                Original Video: <a target = "_blank" href = "https://www.youtube.com/watch?v=C8JyvzU0CXU">Here</a>
            </p>
        </div>
        <script>
            document.getElementsByTagName("nav")[0].classList.add("sticky");
            document.getElementById("nav").classList.add("sticky");
        </script>
        <?php require "footer.php" ?>
        <script src = "http://localhost:35729/livereload.js"></script>
    </body>
</html>
