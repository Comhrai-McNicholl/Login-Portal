<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Account Login</title>
    <link rel="shortcut icon" type="image/ico" href="/logo.png" />
    <meta name="og:title" content="Account Login Panel"/>
    <meta name="og:type" content="movie"/>
    <meta name="og:url" content="https://comhrai.co/"/>
    <meta name="og:image" content="http://ia.media-imdb.com/rock.jpg"/>
    <meta name="og:description" content="Login to your Shield Account."/>

</head>
<body>
    
    <div class="space"></div>

    <div class="panel">
        <div class="brand">
            <img src="../logo.png" alt="logo" class="logo">
        </div>

        <div class="logins">
            <form id="login-form" action="includes/login.inc.php" method="post">
                <input type="text" name="uid" id="username-field" class="login-form-field" placeholder="Username">
                <input type="password" name="pwd" id="password-field" class="login-form-field" placeholder="Password">
                <button type="submit" class='btn' name="submit">LOGIN</button>
            </form>
        </div>
    </div>
    
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>


    <!-- STYLESHEET (PHP ADDON)-->

    <style>
        body {
            background: #171717;
        }

        .logo {
            height: 140px;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .space {
            margin-top: 100px;
        }

        .panel {
            margin: 0 auto;
            text-align: center;
            background: #1F1F1F;
            color: white;
            width: 20%;
            border-radius: 19px;
            padding: 20px;
        }
        
        input[type=text], input[type=password] {
            width: 50%;
            padding: 19px 20px;
            margin: 8px 0;
            display: block;
            margin: 0 auto;
            color: #363636;
            border-radius: 10px;
            width: 80%;
            background: #171717;
            box-sizing: border-box;
            border: 1px solid #171717;
        }

        input[type=text], input[type=password] {
            margin-bottom: 25px;
        }

        .btn {
            background-color: #171717;
            border: none;
            margin: 30px;
            color: #fff;
            padding: 10px 40px;
            font-weight: 900;
            text-align: center;
            text-decoration: none;
            width: 50%;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        .btn {
            margin-top: 80px;
            margin-bottom: 150px;
        }
    </style>

</body>
</html>