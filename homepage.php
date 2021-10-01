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
<title>homepage</title>
<meta name="description" content="Contrôler et valider les saisies d'un formulaire d'inscription Web par le code client Javascript" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="fr" />
<link href='styles/mef.css' rel='stylesheet' type='text/css' />
<link href='styles1/mef.css' rel='stylesheet' type='text/css' />

   <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script language="javascript" type="text/javascript">

	var i1 = new Image;
	var i2 = new Image;
	var i3 = new Image;
	var i4 = new Image;
	var i5 = new Image;
	var i6 = new Image;
	var i7 = new Image;
	var i8 = new Image;
	var i9 = new Image;
	var i10 = new Image;
	var i11 = new Image;
	var i12 = new Image;
	var i13 = new Image;
	
	

	


	i1.src = "images1/01-The-Hotel-Topologie.jpg";
	i2.src = "images1/02-The-First-Floor.jpg";
	i3.src = "images1/03-The-Second-Floor.jpg";
	i4.src = "images1/04-The-Third-Floor.jpg";
	i5.src = "images1/05-The-Hotel-Topologie.jpg";
	i6.src = "images1/06-The-First-Floor.jpg";
	i7.src = "images1/07-The-Second-Floor.jpg";
	i8.src = "images1/08-The-Third-Floor.jpg";
	i9.src = "images1/09-The-Hotel-Topologie.jpg";
	i10.src = "images1/10-The-First-Floor.jpg";
	i11.src = "images1/11-The-Second-Floor.jpg";
	i12.src = "images1/12-The-Third-Floor.jpg";
	
	
	
	
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
	<div id="centre">
					<div class="texte_photo" id="texteph" >Titre de la photo</div>
					<div class="miniature">
						<img src="images1/image-defaut.jpg" alt="" class="img_miniature" id="mini1"  onClick="selection(1)"/>
					</div>
					<div class="miniature" style="left:173px;">
						<img src="images1/image-defaut.jpg" alt="" class="img_miniature" id="mini2" onClick="selection(2)"/>
					</div>
					<div class="miniature" style="left:346px;">
						<img src="images1/image-defaut.jpg" alt="" class="img_miniature" id="mini3" onClick="selection(3)"/>
					</div>
					<div class="miniature" style="left:519px;">
						<img src="images1/image-defaut.jpg" alt="" class="img_miniature" id="mini4" onClick="selection(4)"/>
					</div>						
					<div id="precedent">
						<input type="button" value="<<" title="Photo précédente" onClick="defiler('arriere')" />
					</div>
					<div style="position:absolute;">
						<img src="images1/image-defaut.jpg" alt="" id="album"/>
					</div>
					<div id="suivant">
						<input type="button" value=">>" title="Photo suivante" onClick="defiler('avant')" />
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
<script type="text/javascript" language="javascript">

	var chaine_img="01-The-Hotel-Topologie.jpg;02-The-First-Floor.jpg;03-The-Second-Floor.jpg;04-The-Third-Floor.jpg;"
chaine_img += "05-The-Hotel-Topologie.jpg;06-The-First-Floor.jpg;07-The-Second-Floor.jpg;08-The-Third-Floor.jpg;"

