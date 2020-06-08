<?php
if($_POST["message"]) {
    mail("tim.scott@toyota.co.nz", "Form to email message", $_POST["message"], "From:an@email.address");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="form.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>

</body>
</html>