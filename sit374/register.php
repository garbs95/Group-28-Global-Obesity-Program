

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju Your Fashion Shop">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="asset.css">
<style>

.error{color:red;}

.registerTable{
  width:30%;
  height:500px;
  border:1px solid;
  display:flex;
  align-items:center;
  justify-content:center;
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
 }


.submit{
  position:relative;
  width:50%;
  margin:0 auto;
}



</style>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid"> 
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php" style="color:white">Healthy Diets ASAP</a>
    </div>
</nav>	


   <div class="registerTable">
  
  <div>
	 <form method="post" action="doAction.php?act=reg" id="myForm" > 
  
                            <div>
                                <input type="text" name="username" placeholder="user name" id="username" required>
                                <p></p>
                            </div>
                           
                            <div>
                                <input type="password" name="password" placeholder="password" id="password"  required>
                                <p id="passwordSuggestion" class="error"></p>
                            </div>
							<div>
                                <input type="text" name="realname" placeholder="real name" id="realname" required>
                                <p></p>
                            </div>
						
						    <div>
                                <input type="text" name="organisiation" placeholder="organisiation" id="organisiation" required>
                                <p></p>
                            </div>
						              	<div>
                                <input type="text" name="organisiationAddress" placeholder="organisiationAddress" id="organisiationAddress" required>
                                <p></p>
                            </div>
							               <div>
                                <input type="text" name="position" placeholder="position" id="position" required>
                                <p></p>
                            </div>
							             <div>
                                <input type="email" name="email" placeholder="email" id="email" required>
                                <p></p>
                            </div>
							               <div>
                                <input type="number" name="contactNumber" placeholder="contactNumber" id="contactNumber" required>
                                <p></p>
                            </div>
							
                            <div class="submit">
                                <button type="submit" id="button"> Register</button>
                            </div>
							</br>
							<p id="userSuggestion" class="error"></p>
							
     </form>
</div>    
    
</div>

    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="checkinfo.js"></script>
</body>
    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->

<script>
	

	var username=document.getElementById("username");
	var password=document.getElementById("password");
	var time;
	var organisiation=document.getElementById("organisiation");
	var organisiationAddress=document.getElementById("organisiationAddress");
	var position=document.getElementById("position");
	var contactNumber=document.getElementById("contactNumber");
	var name=document.getElementById("realname");
	
    username.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
  
     time=setTimeout(function(){
     check(username.value,1);
      },1000);
  

  });
	
	 username.addEventListener("blur",function (){
    
  var url="doAction.php?act=check";
  var data={"username":username.value};
  var success=function(respond){
    if(respond==2){
      document.getElementById("userSuggestion").innerHTML="";
      document.getElementById("button").disabled=false;
	  
    }
    else if(respond==1){
      document.getElementById("userSuggestion").innerHTML="username has existed";
      document.getElementById("button").disabled=true;
    }
  };
  $.post(url,data,success,"json");
});
	
	
	password.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
  
     time=setTimeout(function(){
     check(password.value,2);
      },1000);
  

  });
  	name.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
	alert(1);
     time=setTimeout(function(){
     check(name.value,1);
      },1000);
  

  });
  organisiation.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
  
     time=setTimeout(function(){
     check(organisiation.value,3);
      },1000);
  

  });
  organisiationAddress.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
  
     time=setTimeout(function(){
     check(organisiationAddress.value,3);
      },1000);
  

  });
  
  
  position.addEventListener("keyup",function(){
     if(typeof time=="number"){
      clearTimeout(time);
      }
  
     time=setTimeout(function(){
     check(position.value,4);
      },1000);
  

  });
  
 
 ;



	function check(value,type){
		var url="checkinfo.php";
		var data={"text":value,"type":type};
		
		
		
		var success=function(respond){
			
			if(respond==10){
				
				document.getElementById("userSuggestion").innerHTML="";
				document.getElementById("button").disabled=false;
			}
			else if(respond==11){
				
				document.getElementById("userSuggestion").innerHTML="more than 5 less than 11";
				document.getElementById("button").disabled=true;
			}
			else if(respond==12){
				document.getElementById("userSuggestion").innerHTML="letter spaces - only";
				document.getElementById("button").disabled=true;
			}
			else if(respond==20){
				
				document.getElementById("userSuggestion").innerHTML="";
				document.getElementById("button").disabled=false;
			}
			else if(respond==21){
				
				document.getElementById("userSuggestion").innerHTML="more than 5 less than 11";
				document.getElementById("button").disabled=true;
			}
			else if(respond==22){
				document.getElementById("userSuggestion").innerHTML="letters numbers spaces - only";
				document.getElementById("button").disabled=true;
			}
			else if(respond==30){
				
				document.getElementById("userSuggestion").innerHTML="";
				document.getElementById("button").disabled=false;
			}
			else if(respond==31){
				
				document.getElementById("userSuggestion").innerHTML="more than 5 less than 30";
				document.getElementById("button").disabled=true;
			}
			else if(respond==32){
				document.getElementById("userSuggestion").innerHTML="letters numbers spaces - only";
				document.getElementById("button").disabled=true;
			}
			else if(respond==40){
				
				document.getElementById("userSuggestion").innerHTML="";
				document.getElementById("button").disabled=false;
			}
			else if(respond==41){
				
				document.getElementById("userSuggestion").innerHTML="more than 2 less than 20";
				document.getElementById("button").disabled=true;
			}
			else if(respond==42){
				document.getElementById("userSuggestion").innerHTML="letters and spaces only";
				document.getElementById("button").disabled=true;
			}
		}
		$.post(url,data,success,"json");
	}

		



</script>

</body>

</html>
