<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Suchmaschinen</title>
		
		<!-- Basic Meta (kopiert aus index.php)-->
		
		<meta name="author" content="Florian Marwitz, Marius Funke">
		<meta name="description" content="BESCHREIBUNG">
		<meta name="keywords" content="KEYWORDS">
		
		<meta charset="UTF-8">		
        
        <?php
			include("php/basic_head.php");
		?>
		
		<link rel="stylesheet" type="text/css" href="css/page/suchmaschinen.css" />
		
		<script src="js/page/suchmaschinen.js"></script>
        
    </head>
    
    <body id="background">
        
        <div id="wrapper">
            
            <header>
                
                <!-- Navigation/Menü -->
                <?php include('php/nav_bar.php') ?>
                
            </header>
            
            <main>
                
                <h2>Inhaltsverzeichnis</h2>
                
                <p class="admin_note">
                    Bitte anpassen, sodass hier wirklich alle Suchmaschinen stehen, die wir behandeln!
                    <br>
                    Dann w&uuml;rde ich n&auml;mlich schonmal mit den Texten beginnen!
                    <br>
                    Die folgende unordered-list wird entfernt, sobald alle Suchmaschinentexte geschrieben sind!
                </p>
                
                <ul>
                    
                    <li>Suchmaschinenname 1</li>
                    <li>Suchmaschinenname 2</li>
                    
                </ul>
                
               <div id="alternativen">
                   
                   <h1>Suchmaschinenname 1</h1>
               
                   <div>
                       
                       <p>
                           
                           Vorstellung der Suchmaschine
                           
                       </p>
                       
                       <h3>Vorteile</h3>
                       
                       <!-- Hier bewusst keine <p> Tags, da hier nur kurze Stichpunkte stehen sollen!
                           Sollte hier ein längerer Text stehen bitte <p> Tags verwenden!
                        -->
                       
                       <ol>
                           
                           <li>
                               Vorteil #1
                           </li>
                           
                           <li>
                               Vorteil #2
                           </li>
                           
                       </ol>
                       
                       <h3>Nachteile</h3>
                       
                       
                       <!-- Hier bewusst keine <p> Tags, da hier nur kurze Stichpunkte stehen sollen!
                           Sollte hier ein längerer Text stehen bitte <p> Tags verwenden!
                        -->
                       
                       <ol>
                           
                           <li>
                               Nachteil #1
                           </li>
                           
                           <li>
                               Nachteil #2
                           </li>
                           
                       </ol>
                       
                   </div>
                   
                   <h1>Suchmaschinenname 2</h1>
               
                   <div>
                       
                       <p>
                           
                           Vorstellung der Suchmaschine
                           
                       </p>
                       
                       <h3>Vorteile</h3>
                       
                       <!-- Hier bewusst keine <p> Tags, da hier nur kurze Stichpunkte stehen sollen!
                           Sollte hier ein längerer Text stehen bitte <p> Tags verwenden!
                        -->
                       
                       <ol>
                           
                           <li>
                               Vorteil #1
                           </li>
                           
                           <li>
                               Vorteil #2
                           </li>
                           
                       </ol>
                       
                       <h3>Nachteile</h3>
                       
                       
                       <!-- Hier bewusst keine <p> Tags, da hier nur kurze Stichpunkte stehen sollen!
                           Sollte hier ein längerer Text stehen bitte <p> Tags verwenden!
                        -->
                       
                       <ol>
                           
                           <li>
                               Nachteil #1
                           </li>
                           
                           <li>
                               Nachteil #2
                           </li>
                           
                       </ol>
                       
                   </div>
                   
               </div>
               
            </main>
            
        </div>
        
    </body>
    
</html>