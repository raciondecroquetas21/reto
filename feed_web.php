<?php
            include_once 'inc/db.php';
            include_once 'inc/nav.html';


//  https://alt-web.com/TUTORIALS/?id=parse_xml_feed_with_php_code


            ?>



<?php
$rss = simplexml_load_file('https://www.billboard.com/feed/');

echo '<h4>'. $rss->channel->title . '</h4>';

foreach ($rss->channel->item as $item) {
   echo '<h4><a href="'. $item->link .'">' . $item->title . "</a></h4>";
   echo "<p>" . $item->title . "</p>";
   echo "<p>" . $item->description . "</p>";
} 
?>



