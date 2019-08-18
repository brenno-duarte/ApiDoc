<?php

class getJson {
    
    public function getInfo(){
        $json = file_get_contents('../config.json');
        $data = json_decode($json);

        return $data;
    }

    public function getRouter(){
        $json = file_get_contents('../router.json');
        $array = json_decode($json);
        $res = $array->urls;

        return $res;
    }

    public function getCustomRouter(){
        $json = file_get_contents('../customRouter.json');
        $array = json_decode($json);
        $res = $array->urls;

        return $res;
    }

}