<?php

require_once('../vendor/autoload.php');

use FlatBits\BitsOfVideo\VideoCollection;


ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

$playlistId = 'PLkRSD11r9mB_HbAxcCdYs7kMQOTzrDokj';

$videos = VideoCollection::fromPlaylist($playlistId);
$videos->downloadAll('../cache/videos/');
