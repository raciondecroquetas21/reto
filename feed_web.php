<?php
            include_once 'inc/db.php';


//  https://alt-web.com/TUTORIALS/?id=parse_xml_feed_with_php_code


            ?>

<?php
////////////////////////////////////////////////
//********PARSE YOUTUBE XML FEED WITH PHP*****//
//******************By Nancy O.***************//
//*******Alt-Web Design & Publishing******//
//**************https://alt-web.com************//
//*********SAVE THIS FILE AS MY_FEED.PHP******//
////////////////////////////////////////////////     https://edm.com/.rss/full/
$html = "";
//URL of your XML feed by user, playlist or channel ID
$feed  = "https://www.youredm.com/feed/";
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
<iframe src='https://www.youredm.com/feed/$id' allowfullscreen>
</iframe><br>
<small>Published: $shortDate &nbsp; By: $author></small>
</div><hr>";
   }
//output everything to html
echo $html;
?>