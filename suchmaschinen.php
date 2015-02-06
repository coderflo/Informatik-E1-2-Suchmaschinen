<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Alternativen</title>
		
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
                
                <p>
                    Hier w&uuml;rde dann der Einleitungstext stehen...
                </p>
                
                <p class="admin_note">
                    Bitte anpassen, sodass hier wirklich alle Suchmaschinen stehen, die wir behandeln!
                    <br>
                    Dann w&uuml;rde ich n&auml;mlich schonmal mit den Texten beginnen!
                    <br>
                    Die folgende unordered-list wird entfernt, sobald alle Suchmaschinentexte geschrieben sind!
                </p>
                
                <ul>
                    
                    <li>DuckDuckGo</li>
                    <li>Wolfram Alpha</li>
                    <li>FragFinn</li>
                    
                </ul>
                
               <div id="alternativen">
                   
                   <h1>DuckDuckGo</h1>
               
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
                   
                   <h1>Wolfram Alpha</h1>
               
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
                   
                   <h1>FragFinn</h1>
               
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
        
        <script>
            
            function getURLParameter(name) {
              var value = decodeURIComponent((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, ""])[1]);
              return (value !== 'null') ? value : false;
            }
            
            var item = false;
            
            var parameter = getURLParameter("item");
            if(parameter){
                item = parseInt(parameter);
            }
            
            $(function(){
    
                $("#alternativen").accordion({
                    collapsible: true,
                    active: item
                });
                
            });
            
        </script>
        
    </body>
    
</html>