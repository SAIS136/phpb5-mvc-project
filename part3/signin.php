<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="./loginstyle.css" type="text/css">
    </head>
    <body>

        <div class="container">

            <div id="dotbox" class="dotbox">
                <span class="dot"></span>
            </div>

            <div>
                <h1>Login With Us</h1>
                <form id="form" action="loginfunction.php" method="post">

                    <div class="form-group">
                        <label for="email">Security :</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                    </div>

                    <div class="d-flex">
                        <button type="submit" name="submit" id="submit" class="btn">Login</button>
                    </div>

                </form>

                <p>You don't have account ? <a href="signup.php">Signup Here !!!</a></p>

            </div>

        </div>

        <!-- <script src="app.js" type="text/javascript"></script> -->
    </body>
</html>