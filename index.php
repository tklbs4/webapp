<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheets/form_userlogondata.css">
    <link rel="stylesheet" href="stylesheets/registerStyle.css">
    <link rel="stylesheet" href="stylesheets/general.css">
    <script src="scripts/register.js"></script>
</head>
<body>

    <div class="header">
        <div class="logo">
            <img src="images/1280px-Fake_Taxi_logo.svg.png" alt="">
        </div>
        <div class="nav_buttons_div">
            <button class="nav_buttons" id="home" onclick="window.location.href='website_example.php'">Home</button>
            <button class="nav_buttons" id="products" onclick="window.location.href='website_example.php'">Products</button>
            <button class="nav_buttons" id="aboutUS" onclick="window.location.href='about_us.php'">About us</button>
        </div>
        <div class="logon_registration">
            <button class="logon_registrationbuttons" role="button" id="signin" onclick="window.location.href='fomular_example.php'">Sign ip</button>
            <button class="logon_registrationbuttons" role="button" id="login" onclick="window.location.href='login_page.php'">Login</button>
        </div>
    </div>

    <form class="regristration_form" action="getData_mysql.php" method="post">
        

        <datalist id="states">
            <option value="Salzburg"></option>
            <option value="Vienna"></option>
            <option value="Klagenfurt"></option>
            <option value="Tirol"></option>
            <option value="Upper Austria"></option>
            <option value="Lower Austria"></option>
            <option value="Vorarlberg"></option>
            <option value="Burgenland"></option>
            <option value="Steirmark"></option>
        </datalist>

        <div class="form_logondiv">
            <h1>Regristration</h1>
        </div>
        <div class="form_logondiv">
            <div>
                <h2>Konto</h2>
            </div>
            <div>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" placeholder="Username" required autofocus><br />
                <label for="firstname">Vorname:</label>
                <input type="text" id="firstname" placeholder="Firstname" name="firstname" required/><br />
                <Label for="lastname">Nachname:</Label>
                <input type="text" id="lastname" placeholder="Lastname" name="lastname" required /><br />
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthdate" required ><br />    
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email" name="email" required><br />   
                <label for="email">Confirm Email:</label> 
                <input type="email" multiple placeholder="Confirm Email"><br />
                <label for="password">Password:</label>   
                <input type=password id="password" placeholder="Password" name="password" required pattern=".{8,}" title="Enter 8 characters" onChange="onChange()"><br />
                <label for="password">Confirm Password:</label>
                <input type="password" id="confirmPassword" multiple placeholder="Confirm Password" required onChange="onChange()">
            </div>
        </div>
        <div class="form_logondiv">
            <div>
                <h2>Address</h2>
            </div>
            <div>
                <label for="street:">Street:</label>
                <input type="text" id="street" placeholder="Street" name="street" required><br />
                <label for="city">City:</label>
                <input type="text" id="city" placeholder="City" name="city" required><br />
                <label for="postcode">Postcode:</label>
                <input type="number" id="postcode" placeholder="Postcode" name="postcode" required><br />
                <label for="state">State:</label>
                <input type="text" list="states" placeholder="State" name="state" required/><br />
                <label for="tel">Tel.:</label>
                <input type="tel" id="tel" placeholder="0664.." name="phonenumber"><br />
                
            </div>
        </div>
        <div class="form_logondiv">
            <div>
                <h2>Upload file</h2>
            </div>
            <div>
                <label for="inputfile">Upload file</label>
                <input type=file>
            </div>
        </div>
        <div class="form_logondiv">
            <div>
                <h2>Submit</h2>
            </div>
            <div class="buttons">
                <div class="resetButtonDiv">
                    <button class="button-64" role="button" type="reset"><span class="text">Reset</span></button>
                </div>
                <div class="submitButtonDiv">
                    <button class="button-64" role="button" type="submit"><span class="text">Submit</span></button>
                </div>  
            </div>
        </div>
    </form>
</body>
</html>