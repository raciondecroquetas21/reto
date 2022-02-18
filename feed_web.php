
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Feed</title>
   <link rel="stylesheet" href="css\feed.css">
</head>
<body>

<?php
            
            include_once 'inc/nav.php';


//  https://alt-web.com/TUTORIALS/?id=parse_xml_feed_with_php_code


            ?>
   <div class="container">

   <?php

$html = "";
//URL of your XML feed by user, playlist or channel ID
$feed  = "http://www.youtube.com/feeds/videos.xml?channel_id=UCz_te5YcVVLaH0znruZgF5Q";
//Load feed xml file
$xml = simplexml_load_file($feed);
//display 6 feed entries, use more or less as desired
for($i = 0; $i < 4; $i++) {
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
   $html .= "<div class='video'>
<h4><a href='$uri'>$title</a></h4>
<iframe src='http://www.youtube.com/embed/$id' allowfullscreen>
</iframe><br>
<small>Published: $shortDate &nbsp; By: $author></small>
</div><hr>";
   }
//output everything to html
echo $html;
?>




   </div>
</body>
</html>




