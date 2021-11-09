<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.00000000019">
        <link rel = "stylesheet" href = "css/spacex.css?v1.00000000019">
        <script src = "js/index.js?v1.0000000019"></script>
        <script src="https://kit.fontawesome.com/2017a19c7d.js" crossorigin="anonymous"></script>
        <title>SpaceX - Space Exploration Technolgy Inc.</title>
    </head>
    <body>
        <header>
            <img id = "spaceXLogo" src = "images/spacex/spacex.png" alt = "SpaceX Logo">
            <a id = "downArrow" href = "#mainContent"><i id = "arrowInner"></i></a>
            <img id = "headerImage" src = "images/spacex/starshipmars.png" alt = "Three Starships on Mars. One taking off. People waching lauch from inside dome.">
        </header>
        <?php require "header.php" ?>
        <div id = "mainContent" class = "content">
            <img id = "elon" src = "images/spacex/elonMusk.png" alt = "Elon Musk just being his goofy awesome self!">
            <section id = "aboutSpacex">
                <h2>About SpaceX</h2>
                <p>
                    While in university, Elon Reeve Musk (AKA. Elongated Muskrat (AKA. The Second Coming) ) wanted to focus on three things: renewable energy, rocketry and the internet. He created
                    ome of the first online business directories and co-founded <a href = "https://x.com">X.com</a> which eventually merged with Confinity
                    to become PayPal.
                </p>
                <br>
                <p>
                    Space Exploration Technologies Inc. (SpaceX) was founded in 2002 when Elon Musk sold PayPal to
                    Ebay. He instantly became 180m richer. He spent all his money on <a href = "https://tesla.com">Tesla Inc.</a> and
                    <a href = "https://www.tesla.com/solarpanels?energy_redirect=true">Solar City</a> investments, and founding SpaceX.
                </p>
                <br>
                <p>
                    Elon Musk initially wanted to buy repurposed ICBMs off of Russia in order to send a greenhouse to Mars and reignite the spark
                    of exploration in the general public. When the prices were too high and the Russians told him to bugger off, he decided to found
                    SpaceX. His goal was to create cheap, reliable access to space. SpaceX does this with reusable rockets.
                </p><br>
                <p>
                    The way SpaceX achieves reusability is by landing first stage boosters either on land or on an Autonomous Spaceport
                    Drone Ship (ASDS). There are three of these: Of Course I Still love You (OCISLY), Just Read the Instructions (JRTI)
                    A Shortfall of Gravitas (ASoG). ASoG is still under construction. All of these droneships are named after spaceships
                    in Ian M. Banks' "Culture" series of books.
                </p>
            </section>
            <section id = "threeImages">
                <div id = "f9Small" class = "spacexFamily">
                    <span class = "showPanelButton">Show</span>
                    <div class = "panelContent hide">
                        <div class = "panelTop">
                            <div class = "closePanel"><a href = "#" class = "close"></a></div>
                        </div>
                        <div class = "innerContent">
                            <img id = "f9Large" src = "images/spacex/falcon9_2.png" alt = "Falcon 9 luanching the Transiting Exoplanet Survey Satellite">
                            <section class = "panelText">
                                <div>
                                    <h2>Falcon 9</h2>
                                    <p>
                                        Falcon 9 is the workhorse rocket of SpaceX. It has lofted 75 payloads (the things it is launching) to date.
                                        SpaceX has also reused some of it's 1st stage boosters 27 times, reccently launching a
                                        first stage booster for the fourth time (11th November 2019).
                                    </p>
                                    <p>
                                        The ultimate goal of the Falcon 9 is to be table to reuse the first booster stage
                                        booster 10 times.
                                    </p>
                                    <p id = "lastPara">
                                        SpaceX also wants to reuse the fiarings (the casing at the top that protects the payload). So far one
                                        fairing has been caught and two have been refurbished and relown. The cost of a Falcon 9 is around $60m
                                        and Elon Musk said on twitter that this launch was around 80% reusable. That means that the launch cost around 12m to 15m!
                                    </p>
                                </div>
                                <iframe id = "fairingVideo" width="560" height="315" src="https://www.youtube.com/embed/VJ_k6oL2B7M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </section>
                        </div>
                    </div>
                </div>
                <div id = "fHSmall" class = "spacexFamily">
                    <span class = "showPanelButton">Show</span>
                    <div class = "panelContent hide">
                        <div class = "panelTop">
                            <div class = "closePanel"><a href = "#" class = "close"></a></div>
                        </div>
                        <div class = "innerContent">
                            <img id = "fhLarge" src = "images/spacex/fhLarge.png" alt = "Falcon heavy launching.">
                            <div class = "fhTitle">
                                <h2>Falcon Heavy</h2>
                            </div>
                            <div class = "fhContent">
                                <p>
                                    The falcon Heavy is SpaceX's newest OPERATIONAL rocket. It is "basically" three Falcon 9s strapped together.
                                    Everything except the second stage is reusable.
                                </p>
                                <p>
                                    The side cores (two outer parts of the first stage) and the
                                    centre core (middle part) are capable of return to launch site (RTLS) and droneship landings respectively.
                                </p>
                            </div>
                            <div id = "videoPane">
                                <video src="images/spacex/videoplayback.mp4" controls poster = "images/spacex/starman_2.png"></video>
                                <div id = "videoCaption">
                                    My favourite video from any genre. PERIOD.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "ssSmall" class = "spacexFamily">
                    <span class = "showPanelButton">Show</span>
                    <div class = "panelContent hide">
                        <div class = "panelTop">
                            <div class = "closePanel"><a href = "#" class = "close"></a></div>
                        </div>
                        <video id = "fullscreenVideo" src = "images/spacex/launchAnimation.mp4" loop></video>
                        <div class = "innerContent">
                            <div class = "fhTitle">
                                <h2>Starship / Superheavy</h2>
                            </div>
                            <div id ="ssDescriptor" class = "fhContent">
                                <p>
                                    Starship is SpaceX's latest rocket. When fully developed,
                                    it will be a fully reusable two stage rocket. It is being designed
                                    primarily for manned missions to mars but can actually launch and land
                                    anywhere in the Solar system.
                                </p>
                                <p>
                                    Starship is a beast. The first stage will be 68m tall! That is 2m shorter than
                                    a completely assembled Falcon 9 / Heavy.
                                    It is also 9m in diameter and can lift 100 metric tonnes to earth orbit. If
                                    they can pull off in orbit refueling, that means 100 tonnes to mars! The largest
                                    thing to land on mars to date is the Curiosity rover which is only 899kg.<br><br>
                                    <strong>Just sit on that for a moment.</strong>
                                </p>
                            </div>
                            <div id = "ssContent">
                                <h2>More Awesome Facts</h2>
                                <p>
                                    The goal of Starship is for it have airline like reusability. This can only be solved with 100%
                                    reusability.
                                </p>
                                <p>
                                    Starship will be able to launch up to 1000 times. This is insane, but awesome. This would
                                    make it incredibly cheap. The price of fuel will be around $900,000 and overall a launch will
                                    be hopefully around $2m. Compare this to the price of a Falcon Heavy ($60m)- the next biggest rocket
                                    in their lineup - and you begin to see why this is so transformative.<br><br>This truly is a modern Henry
                                    Ford moment.
                                </p>
                                <h2>When Will it Launch?</h2>
                                <p>
                                    It already has... sort of. On the 25th July 2019, the Starship prototype, named Starhopper, launched
                                    150m into the air. But wait you say, that's no starship! That's only a prototype. A Starship
                                    prototype is slated to launch in late 2019 or early 2020! What exiting times to live in.
                                </p>
                                <div id = "spacexVidoes">
                                    <div class = "fhTitle">
                                        <h2>Videos</h2>
                                    </div>
                                    <div id = "videos">
                                        <iframe class = "spxVidoes" src="https://www.youtube.com/embed/LbH1ZDImaI8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe class = "spxVidoes" src="https://www.youtube.com/embed/bYb3bfA6_sQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <img id = "marsBase" src = "images/spacex/marsBase.png" alt = "A Mars base as envisioned by SpaceX">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php require "footer.php" ?>
        <script src = "js/spacex.js?v1"></script>
        <script src = "http://localhost:35729/livereload.js"></script>
    </body>
</html>
