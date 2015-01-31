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
                
                <ol class="no_link">
                    
                    <li>
                        
                        <a href="#suchmaschinen">Google und Co.</a>
                        
                        <ol>
                            <li><a href="#google">Google</a></li>
                            <li>Andere Suchmaschinen hier einf&uuml;gen und dann auch weiter unten einen Text mit &Uuml;berschrift und so...</li>
                        </ol>
                        
                    </li>
                    <li><a href="#alternativen">M&ouml;gliche Alternativen</a></li>
                    
                </ol>
                
                <h1><a name="suchmaschinen">Google und Co.</a></h1>
                
                <p>
                    Voll cooler Einleitungstext!
                </p>
                
                <h2><a name="google">Google</a></h2>
                
                <p>
                    Richtig informativer Text &uuml;ber Google
                </p>
                
                <h1><a name="alternativen">M&ouml;gliche Alternativen</a></h1>
                
                <p>
                    Werbung f&uuml;r Alternativen zu Google
                </p>
                
            </main>
            
        </div>
        
    </body>
    
</html>