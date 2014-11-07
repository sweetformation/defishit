<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>RSS-Marcelo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$url = "https://remixjobs.com/rss?for=php+junior&at=Paris%2C+France&lat=48.856614&lng=2.3522219000000177&dist=10&page=1&in=all";

$rss = simplexml_load_file($url);

echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'<br></a> ('.$date.')</li>';
}

echo '</ul>';
?>

</body>
</html>