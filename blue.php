<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.00000000019">
        <link rel = "stylesheet" href = "css/blue.css?v1.00000000019">
        <script src = "js/index.js?v1.0000000019"></script>
        <meta charset = "utf-8">
        <script src="https://kit.fontawesome.com/2017a19c7d.js" crossorigin="anonymous"></script>
        <title>Blue Origin</title>
    </head>
    <body>
        <?php require "header.php" ?>
        <div class = "content">
            <h1 id = "gradatim">Grad<br class = "hide-on-mobile">atim<br>Veroc<br class = "hide-on-mobile">iter.</h1>
            <img id = "blueLaunch" src = "images/blueOrigin/blueLaunch.png" alt = "Blue Origin New Shepard Launch. Credit: Blue Origin">
            <div id = "aboutBlue">
                <h1>The Blue Origin Story</h1>
                <p>
                    Blue Origin was in 2000 in Kent Washington by Jeff Bezos if Amazon fame. They continuously pushes the boundries of what
                    a commercial space company can do. Blue Origin was founded with the goal of having trillions of people living and working
                    in space. This has been the dream of Jeff Bezos since he was a child.
                </p>
                <p>
                    The company's existence only became public in 2003 when Jeff Bezos bought a whole load of land in Texas. In their early
                    years, Blue Origin were very secretive. Their first launch vehicle,New Shepard wasn't even on the public's radar until
                    at least 2005.
                </p>
                <p>
                    The near-term goal of Blue Origin, is to launch space tourists on suborbital flights. By doing this frequently, they can
                    lower the cost of access to space which will give millions of people the opportunity to see earth from space.
                </p>
            </div>
            <img id = "feather" src = "images/blueOrigin/feather.png" alt = "The Blue Origin feather. Credit: Blue Origin">
            <section id = "bluesRockets">
                <img id = "blueLaunch2" src = "images/blueOrigin/blueLaunch2.png" alt = "Blue Origin's New Shepard">
                <div class = "blueDescription left">
                    <h2>New Shepard</h2>
                    <p>
                        New Shepard is Blue Origin's first operational rocket. As with all their rockets, it was named after true spaceflight pioneers.
                        In this case Alan Shepard, the 1<sup>st</sup> American in space, 5<sup>th</sup> person to walk on the moon and the first person to play golf on another celestial body.
                    </p>
                    <p>
                        Blue Origin will use this rocket system to launch paying customers into suborbital space. This will allow people to see earth from space
                        and to experience to <a href = "https://en.wikipedia.org/wiki/Overview_effect">Overview Effect</a>.
                    </p>
                    <p>
                        The ticket prices will be very pricy at
                        the start, costing upwards of $300,000. Over time and through economies of scale, Blue origin want to lower the prices signficantly, so That
                        the average Joe can afford trips to space.
                    </p>
                    <h2>The Launch Process</h2>
                    <p>
                        New Shepard will launch from Blue Origin's launch facility in West Texas. People will arrive 2 days before the launch and spend the day
                        after that learning everything they need to know to prepare them for the flight.
                    </p>
                    <p>
                        The day of the launch, the commercial astronauts will ascend the launch tower and and climb into the rocket. They will be strapped in and
                        launch into space. The rocket will go just over the Karman Line, the internationally recognized boundary of space. That's when you
                        ofically become a commercial astronaut. The astronauts will be decend back to earth and land via parachute.
                    </p>
                </div>
                <img id = "nsTrajectory" src = "images/blueOrigin/newShepardFlightTrajectory.png" alt = "New Shepard launch trajectory. Credit: Blue Origin">
                <img id = "blueLaunch3" src = "images/blueOrigin/newGlenn.png" alt = "Blue Origin's New Shepard">
                <div class = "blueDescription right">
                    <h2>New Glenn</h2>
                    <p>
                        New Glenn is Blue Origin's orbital rocket. It was named after John Glenn, the first American to orbit the earth. New Glenn will have a lunch
                        debut of no earlier than 2021. It will be 95m tall and will be able to launch 45 metric tons to Low Eart Orbit (LEO) and 10 metric tons to
                        Geostationary Transfer Orbit (GTO)
                    </p>
                    <p>
                        Blue Origin wants to be the transcontinental railroad of space, the Amazon of space. Like New Shepard, it will also be reusable. New Glenn will
                        have 7 rocket engines on its first stage and 2 on the second stage. It will launch from Launch Complex 36
                        Once the rocket launches and the first stage is no longer needed, it will land on a Roll On Roll Off (ROHO) ship.
                    </p>
                    <img id = "roho" src = "images/blueOrigin/blueRoho.png" alt = "Blue Origin ROHO Ship. Credit: RocketSTEM">
                </div>
            </section>
            <section id = "visions">
                <h2>Visions of the future</h2>
                <img id = "oneill" src = "images/blueOrigin/oneillCylinder.png" alt="">
                <p id = "visionsContent">
                    Jeff Bezos wants millions of people living and working in sapce. One way he sees this hapening is by building
                    massive rotating cylindrical or toroidal space habitats. This is the concept of O'Neill Cylinders put forward
                    by American physicist Gerard O'Neill in his 1976 book "The High Frontier: Human Colonies in Space".<br><br>
                    Gerard O'Neill propsed building massive kilometers wide preassurised cylinders in space. They would have
                    liveable space on the inside. Another option would be to create toroidal ringworlds like the
                    Halo Array in  the "Halo" game series. This include cities, national parks or other biomes. These structures would
                    rotate to create artifical gravity.<br><br>Jeff Bezos does not expect this to happen in his lifetime. He instead thinks that this will be a
                    multi generational thing.He want's his gerneration's children and grandchildren to be able to
                    achieve these lofty goals. It is only his goal
                </p>
            </section>
        </div>
        <?php require "footer.php" ?>
        <script>
            document.getElementsByTagName("nav")[0].classList.add("sticky");
            document.getElementById("nav").classList.add("sticky");
        </script>
        <script src = "http://localhost:35729/livereload.js"></script>
    </body>
    <!--
        \\    \/\/    // ||   || ||==== ||\\ ||   ||    [] ||==== ||====   //==\\  [] \\    // ||====  /==\    \\  //  //==\\  ||  ||
         \\  //  \\  //  ||===|| ||==   || \\||   ||    || ||==   ||==     ||   __ ||  \\  //  ||==    |__      \\//   ||  ||  ||  ||
          \\//    \\//   ||   || ||==== ||  \||   ||=== || ||     ||====   \\===// ||   \\//   ||==== \___\      ||    \\==//  \\==//

          ||    ||==== ||\\  //|| //==\\ ||\\  ||  /==\  Eat them whole
          ||    ||==   || \\// || ||  || || \\ ||  |__   in front of
          ||=== ||==== ||      || \\==// ||  \\|| \___\  your students
    -->
</html>
