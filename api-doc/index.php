<?php

require 'getJson.php';

$api = new getJson();
$info = $api->getInfo();
$router = $api->getRouter();

foreach ($router->path as $value) {
    if ($value->get->pathGet == NULL || $value->post->pathPost == NULL || $value->put->pathPut == NULL || $value->delete->pathDelete == NULL) {
        $warning = "There are some null fields in your json. Some routes will be empty";
    }
}

include "header.php";
include "fields.php";