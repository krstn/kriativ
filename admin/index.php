<?
if (isset ($_POST["name"])){
	$name=$_POST["name"];
	$pass=$_POST["pass"];
    
    if((strlen($name)>0) && (strlen($pass)>0)){
        include_once 'utils/db_access.php';
        
        $query= "SELECT * FROM users WHERE username = '".$name."' and password = '".$pass."' and type = 'admin' ";
		$result=mysql_query($query);
		$num=mysql_numrows($result);
		
        if ($num==1){
			$type = mysql_result($result,0, "type");
			setcookie("type", $type);
			setcookie("user", $name);
            
            exit();
		}
		else{ 
			$errorMsg="Error: Wrong username or password.";
		}
		mysql_close();
	}
	else $errorMsg="Error: Please fill in all the fields.";
}

$login=false;
include 'template/header.php'; 
?>

<?if(!$login) {?>
<form  method="post" action="index.php">
    <div class="title">Admin Login</div>
    <div class="error"><?echo $errorMsg?></div>
    <div class="entry first">
        <div class="label">Username</div>
        <input type="text" name="name" />
    </div>
    <div class="entry">
        <div class="label">Password</div>
        <input type="password" name="pass" />
    </div>
    <div class="entry first">
        <input class="button" type="submit" name="submit" value="Login" />
    </div>
</form>
<?}?>

<? include 'template/footer.php'; ?>