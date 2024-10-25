<?php
function sanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}
$nameError = $emailError = "";
$name = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameError = "Name is required";
    }else{
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameError = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])){
        $emailError = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!validateEmail($email)){
            $emailError = "Invalid email format";
        }
    }
    if (empty($nameError) && empty($emailError)){
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    }else{
        if (!empty($nameError)) echo "Error: $nameError<br>";
        if (!empty($emailError)) echo "Error: $emailError<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Validation Example</title>
</head>
<body>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span style="color:red;">* <?php echo $nameError ;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span style="color:red;">* <?php echo $emailError ;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>