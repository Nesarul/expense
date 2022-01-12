<?php 
    class config{
        static function getInfo($params){
            $rec = parse_ini_file('db.ini',true);
            $par = explode('/',$params);
            foreach($par as $key){
                if(array_key_exists($key,$rec))
                    $rec = $rec[$key];
                else{
                    $rec = "Key Not Found";
                    break;
                }
            }
            return $rec;
        }
    }