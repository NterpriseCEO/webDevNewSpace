<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.00000000019">
        <link rel = "stylesheet" href = "css/index.css?v1.0000000019">
        <script src = "js/index.js?v1.0000000019"></script>
        <script src="https://kit.fontawesome.com/2017a19c7d.js" crossorigin="anonymous"></script>
        <title>NewSpace</title>
    </head>
    <body>
        <header>
            <img id = "starman" src = "images/spacex/starman.png" alt = "SpaceX Starman in Elon Musk's Telsa Roadster Orbiting the Earth, Feb 6 2018">
            <h1 id = "header">New Space</h1>
            <a id = "downArrow" href = "#mainContent"><i id = "arrowInner"></i></a>
        </header>
        <div id = "mainContent">
            <?php require "header.php" ?>
            <section id = "content" class = "content">
                <section id = "firstBox">
                    <h2>What is NewSpace?</h2>
                    <p>
                        To understand NewSpace, you need to know the brief history of space exploration. The history of rocketry
                        goes back hundres of years. As far back as the 7th century when the Tang Dynasty invented fireworks.
                    </p>
                </section>
                <img src = "images/tsiolkovsky.png" alt = "Konstantin Tsiolkovsky">
                <img id = "rightImage" src = "images/saturn5.png" alt = "Saturn 5">
                <section id = "centreFloat" class = "floated">
                    <h2>The Space Race</h2>
                    <p>
                        Fast forward to 1903, when Russian physicist Konstantin Tsiolkovsky published his Tsiolkovsky
                        formula in a Russian aviation magazine. Himself, Robert Goddard and Hermann Oberth are considered the founding
                        fathers of modern rocketry.
                    </p>
                    <hr>
                    <p>
                        Rocketry didn't become a tangible reality until 1942, when the V-2 missile was successfully
                        tested. It was the brainchild of German rocket scientist Wernher von Braun. He was later put to work on rockets in America
                        during Operation Paperclip. He eventually became the director of NASA's Marshall Space Flight Center.
                    </p>
                    <hr>
                    <p>
                        The space race is something that eveyone knows about. Anyone who is currently alive, lived either during the Apollo program
                        or had parents and grandparents that did. This cumulated in the moon landings between 1960 and 1972. After that, there were many
                        plans to continue manned lunar exploration and to continue onto Mars. This is where NewSpace comes in.
                    </p>
                </section>
                <img id = "fullImage" src = "images/megarockets.png" alt = "3 Rockets:Vulcan Centaur, New Glenn and Starship Superheavy. Credit: TESLARATI">
                <section id = "left" class = "content">
                    <h2>NewSpace</h2>
                    <p>
                        New Space is the tern used to categorize all companies in the private spaceflight. This includes space launch,
                        hardware and space manufacturing companies. This is in contrast to OldSpace, which describes Government space agencies such
                        as NASA, ESA, JAXA, ISRO, CSA and CNSA.<br><br>
                    </p>
                </section>
            </section>
            <section id = "end">
                <h2>Learn All About...</h2>
                <p>
                    On this website, you can learn all about some of the most important NewSpace companies, all major space agencies and the
                    many missions that will be going on in the next ten to twenty years.
                </p>
                <p>
                    The focus will be mainly on NewSpace exploration. The stuff that governments are doing should not be discredited and and
                    there will also be lots of information on what all te major space agencies are currently getting up to.
                </p>
            </section>
        </div>
        <?php require "footer.php" ?>
        <script src = "http://localhost:35729/livereload.js"></script>
    </body>
</html>
