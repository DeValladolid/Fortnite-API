<?php
$api = new FortniteClient;
$api->setKey('5ae9fa892ff9cf7b4bfb2cda585bc77a');
?>

<?php
$data = $api->news->get('br', 'es');
?>

<?php
 
 foreach($data as $news) {
    echo $news->title;
    echo $news->body;
    echo $news->image;
    echo $news->time;
} 
?>
