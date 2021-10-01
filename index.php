<?php require_once('Connections/networkautomation.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_login = "-1";
if (isset($_POST['user_name'])) {
  $colname_login = $_POST['user_name'];
}
mysql_select_db($database_networkautomation, $networkautomation);
$query_login = sprintf("SELECT * FROM login WHERE user_name = %s", GetSQLValueString($colname_login, "text"));
$login = mysql_query($query_login, $networkautomation) or die(mysql_error());
$row_login = mysql_fetch_assoc($login);
$totalRows_login = mysql_num_rows($login);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nom'])) {
  $loginUsername=$_POST['nom'];
  $password=$_POST['mp_inscr'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "homepage.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_networkautomation, $networkautomation);
  
  $LoginRS__query=sprintf("SELECT user_name, password FROM login WHERE user_name=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $networkautomation) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Loginpage</title>
<meta name="description" content="Contrôler et valider les saisies d'un formulaire d'inscription Web par le code client Javascript" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="fr" />
<link href='styles/mef.css' rel='stylesheet' type='text/css' />

</head>
<body>

	<div class="div_conteneur_parent">
	
		<div class="div_conteneur_page">
			<a href="#" target="_self">
			<img src="images/le_formateur.png" style="width:50px;border:none;" align="left" alt="formateur informatique" />
			</a>		
		  <div class="titre_page">
		    <h2>Networking</h2>
		    
		  </div>
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
				<div id="message">
				ALL THE FEILDS ARE REQUIRED
				</div>
                
                <div align="center">
				  <form id="inscription" name="inscription" method="POST" action="<?php echo $loginFormAction; ?>">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="400" border="0">
      <tr>
        <td height="44"><p align="center">Username</p></td>
        <td><div class="div_input_form">
						
						<input type="text" name="nom" id="nom" maxlength="50" class="input_form" placeholder="usernam please"required="required" />
						</div>
                        </td>
      </tr>
      <tr>
        <td height="29"><p align="center">Password</p></td>
        <td><div class="div_input_form">
						Your password : between 5 and 10 caracter<br />
						<input type="password" name="mp_inscr" id="mp_inscr" maxlength="10" class="input_form" placeholder="***********" required/>
                          </div>
                          
        </td>
      </tr>
      <tr>
        <td height="29">&nbsp;</td>
        <td>
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="LOG IN" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
        </td>
      </tr>
      
    </table>
  	</div>					
					
				  </form>	
                    
                   
				</div>
			</div>
			
			</div>

			<div class="div_saut_ligne" style="height:150px;">
			</div>	
			
			</div>
		</div>
	
	</div>
	
</body>
</html>
 <?php
mysql_free_result($login);
?>
