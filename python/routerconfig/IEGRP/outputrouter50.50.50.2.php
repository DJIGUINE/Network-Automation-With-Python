<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>router50.50.50.2</title>
<meta name="description" content="Contrôler et valider les saisies d'un formulaire d'inscription Web par le code client Javascript" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="fr" />
<link href='styles/mef.css' rel='stylesheet' type='text/css' />

   <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 
</head>


<body>
<div>


</div>
<div class="div_saut_ligne">
			</div>
         
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div class="div_conteneur_parent">
    
	
		
			
			
		  <div class="div_int_page">
			
			<div class="div_saut_ligne">
			</div>						
			
			<div style="float:left;width:10%;height:40px;"></div>
			<div style="float:left;width:80%;height:40px;text-align:center;">
			<div id="GTitre">
			<h1>Network Automation</h1>
			</div>
			</div>
			<div style="float:left;width:10%;height:40px;"></div>
			
			<div class="div_saut_ligne" style="height:60px">
			</div>
            
           
            
			
			<div style="width:100%;height:auto;text-align:center;">
			
			<div style="width:800px;display:inline-block;" id="conteneur">
	
				 
    			
					
			<div id="centre"> 
     
  <div align="center">
    <table>
                  <tr>
  
   <td>
				  <form id="inscription" name="inscription" method="POST" action="output.php">
                 
   
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="BACK" type="submit"> </input>
                        
                         </tr>
                  </table>

  <?php
  


$myfile = fopen("router50.50.50.2", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo "<h2>".fgets($myfile)."</h2>" . "<br>";
}
fclose($myfile);
?>
  
  	</div>	
                    
                   
				</div>
			</div>
			
			
			
			</div>

			<div class="div_saut_ligne" style="height:150px;">
			</div>	
			
			</div>
		</div>
	
	
	
</body>
</html>