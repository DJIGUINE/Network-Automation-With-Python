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
<title>Troubleshootrouters</title>
<meta name="description" content="Contrôler et valider les saisies d'un formulaire d'inscription Web par le code client Javascript" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="fr" />
<link href='styles/mef.css' rel='stylesheet' type='text/css' />

   <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="zonerouter.css">
  <script src="zonesrouterconf.js">
  </script>
 
</head>


<body>
<div>

<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Networking</a></div>
        <ul class="links">
          <li><a href="homepage.php">Home</a></li>
          
          <li>
            <a href="Routerconfig.php" class="desktop-link">Routers </a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
             <li><a href="troubleshootrouter.php">Troubleshoot routers</a></li>
              <li><a href="Routerconfig.php">Router config</a></li>
             
            </ul>
          </li>
          <li>
            <a href="switchconf.php" class="desktop-link">Switches </a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="troubleshootswitch.php">Troubleshoot switches</a></li>
              <li><a href="switchconf.php">switches config</a></li>
            </ul>
          </li>
          <li>
            <a href="firewallconf.php" class="desktop-link">Firewall</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
               <li><a href="troubleshootfirewall.php">Troubleshoot firewall</a></li>
              <li><a href="firewallconf.php">firewall config</a></li>

             
            </ul>
          </li>
          <li><a href="<?php echo $logoutAction ?>">Logout</a></li>
        </ul>
      </div>
</div>

<div class="div_saut_ligne">
			</div>
         
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div class="div_conteneur_parent">
   
    
	
		<div class="div_conteneur_page">
			
			
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
	
				                                                <div id="demo1" style="visibility:hidden" align="center" >
        </div>
    			
					
			<div   style="display:block; id="centre""> 
     
  <div align="center">
  <table width="600" border="0">	
  
  		      <tr>
        <td height="29"><h2 onMouseOver="mouseOver6()" onMouseOut="mouseOut6()">  Routers Conectivity</h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/routerconnectivity/routerconnectivity.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
                            <td height="29"><h2 onMouseOver="mouseOver7()" onMouseOut="mouseOut7()">Show History</h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shistory/shistory.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
      </tr>
      
            

      
                    <tr>
        <td height="29"><h2 onMouseOver="mouseOver8()" onMouseOut="mouseOut8()">Show Ip Interface brief</h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shipinterfacebrief/showipinterffacebrief.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
                    
                    <td height="29"><h2 onMouseOver="mouseOver9()" onMouseOut="mouseOut9()">Show Ip Route </h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shiproute/showiproute.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
      </tr>

      
       
        
      
      
              <tr>
        <td height="29"><h2 onMouseOver="mouseOver10()" onMouseOut="mouseOut10()">Show ARP </h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/sharp/showarp.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
                            <td height="29"><h2 onMouseOver="mouseOver11()" onMouseOut="mouseOut11()">Show Ip Traffic</h2> </td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shiptraffic/showiptraffic.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
      </tr>
             

      
              <tr>
        <td height="29"><h2 onMouseOver="mouseOver12()" onMouseOut="mouseOut12()">Show Run Configuration</h2></td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shrun/shrun.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
                            <td height="29"><h2 onMouseOver="mouseOver13()" onMouseOut="mouseOut13()">Show Version</h2> </td>
        <td>
				  <form id="inscription" name="inscription" method="POST" action="python/troubleshootrouters/shversion/showversion.php">
                  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    			
					
				 
                    
                   
		
<div class="div_input_form">
						<input   name="valid_inscr" id="valid_inscr" class="input_form" value="Execute" type="submit"> </input>
                        
                        </div>
                        
                                          
                          
      
      
    				
					
				  </form>	
                    </td>
      </tr>
                  
                  </table>
  	</div>	
                    
                   
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