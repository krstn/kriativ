<?
if (isset ($_COOKIE["user"])){
	$login=true;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Kriativ</title>
        <link rel="stylesheet" href="assets/admin.css">
    </head>
    
    <body>
        <?if($login) {?>
        <div id="header">
            <a class="button" href="add.php">Add Item</a>
            <a class="button" href="account.php">Account</a>
            <a class="button" href="logout.php">Logout</a>
        </div>
        <?}?>
        <div id="container">