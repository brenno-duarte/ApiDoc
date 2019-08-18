<?php

class getJson {
    
    public function getInfo(){
        $json = file_get_contents('../json/config.json');
        $data = json_decode($json);

        return $data;
    }

    public function getRouter(){
        $json = file_get_contents('../json/router.json');
        $array = json_decode($json);
        $res = $array->urls;

        return $res;
    }

    public function getCustomRouter(){
        $json = file_get_contents('../json/customRouter.json');
        $array = json_decode($json);
        $res = $array->urls;

        return $res;
    }

}