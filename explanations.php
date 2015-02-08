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
                
                <div id="inhaltsverzeichnis">
                    
                    <h2>Inhaltsverzeichnis</h2>
                    
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
                    
                </div>
                
                <a name="suchergebnisse"></a>
                
                <h1>Suchergebnisse</h1>
                
                <a name="bots"></a>
                
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
                    <br>
                    Die Erste ist das <code>rel="nofollow"</code> Attribut. Wird dieses Attribut einem Link zugewiesen,
                    so folgt der Google Bot diesem Link nicht.
                    <br>
                    Dieses Attribut kann man auch in dem <code>&lt;meta name="robots"&gt;&lt;/meta&gt;</code> Tag benutzen, hier allerdings
                    in folgeder Form: <code>content="nofollow"</code>
                    <br>
                    Diese Einstellung wirkst sich dann auf alle Links der Seite aus.
                    <br>
                    <br>
                    Die zweite M&ouml;glichkeit ist eine robots.txt Datei, die sich im Hauptverzeichnis der Website befindet.
                    Der Link zu so einer Datei lautet dann zum Bespiel <a href="http://www.google.com/robots.txt">http://www.google.com/robots.txt</a>.
                    <br>
                    In dieser Datei kann dann eingestellt werden, welche Dateien oder Ordner nicht in die Suchergebnisse
                    aufgenommen werden sollen.
                    
                </p>
                
                <a name="ranking"></a>
                
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
                
                <a name="seo"></a>
                
                <p>
                    
                    Jede Internsetseite hat auf jeden Fall das Ziel, so viele Besucher wie m&ouml;glich zu haben. Um dies erreichen
                    zu k&ouml;nnen, gibt es das <abbr title="Search Engine Optimization">SEO</abbr> (Search Engine Optimization).
                    Das <abbr title="Search Engine Optimization">SEO</abbr> (englisch: Search Engine Optimization; zu deutsch:
                    Suchmaschinenoptimierung) besch&auml;ftigt sich damit, den Inhalt und die Seite selbst so zu konstruieren, dass Google,
                    oder auch jede andere Suchmaschine, die Website m&ouml;glichst gut bewertet und folglich auch h&ouml;her in
                    den Suchergebnissen erscheint. Wikipedia ist dabei das Musterbeispiel einer gelungenen Anpassung.
                    <br>
                    <i>
                        Probier es doch selbst einmal aus und schaue bei wie vielen Suchanfragen Wikipedia direkt an erster Stelle
                        steht!
                    </i>
                    <br>
                    Das liegt daran, dass das Thema des Artikels sich durch die komplette Seite durchzieht, wie ein roter
                    Faden. Und genau das ist es, was dem Google Bot so gut an Wikipedia gef&auml;llt.
                    
                </p>
                
                <p>
                    
                    Damit eine Internsetseite einen m&ouml;glichst guten Rang in den Suchergebnissen hat, sollte man
                    versuchen, &Uuml;berschriftenn und weitere strukturierende Elemente sinnvol einzubauen. Au&szlig;erdem
                    bewertet Google auch die sogenannten Backlinks, also Links, die auf die zu optimierende Seite verweisen (wie
                    oben schon erw&auml;hnt). Weiterhin wird vermutet, dass Kommentare und Likes auf diversen Social Media Seiten
                    in die Bewertung miteinflie&szlig;en.
                    
                </p>
                
                <a name="werbung"></a>
                
                <h1>Werbung</h1>
                
                <a name="anzeigen"></a>
                
                <p>
                    
                    Google muss allerdings seine Mitarbeiter, Server, Strom und vieles weiteres bezahlen. Google hat also
                    laufende Kosten. Um diese zu decken schaltet Google Werbung in die Suchergebnisse.
                    Bei bestimmten Suchanfragen (zum Beispiel bei <a href="http://google.com/search?q=Smartphone">Smartphone</a>)
                    erscheint dann Werbung (beispielsweise rechts, oben und unten bei Google).
                    <br>
                    Werbekunden bezahlen bei Google Geld daf&uuml;r, sobald ein Besucher auf die Werbung klickt.
                    Das hei&szlig;t, dass reine schalten von Werbung ist bei Google komplett kostenlos, man muss allerdings
                    einen bestimmten Betrag pro Klick bezahlen, also sobald jemand auf die Anzeige klickt.
                    
                </p>
                
                <a name="werbeprofil"></a>
                
                <p>
                    
                    Damit Google also Geld verdient, muss Google den Besucher dazu bringen, auf die Werbung zu klicken.
                    F&uuml;r Google macht es also keinen Sinn, wenn jemand nach <a href="http://google.com/search?q=Tee">Tee</a>
                    sucht, Werbung f&uuml;r Kaffee anzuzeigen. Aus diesem Grund sammelt Google so viele Daten wie m&ouml;glich
                    &uuml;ber den Besucher und analysiert diese. Dadurch ensteht ein Werbeprofil, in dem Google
                    ungef&auml;hr einsch&auml;tzt, wie alt der Besucher ist und welche Interessen er hat.
                    <br>
                    Dieses Werbeprofil kann man bei Google <a href="http://google.com/settings/ads">hier</a> einsehen.
                    <br>
                    Weiterhin speichert Google z.B. auch die Standorte. Was Google alles &uuml;ber den Nutzer von Google Diensten
                    speichert, kann <a href="http://google.com/settings/dashboard">hier</a> eingesehen werden.
                    <br>
                    Durch dieses Werbeprofil kann Google den Besucher besser einsch&auml;tzen und wei&szlig;, wof&uuml;r er sich
                    interessiert und kann ihm dementsprechend sogenannte personalisierte Werbung zeigen.
                    
                </p>
                
            </main>
            
        </div>
        
    </body>
    
</html>