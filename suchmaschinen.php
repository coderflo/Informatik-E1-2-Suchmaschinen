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
                    
                    Hier findest du [ZAHL] Alternativen zu Google, dabei hat jede Alternative seine Vor- und Nachteile.
                    <br>
                    Urteile selbst, welche Suchmaschine am besten zu dir passt oder bleib bei deiner bisherigen, falls dir diese
                    nicht gefallen.
                    
                </p>
                
                <p class="admin_note">
                    Bitte anpassen, sodass hier wirklich alle Suchmaschinen stehen, die wir behandeln!
                    <br>
                    Dann w&uuml;rde ich n&auml;mlich schonmal mit den Texten beginnen!
                    <br>
                    Die folgende unordered-list wird entfernt, sobald alle Suchmaschinentexte geschrieben sind!
                </p>
                
                <ul>
                    
                    <li><strike>DuckDuckGo</strike></li>
                    <li>Wolfram Alpha</li>
                    <li>FragFinn</li>
                    
                </ul>
                
               <div id="alternativen">
                   
                   <h1>DuckDuckGo</h1>
               
                   <div>
                       
                       <p>
                           
                           <a href="http://DuckDUckGo.com">DuckDuckGo</a> ist eine Suchmaschine, die Wert auf Privatsph&auml;re und
                           Anonymit&auml;t legt. Zu diesem Zweck beschreibt DuckDuckGo genau, was gespeichert und was weitergegeben wird.
                           N&auml;mlich fast nichts.
                           <br>
                           <i><a href="https://duckduckgo.com/privacy">Link zur Privacy von DuckDuckGo</a></i>
                           <br>
                           <br>
                            Bei Besuch von z.B. Amazon &uuml;ber DuckDuckGo sendet DuckDuckGo einen Referral-Code mit,
                            durch den DuckDuckGo eine kleine Provision erh&auml;lt. Dadurch kann DuckDuckGo die Werbung gering halten.
                           
                       </p>
                       
                       <h3>Vorteile</h3>
                       
                       <ol>
                           
                           <li>
                               Anonymit&auml;t
                           </li>
                           
                           <li>
                               Es werden keine Daten gespeichert
                           </li>
                           
                           <li>
                               Wenig Werbung
                           </li>
                           
                           <li>
                               Einbindung des zugeh&ouml;rigen Wikipedia Artikels
                           </li>
                           
                           <li>
                               <a href="https://duckduckgo.com/bang.html">!Bang</a>
                            </li>
                            
                            <li>
                                Jede Suchanfrage wird anonym gespeichert, um den Dienst zu verbessern (Rechtschreiberkennung,...)
                            </li>
                            
                            <li>
                                Anpassbares Design
                            </li>
                           
                       </ol>
                       
                       <h3>Nachteile</h3>
                       
                       <ol>
                           
                           <li>
                                Jede Suchanfrage wird anonym gespeichert, um den Dienst zu verbessern (Rechtschreiberkennung,...)
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