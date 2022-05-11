<!DOCTYPE html>
<html lang="ro">

<head>
    <title>UE history</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>

<body>
    <div class="menu">
        <a href="../index.php">UE</a>
        <a href="history.php">Istorie</a>
        <a href="symbols.php">Simboluri</a>
        <a href="countries.php">&#354&#0259ri</a>
        <a href="priority.php">Priorit&#0259&#355i</a>
        <a class="active" href="contact.php">Contact</a>
    </div>

    <?php
    // definesc variabilele la valori goale  
    $emailErr = $passwordErr   = $agreeErr =  "";
    $email = $password  =  $agree =  "";

    //Validarea câmpurilor de intrare  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Validare șiruri   
        function ValidareSir($string)
        {
            $error = "";
            if (empty($string)) {
                $error = "Câmp obligatoriu";
            } else {
                $name = input_data($string);
                // verificați dacă numele conține doar litere și spații albe 
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $error = "Sunt permise doar literele și spatiile";
                }
            }
            return $error;
        }

        //Email Validation   
        if (empty($_POST["email"])) {
            $emailErr = "Câmp obligatoriu";
        } else {
            $email = input_data($_POST["email"]);
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format email invalid";
            }
        }

        //Validare lungime
        if (empty($_POST["current-password"])) {
            $passwordErr = "Câmp obligatoriu";
        } elseif (strlen($_POST["current-password"]) < 8) {
            $passwordErr = "Introduceți mai mult de 8 caractere";
        } else {
            $password  = input_data($_POST["current-password"]);
        }
    }

    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Logare reprezentant țară</h2>

    <form id="singinform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container">
            <p>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname">
                <span class="error"> <?php if (isset($_POST['firstform'])) echo  ValidareSir($_POST["uname"]); ?> </span>
            </p>
            <p>
                <label for="password"><b>Password</b></label>
                <input name="current-password" type="password" placeholder="Enter Password" autocomplete="off">
                <span class="error"> <?php if (isset($_POST['firstform'])) echo $passwordErr; ?> </span>
            </p>
            <button name="firstform" type="submit">Sing in</button>
        </div>
    </form>

    <?php
    if (isset($_POST['firstform'])) {
        if (ValidareSir($_POST["uname"]) == "" && $passwordErr == "") {
            echo "<h3>Formular completat corect!</h3>";
        } else {
            echo "<h3>Nu ai completat corect formularul!</h3>";
        }
    }
    ?>

    <h2>Înregistrare reprezentant țară</h2>

    <form id="singupform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container">
            <p>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname">
                <span class="error"> <?php if (isset($_POST['secondform'])) echo ValidareSir($_POST["uname"]); ?> </span>
            </p>
            <p>
                <label for="email"><b>Email</b></label>
                <input name="email" type="email" placeholder="Enter Email">
                <span class="error"> <?php if (isset($_POST['secondform'])) echo $emailErr; ?> </span>
            </p>
            <p>
                <label for="password"><b>Password</b></label>
                <input name="current-password" type="password" placeholder="Enter Password" autocomplete="off">
                <span class="error"> <?php if (isset($_POST['secondform'])) echo $passwordErr; ?> </span>
            </p>
            <button name="secondform" type="submit">Sing up</button>
        </div>
    </form>

    <?php
    if (isset($_POST['secondform'])) {
        if (ValidareSir($_POST["uname"]) == "" && $emailErr == "" && $passwordErr == "") {
            echo "<h3>Formular completat corect!</h3>";
        } else {
            echo "<h3>Nu ai completat corect formularul!</h3>";
        }
    }
    ?>

    <h2>Contactează-ne</h2>

    <form id="contactus" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container">
            <p>
                <label for="fname"><b>First Name</b></label>
                <input type="text" name="firstname" placeholder="Your name..">
                <span class="error"> <?php if (isset($_POST['thirdform'])) echo ValidareSir($_POST["firstname"]); ?> </span>
            </p>
            <p>
                <label for="lname"><b>Last Name</b></label>
                <input type="text" name="lastname" placeholder="Your last name..">
                <span class="error"> <?php if (isset($_POST['thirdform'])) echo ValidareSir($_POST["lastname"]); ?> </span>
            </p>
            <p>
                <label for="country"><b>Country</b></label>
                <input type="text" name="country" placeholder="Your country..">
                <span class="error"> <?php if (isset($_POST['thirdform'])) echo ValidareSir($_POST["firstname"]); ?> </span>
            </p>
            <p>

                <label for="subject"><b>Subject</b></label>
                <textarea name="subject" placeholder="Write something.."></textarea>
            </p>
            <p>
                <button name="thirdform" type="submit">Submit</button>
    </form>
    </div>

    <?php
    if (isset($_POST['thirdform'])) {
        $subject = input_data($_POST["subject"]);
        if (ValidareSir($_POST["firstname"]) == "" && ValidareSir($_POST["lastname"]) == "" && ValidareSir($_POST["country"]) == "") {
            echo "<h3>Formular completat corect!</h3>";
        } else {
            echo "<h3>Nu ai completat corect formularul!</h3>";
        }
    }
    ?>

    <script src="../javascript/form.js"></script>
</body>

</html>