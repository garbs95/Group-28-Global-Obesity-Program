<?php
    $text=$_POST['text'];
	$type=$_POST['type'];
	checkType($type,$text);

	
	function checkType($type,$text){
		
		if ($type==1){
			
			checkName($text);
			
			
			
			
		}
		if ($type==2){
			
			checkPassword($text);
			
			
			
			
		}
		if ($type==3){
			
			checkOrganisiation($text);
			
			
			
			
		}
		if ($type==4){
			
			checkPosition($text);
			
			
			
			
		}
		
		
	}
	
	 
  function checkName($text){

      

       $regex = '/^[A-Za-z]+[A-Za-z -]*$/';

      if (preg_match($regex,$text)) 
       {   

      
        
        if (strlen($text)>5&&strlen($text)<11)
        {
        echo 10;
		
		}
        else{
			
	    echo 11;		
			
		}
	   
	   
     }  
      	 
   else
       { 
       echo  12; 
        
       } 

}

function checkPassword($text){

      

       $regex = '/^[\w\s ]+$/';

      if (preg_match($regex,$text)) 
       {   

      
        
        if (strlen($text)>5&&strlen($text)<11)
        {
        echo 20;
		
		}
        else{
			
	    echo 21;		
			
		}
	   
	   
     }  
      	 
   else
       { 
       echo  22; 
        
       } 

}
function checkOrganisiation($text){

      

       $regex = '/^[0-9A-Za-z -]+$/';

      if (preg_match($regex,$text)) 
       {   

      
        
        if (strlen($text)>2&&strlen($text)<30)
        {
        echo 30;
		
		}
        else{
			
	    echo 31;		
			
		}
	   
	   
     }  
      	 
   else
       { 
       echo  32; 
        
       } 

}
function checkPosition($text){

      

       $regex = '/^[A-Za-z ]+$/';

      if (preg_match($regex,$text)) 
       {   

      
        
        if (strlen($text)>2&&strlen($text)<20)
        {
        echo 40;
		
		}
        else{
			
	    echo 41;		
			
		}
	   
	   
     }  
      	 
   else
       { 
       echo  42; 
        
       } 

}




















