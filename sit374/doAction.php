<?php 
 
require_once 'dbfunction.php';
require_once 'config.php';
//session_start();


$act=$_REQUEST['act'];
if($act==="reg"){
    reg();
}elseif($act==="login"){
    login();
}elseif($act==="check"){
    check();
}else if($act==="update"){
	update();
}else if($act==="input"){
    input();
}

function update(){
        $connect=new mysqli('127.0.0.1', 'root', '', 'scrappertest');
		$userID=$_POST["userID"];
        $sql="update users set confirmed='1' where userID='{$userID}' ";
        
        if($connect->query($sql) === TRUE){
            echo 1;
        }else{
            echo 2;
        }
}

// function freeze(){
        // $connect=oci_connect(DB_USER,DB_PWD,DB_HOST) ;
		// $userID=$_POST["userID"];
        // $sql="update users set confirmed='N' where userID='{$userID}' ";
        // $stmt=oci_parse($connect,$sql);
        // $result=oci_execute($stmt);
       
        // if($result){
            // echo 1;
        // }else{
            // echo 2;
        // }
// }

function reg(){
    $conn = new mysqli('127.0.0.1', 'root', '', 'scrappertest');
	//apply  htmlentities function
    $username=htmlentities($_POST['username']);
	$password=htmlentities($_POST['password']);
	$salt='salt1024';
	$password=md5($salt.$password);
	$organisiation=htmlentities($_POST['organisiation']);
	$organisiationAddress=htmlentities($_POST['organisiationAddress']);
	$position=htmlentities($_POST['position']);
	$email=htmlentities($_POST['email']);
	$contactNumber=htmlentities($_POST['contactNumber']);
	$name=htmlentities($_POST['realname']);

    // //Random String of salt used for everyone
    // $salt = 'salt1024';
    
    # Hash password
    // $password = md5($salt.$user_password);
    
    //$email=htmlentities($_POST['email']);
    $result="INSERT INTO users VALUES (12,'{$username}','{$password}','{$name}','{$organisiation}','{$organisiationAddress}','{$position}','{$email}',$contactNumber, 0, 0)";
	echo $result;
	# $conn->exec($result);
    if (mysqli_query($conn, $result)) {
		setcookie("username", $username, time()+3600);
        //$_COOKIE['email']=$email;
        echo "<script>window.location='index.php'</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    
}

function login(){
    //apply  htmlentities function
    $username=htmlentities($_POST['username']);
    $password=htmlentities($_POST['password']);
	
	// //Random String of salt used for everyone
    $salt = 'salt1024';
    $password = md5($salt.$password);
      
    $conn=new mysqli('127.0.0.1', 'root', '', 'scrappertest');
	$sql="SELECT * FROM users WHERE username='{$username}' and password='{$password}'";
	print_r($sql);
    $stmt=$conn->query($sql);
    $row = $stmt->fetch_assoc();
    
    if($row){
       /* 
        $_COOKIE['username']=$username;
        $connect=oci_connect(DB_USER,DB_PWD,DB_HOST);
        $sql="select * from u where username='{$username}'" ;
        $stmt=oci_parse($connect, $sql);
        oci_execute($stmt);
        $email=array();
        $i=0;
        while (oci_fetch_array($stmt)){ $email[$i]=oci_result($stmt,'EMAIL');$i++; }//****
        $_COOKIE['email']=$email[0];
        
        */
		
		if($username=="admin"){
			setcookie("username", $username, time()+3600);
			echo 3;
		}
		
		else {
		
        setcookie("username", $username, time()+3600);
		
        echo 1;
	}	
        
    }else{
       echo 2;
       
    }
    
}

function check(){
	 $connect=oxci_connectci_connect(DB_USER,DB_PWD,DB_HOST) ;
	
    if (!$connect) {
    echo "error, couldn't connect to ".DB_HOST." database.";
    exit;	
}
    $username=$_POST["username"];
    $sql="select * from users where username='{$username}'";
    $stmt=oci_parse($connect,$sql);
    $result=oci_execute($stmt);
	$row=oci_fetch_array($stmt);
    if($row){
        echo 1;
    }
    else{
        echo 2;
    }
}


function input(){
    //apply  htmlentities function
    $foodName=htmlentities($_POST['foodName']);
    $sbrand=htmlentities($_POST['sbrand']);
    $ybrand=htmlentities($_POST['organisiation']);
    $ssize=htmlentities($_POST['ssize']);
    $ysize=htmlentities($_POST['position']);
    $foodSize=htmlentities($_POST['foodSize']);
    $yourCost=htmlentities($_POST['yourCost']);
    $comments=htmlentities($_POST['comments']);
    $pricePromote=htmlentities($_POST['pricePromote']);
 
    
    
    //$email=htmlentities($_POST['email']);
   echo $foodName;
    

    
}

?>
