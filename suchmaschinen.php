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
                </p>
                
                <ol class="no_link">
                    
                    <li>
                        <a href="#ixquick">Ixquick</a>
                    </li>
                    
                    <li>
                        <a href="#wolframalpha">Wolfram Alpha</a>
                    </li>
                    
                    <li>
                        <a href="#duckduckgo">DuckDuckGo</a>
                    </li>
                    
                    <li>
                        <a href="#fragfinn">Fragfinn</a>
                    </li>
                    
                </ol>
                
               <h1>Suchmaschinenname</h1>
               
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
               
            </main>
            
        </div>
        
    </body>
    
</html>