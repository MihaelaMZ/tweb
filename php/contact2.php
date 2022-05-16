<!DOCTYPE html>
<html>

<head>
<title>Contact</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="../javascript/script.js"></script>
</head>

<body>
<div class="menu">
        <a href="../index.php">UE</a>
        <a href="history.php">Istorie</a>
        <a href="symbols.php">Simboluri</a>
        <a href="countries.php">&#354&#0259ri</a>
        <a href="priority.php">Priorit&#0259&#355i</a>
        <a href="contact.php">Contact</a>
        <a class="active" href="contact2.php">Contact2</a>
    </div>

    <div id="mainform">
        <div class="innerdiv">
           
            <form action='' id="myForm" method='post' name="myForm">
                <h3>Completați informațiile!</h3>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input id='username1' name='username' onblur="validate('username', this.value)" type='text'></td>
                        <td>
                            <div id='username'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
                        <td>
                            <div id='password'></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
                        <td>
                            <div id='email'></div>
                        </td>
                    </tr>
                </table>
                <div>
                    <p id="mesaj1">Formular completat corect!</p>
                    <p id="mesaj2">Formular completat incorect!</p>
                </div>
                <input onclick="checkForm()" type="button" value='Submit'>
            </form>
        </div>
</body>

</html>