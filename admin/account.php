<?
if (isset ($_POST["old"])){
	$old=$_POST["old"];
	$old2=$_POST["old2"];
    $new=$_POST["new"];
    
    echo $old;
    
//    if((strlen($name)>0) && (strlen($pass)>0)){
//        include_once 'utils/db_access.php';
//        $query= "SELECT * FROM users WHERE username='".$name."' AND password='".$pass."' AND type='admin'";
//		$result=mysql_query($query);
//		$num=mysql_numrows($result);
//		
//        if ($num==1){
//			$now = date('Y-m-d H:i:s');
//            $query = "UPDATE users SET last_login='".$now."' WHERE username='".$name."'";
//            mysql_query($query,$con);
//            
//            $type = mysql_result($result,0, "type");
//            setcookie("type", $type);
//			setcookie("user", $name);
//            header("Location: index.php");
//            exit();
//		}
//		else{ 
//			$errorMsg="Error: Wrong username or password.";
//		}
//		mysql_close();
//	}
//	else $errorMsg="Error: Please fill in all the fields.";
}

$login=false;
include 'template/header.php'; 
?>

<form  method="post" action="account.php">
    <div class="title">Change Password</div>
    <div class="error"><?echo $errorMsg?></div>
    <div class="entry first">
        <div class="label">Old Password</div>
        <input type="password" name="old" />
    </div>
    <div class="entry">
        <div class="label">Re-type Password</div>
        <input type="password" name="old2" />
    </div>
    <div class="entry">
        <div class="label">New Password</div>
        <input type="password" name="new" />
    </div>
    <div class="entry first">
        <input class="button" type="submit" name="submit" value="Enter" />
    </div>
</form>