chaine_img += "09-The-Hotel-Topologie.jpg;10-The-First-Floor.jpg;11-The-Second-Floor.jpg;12-The-Third-Floor.jpg;"
//24	

	// 1) premier chose a faire aparution des photo 
	var tab_img = chaine_img.split(";");
	//2 renseignement sur le nombre d'element
	var nb_img= tab_img.length;
	var chemin = "images1/";
	// 3 image en cour de visualisation
	var position=0;
	// 4 pour affiche les photo dans les deferent qualc
	document.getElementById('album').src = chemin + tab_img[position];
	document.getElementById('mini1').src = chemin + tab_img[position];
	document.getElementById('mini2').src = chemin + tab_img[position + 1];
	document.getElementById('mini3').src = chemin + tab_img[position + 2];
	document.getElementById('mini4').src = chemin + tab_img[position + 3];
	
	
	
	// 5 mettre en valeur la vignette en cour de visualistion
	document.getElementById("mini1").style.border= "#84020b 5px solid";
	
	//21
	traite_texte(tab_img[position]);
	
	//17 pour aue lorsquon clik sur la miniature que xa mache automatiquement
	function selection(img_source){
	
	 var image_en_cours = document.getElementById("mini" + img_source).src;
	 //18 coerence entre les miniature au click
	 var posi_caractere =  image_en_cours.lastIndexOf("/",image_en_cours);
	 //alert(posi_caractere);
	 
	 document.getElementById('album').src = image_en_cours;
	 
	 for (var indice =1; indice < 5; indice++ )  
	   {
	     document.getElementById("mini" + indice).style.border="#333 2px solid";
		 
	    }
		document.getElementById("mini" + img_source).style.border= "#84020b 5px solid";
	 //19
	 image_en_cours=image_en_cours.substring(posi_caractere);
	 
	 // alert(image_en_cours);
	 for(var defil=0;defil< nb_img; defil++)
	 {
	    if(tab_img[defil]==image_en_cours)
		{
		   position=defil;
		   break;
		   
	    }
	 }
	 
	 //22
	 traite_texte(image_en_cours);
	 
	}
	
	
	
	//6 defilement des image  appeller la function   dans les calque pour les buton devant ou derrier 
	//7si nous progresson vers l'avant increment la position  ou decrementer
	function defiler(comment)
	{
	
		 if (comment=="avant")
			position++;
		 else
		   position--;
		 //8 ensuit nous devons ajuster la photo qui sera au centre de l'album 
		 // car l'image au centre doit etre egal a la position increment ou decremente selon le sens
		 
		 //document.getElementById('album').src = chemin + tab_img[position];
		 // 9 faisont notre premier test en rafraichissant la page 
		 
		 //essayons maintenant de corriger les different erreu </div>
		 // 10 une foi sur la derniere photo on doit contuinier directemen sur la suivant 
		 //PASSE AUTOMATIAUEMENT A LA PREMIER PHOTO 
		   if(position<0) 
		   {
			 position = nb_img - 1;
			 //12
			 document.getElementById('mini1').src = chemin + tab_img[position - 3];
			 document.getElementById('mini2').src = chemin + tab_img[position - 2];
			  document.getElementById('mini3').src = chemin + tab_img[position - 1];
			 document.getElementById('mini4').src = chemin + tab_img[position ];
			 //13effecttuon un test  pour verifie si ces automatic  vers larrere  
		 
			 
			}
			else if(position==nb_img) 
		   {
			 position = 0;
			 
				
				document.getElementById('mini1').src = chemin + tab_img[position];
				document.getElementById('mini2').src = chemin + tab_img[position + 1];
				document.getElementById('mini3').src = chemin + tab_img[position + 2];
				document.getElementById('mini4').src = chemin + tab_img[position + 3];
				
			 //14effecttuon un test  pour verifie si ces automatic  vers lavant  
		 
			 
			}
				else if(position % 4==0 && comment=="avant")
		   {
			 
			 
				
				document.getElementById('mini1').src = chemin + tab_img[position];
				document.getElementById('mini2').src = chemin + tab_img[position + 1];
				document.getElementById('mini3').src = chemin + tab_img[position + 2];
				document.getElementById('mini4').src = chemin + tab_img[position + 3];
				
			 //15ffecttuon un test  pour verifie si les mini vignette change automaticement VERS l'avant
		 
			 
			}
			
				else if((position + 1) %   4==0 && comment=="arriere" && position !=0)
		   {
			 
			 
				
				document.getElementById('mini1').src = chemin + tab_img[position -3];
				document.getElementById('mini2').src = chemin + tab_img[position - 2];
				document.getElementById('mini3').src = chemin + tab_img[position - 1];
				document.getElementById('mini4').src = chemin + tab_img[position ];
				
			 //16fecttuon un test  pour verifie si les mini vignette change automaticement VERS l'avant
		 
			 
			}
		  
		  
		  //11
    document.getElementById('album').src = chemin + tab_img[position];
	   //16 gere les miniature en fonction de l'avancement
	   for (var indice =1; indice < 5; indice++ )  
	   {
	     document.getElementById("mini" + indice).style.border="#333 2px solid";
	     if ( document.getElementById("mini" + indice).src== document.getElementById('album').src)
	     document.getElementById("mini" + indice).style.border="#84020b 5px solid";
	  
	    }
		//23
		traite_texte(tab_img[position]);
	
		
	
	}
	// 20 gere la description des image
	function traite_texte(texte)
	{
	 var chaine ="" ;
	var tab_mot = texte.replace(".jpg","").split('-');	
	
	for (var compteur=1; compteur < tab_mot.length ; compteur++)
	{
	    //pour les mot dans le tableau
	   if (tab_mot[compteur].length >2 || compteur==1)
	   
	      chaine += tab_mot[compteur].substring(0,1).toUpperCase() + tab_mot[compteur].substring(1).toLowerCase() + " ";
	    
		
	  
		else   chaine += tab_mot[compteur] + " ";
	}
	document.getElementById("texteph").innerText = chaine;
	
}
	
	
	
	
	
</script>

</html>
	