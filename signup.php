<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta name="viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.00000000019">
        <link rel = "stylesheet" href="css/signup.css">
        <script src = "js/index.js?v1.0000000019"></script>
        <script src = "js/input.js?v1"></script>
        <meta charset = "utf-8">
        <script src="https://kit.fontawesome.com/2017a19c7d.js" crossorigin="anonymous"></script>
        <title>Signup</title>
    </head>
    <body>
        <?php require "header.php" ?>
        <div class = "content">
            <h1>Signup Form (Test)</h1>
            <h2>Benefits</h2>
            <div id = "benefits">
                <ol>
                    <li>Awesome news</li>
                    <li>Cool videos</li>
                    <li>Fun facts</li>
                </ol>
                <ul>
                    <li>News on space</li>
                    <li>News on launches</li>
                    <li>Videos about new tech</li>
                </ul><br>
                <table>
                    <tr>
                        <td>Time</td>
                        <td>Day</td>
                    </tr>
                    <tr>
                        <td>6:30</td>
                        <td>Wednesday</td>
                    </tr>
                </table><br><br>
            </div>
            <form method = "post" onsubmit = "return validateForm();">
                <fieldset>
                    <legend>Info</legend>
                    <label for = "firstName">First Name</label><br>
                    <input id = "firstName" data-name = "name" type = "text" placeholder = "Type here.." required><br><br>
                    <label for = "lastName">Last Name</label><br>
                    <input id = "lastName" type = "text" data-name = "last name" placeholder = "Type here.." required><br><br>
                    <label for = "email">Email</label><br>
                    <input id = "email" type = "email" data-name = "email" placeholder = "Type here.." required><br><br>
                </fieldset>
                <fieldset>
                    <legend>Space Memes</legend>
                    <label for = "memes">Receive All The Memes</label><br>
                    <input id = "memes" type = "checkbox"><br><br>
                    <label for = "memeLevel">Meme Quality</label>
                    <select id = "memeLevel">
                        <option value = "deepfried">Deep Fried</option>
                        <option value = "noob">Noob</option>
                        <option value = "master">Master</option>
                        <option value = "elon">Elon Musk / Meme Lord</option>
                    </select>
                </fieldset>

                <fieldset>
                    <legend>Choose Plan</legend>
                    <label for = "free">Free Plan</label>
                    <input id = "free" type = "radio" name = "plan"><br>
                    <label for = "zeroPlan">€0 Plan</label>
                    <input id = "zeroPlan" name = "plan" type = "radio">
                </fieldset>

                <input type = "submit" value = "Submit">
            </form><br><br>
            <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/NSpace19?ref_src=twsrc%5Etfw">Tweets by NSpace19</a>
            <script async src="https://platform.twitter.com/widgets.js"></script>
        </div><br>
        <?php require "footer.php" ?>
        <script>
            document.getElementsByTagName("nav")[0].classList.add("sticky");
            document.getElementById("nav").classList.add("sticky");
        </script>
        <script src = "http://localhost:35729/livereload.js"></script>
    </body>
</html>
