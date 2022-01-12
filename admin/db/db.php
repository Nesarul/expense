<?php
    require_once "config.php";
    class db{
        private static $_instance = null;
        private $_conn,

                $_query;

        private function __construct(){
            $this->_conn = new mysqli(config::getInfo('dbase/host'), config::getInfo('dbase/user'), config::getInfo('dbase/pass'), config::getInfo('dbase/db'));

            // Check connection
            if ($this->_conn->connect_error) {
                die("Connection failed: " . $this->_conn->connect_error);
            }
        }

        public static function getInstance(){
            if(!self::$_instance)
                self::$_instance = new db();
            return self::$_instance;
        }

        public function insert($table, $params = array(),$types=null){
            $q = str_repeat('?, ',count($params)-1) .'?';
            $t = ($types == null ? str_repeat('s',count($params)) : $types);
            $pk = array();
            $st = "";
            if(count($params) > 1){
                foreach($params as $key => $val){
                    $st .= $key.', ';
                    $pk[] = $val;
                }
                $st = rtrim($st,', ');
            }
            $st = "INSERT INTO ".$table."(".$st.") VALUES(".$q.")";
            $stmt = $this->_conn->prepare($st);
            $stmt->bind_param($t, ...$pk);
            $stmt->execute();
        }
    }