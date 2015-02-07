<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Funktionsweise</title>
		
		<!-- Basic Meta (kopiert aus suchmaschinen.php)-->
		
		<meta name="author" content="Florian Marwitz, Marius Funke">
		<meta name="description" content="BESCHREIBUNG">
		<meta name="keywords" content="KEYWORDS">
		
		<meta charset="UTF-8">		
        
        <?php
			include("php/basic_head.php");
		?>
		
		<link rel="stylesheet" type="text/css" href="css/page/funktionsweise.css" />
        
    </head>
    
    <body id="background">
        
        <div id="wrapper">
            
            <header>
                
                <!-- Navigation/Menü -->
                <?php include('php/nav_bar.php') ?>
                
            </header>
            
            <main>
                
                <p class="admin_note">
                    An dieser Seite wird gerade gearbeitet!
                </p>
                
                <h1>Inhaltsverzeichnis</h1>
                
                <span class="admin_note">Inhaltsverzeichnis ist nicht mehr aktuell! Das Inhaltsverzeichnis wird aktualisiert, sobald der Inhalt vollst&auml;nidg ist!</span>
                
                <ol class="no_link">
                    
                    <li>
                        
                        <a href="#suchergebnisse">Suchergebnisse</a>
                        
                        <ol>
                            <li><a href="#bots">Bots</a></li>
                            <li><a href="#ranking">Ranking</a></li>
                            <li><a href="#seo">Search Engine Optimization</a></li>
                        </ol>
                        
                    </li>
                    
                    <li>
                        
                        <a href="#werbung">Werbung</a>
                        
                        <ol>
                            <li><a href="#anzeigen">Anzeigen</a></li>
                            <li><a href="#werbeprofil">Werbeprofil</a></li>
                        </ol>
                        
                    </li>
                    
                </ol>
                
                <p>
                    
                    Google durchsucht das Internet st&auml;ndig nach neuen Seiten und updated alte Sucheintr&auml;ge. Daf&uuml;r
                    hat Google eine eigene Software, den Google Bot, oft aber auch Spider oder Crawler oder auch Webcrawler genannt, 
                    die auf vielen Server weltweit l&auml;ft und die alle Links einer einzelnen
                    Website besucht, und wieder deren Links und so weiter. Au&szlig;erdem werden alle Links und auch die Anzahl der Links
                    zu einer bestimmten Website (zum Beispiel alle Links im Internet zu der Seite Amazon), wodurch der Rang dieser Seite
                    (in unserem Beispiel Amazon) in den Suchergebnissssen ver&auml;ndert werden kann.
                    
                    Alle Ergebnisse werden in einer Datenbank gespeichert und diese einzelnen Datenbanken sind miteinander verkn&uuml;pft.
                    
                 </p>
                    
                <p>
                    
                    Es gibt mehrere M&ouml;glichkeiten, dem Google-Bot mittzuteilen, dass eine Seite nicht in die
                    Suchergebnisse aufgenommen werden soll:
                    <br>
                    Die Erste ist der <code>no-follow</code> (<span class="admin_note">Bitte &uuml;berpr&uuml;fen!</span>) Tag.
                    <br>
                    F&uuml;r diesen Tag gibt es mehrere Werte, die das Verhalten des Bots einschr&auml;nken.
                    <br>
                    Die zweite M&ouml;glichkeit ist eine robots.txt Datei, die sich im Hauptverzeichnis der Website befindet.
                    Die URL zu so einer Datei lautet dann zum Bespiel <a href="http://www.google.com/robots.txt">http://www.google.com/robots.txt</a>.
                    <br>
                    In dieser Datei kann dann eingestellt werden, welche Dateien oder Ordner nicht in die Suchergebnisse
                    aufgenommen werden sollen.
                    
                </p>
                
                <p>
                    
                    Wenn du nun eine Suchanfrage bei Google eingibst, so urteilt Google nach mehreren Faktoren,
                    welche Suchergebnisse zu angezeigst bekommst und an welcher Stelle der einzelne Sucheintrag steht.
                    <br>
                    Diese Faktoren sind zum Beispiel:
                    <ul>
                        <li>Standort</li>
                        <li>Bestimmte Suchparameter</li>
                        <li>Suchverlauf</li>
                        <li>Ger&auml;t</li>
                    </ul>
                    Neben diesen gibt es allerdings noch zahlreiche andere Faktoren!
                    
                </p>
                
                <p>
                    
                    Platzhalter f&uuml;r einen kurzen Absatz &uuml;ber <a href="http://google.com/search?q=SEO">SEO</a>
                    
                </p>
                
            </main>
            
        </div>
        
    </body>
    
</html>