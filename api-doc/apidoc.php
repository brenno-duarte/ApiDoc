<?php

class apidoc {
    
    public function getJson(){
        $json = file_get_contents('../config.json');
        $data = json_decode($json);

        return $data;
    }

    public function getRouter(){
        $json = file_get_contents('../config.json');
        $array = json_decode($json);
        $res = $array->urls;

        return $res;
    }

}