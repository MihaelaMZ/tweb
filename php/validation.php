<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Username
if ($formfield == "username") {
if (strlen($value) < 5) {
echo "Mai mult de 4 caractere";
} else {
echo "<span>Valid</span>";
}
}
// Password
if ($formfield == "password") {
if (strlen($value) < 8) {
echo "Parolă prea scurtă";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/@.+\./", $value)) {
echo "Invalid";
} else {
echo "<span>Valid</span>";
}
}
