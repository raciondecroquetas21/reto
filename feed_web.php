<?php
            
            include_once 'inc/nav.html';


//  https://alt-web.com/TUTORIALS/?id=parse_xml_feed_with_php_code


            ?>



<?php

$html = "";
//URL of your XML feed by user, playlist or channel ID
$feed  = "http://www.youtube.com/feeds/videos.xml?channel_id=UCWFRESFCQjtDv0egKR3j40Q";
//Load feed xml file
$xml = simplexml_load_file($feed);
//display 6 feed entries, use more or less as desired
for($i = 0; $i < 6; $i++) {
   //define our feed nodes
   $published = $xml->entry[$i]->published;
   //optional, shorten the date
   $shortDate = date("m/d/Y", strtotime($published));
   $title = $xml->entry[$i]->title;
   $id = $xml->entry[$i]->id;
   //strip unwanted characters from ID
   $id = str_replace ("yt:video:", "", $id);
   $author = $xml->entry[$i]->author->name;
   $uri = $xml->entry[$i]->author->uri;
   //put nodes into html tags & embedded youTube player.
   $html .= "<div class='col-sm-6 col-md-4'>
<h4><a href='$uri'>$title</a></h4>
<iframe src='http://www.youtube.com/embed/$id' allowfullscreen>
</iframe><br>
<small>Published: $shortDate &nbsp; By: $author></small>
</div><hr>";
   }
//output everything to html
echo $html;
?>








<!-- 

$rss = simplexml_load_file('https://www.billboard.com/feed/');

echo '<h4>'. $rss->channel->title . '</h4>';

foreach ($rss->channel->item as $item) {
   echo '<h4><a href="'. $item->link .'">' . $item->title . "</a></h4>";
   echo "<p>" . $item->title . "</p>";
   echo "<p>" . $item->description . "</p>";
} 


 -->

