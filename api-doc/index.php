<?php

require 'getJson.php';

$api = new getJson();
$info = $api->getInfo();
$router = $api->getRouter();

foreach ($router->path as $value) {
    if ($value->get->pathGet == NULL || $value->getId->pathGetId == NULL || $value->post->pathPost == NULL 
    || $value->put->pathPut == NULL || $value->delete->pathDelete == NULL || 
    $value->get->descriptionGet == NULL || $value->getId->descriptionGetId == NULL ||
    $value->post->descriptionPost == NULL || $value->put->descriptionPut == NULL || 
    $value->delete->descriptionDelete == NULL || $value->get->link == NULL || 
    $value->getId->link == NULL || $value->post->link == NULL || 
    $value->put->link == NULL || $value->delete->link == NULL) {
        $warning = "There are some null fields in your json. Some routes will be empty";
    }

    if ($value->get->id == NULL || $value->post->id == NULL || 
    $value->put->id == NULL || $value->delete->id == NULL) {
        $warningId = "The 'id' field is empty / null in 'config.json'. The modal will not be displayed";
    }
    
}

include "header.php";
include "fields.php";