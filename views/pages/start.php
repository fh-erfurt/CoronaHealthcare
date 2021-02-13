<html>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset=UTF-8>
    <title>CoronaHealthcare</title>
</head>

<body>
    <div id="main">
        <div class='start'>
        </br><img src=".\assets\FrauStartseite.jpg" style="width:60%;height:50%;"/>
            <p>
                    Hier finden Sie die wichtigste Auswahl an Produkten zur Eindämmung der Pandemie.
                    Für uns alle kam die Corona Pandemie überraschend und niemand war auf die aktuelle Situation vorbereitet. 
                    Das Virus hat alle Länder fest im Griff und es wurden weltweit Maßnahmen zur Eindämmung der Pandemie getroffen. 
                    Jeder Bürger ist angehalten sein Möglichstes zu tun und trägt täglich einen Teil dazu bei, 
                    gemeinsam durch diese schwere Zeit zu gehen. 
                    Um Sie vor dem Virus zu schützen und ihnen die bestmögliche Sicherheit gewährleisten zu können, hat sich das Unternehmen 
                    CoronaHealthcare dazu verpflichtet die Bürger mit eine angemessenen und qualitativ hochwertigen Schutzausrüstungen zu versorgen. 
                    Ob Eigenprodukt oder durch unser Qualitätsmanagement geprüfte Ware – unser Motto: Wir.Gegen.Corona wird von allen Mitarbeitern gelebt 
                    und dient ihnen. Zu ihrem Schutz.
            </p>
                 
        </div>
        <div class='aside'>
        <?php
        $rss = simplexml_load_file('https://www.rki.de/SiteGlobals/Functions/RSSFeed/RSSGenerator.xml;jsessionid=79D9903F3ECFDFED4FCE810B6E43438A.internet101?nn=2375210');
        echo '<h4>'. $rss->channel->title . '</h4>';
        foreach ($rss->channel->item as $item) {
        echo '<h4><a href="'. $item->link .'">' . $item->title . "</a></h4>";
        echo "<p>" . $item->description . "</p>";
        }?>
        </div>
    </div>
</body>

</html>