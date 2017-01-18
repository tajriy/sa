<?php
    namespace app\models;
    class Kf{
        private static $dbdriver   = "mysql";
        private static $servername = "localhost";
        private static $username   = "root";
        private static $password   = "";
        private static $dbname     = "sp_mata";

        private function koneksi()
        {
            try{
                $KSF_DB_CONNECTION =
                    new \PDO(self::$dbdriver . ":host=" . self::$servername . ";dbname=" . self::$dbname ,
                        self::$username , self::$password);
                // set PDO error mode to exception
                $KSF_DB_CONNECTION->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
            }catch(PDOException $error){
                return "connection failed: " . $error->getMessage();
            }

            return $KSF_DB_CONNECTION;
        }

        public function getIdField($name , $table)
        {
            for($index = 0; $index < count($table); $index++){
                $fieldName = self::getNameOfField($table , $index);
                if($fieldName == $name){
                    return $index;
                }
            }
        }

        public function getNameOfField(array $field , $index)
        {
            $data = $field[ $index ]['Field'];

            return $data;
        }

        public function alert($pesan , $alert = " " , $id = "peringatan")
        {
            // tingkatan pesan
            $msg_caption = [
                "danger"  => "[ERROR_MESSAGE]:" ,
                "warning" => "[WARNING_MESSAGE]:" ,
                "info"    => "[INFO_MESSAGE]:" ,
                "success" => "[SUCCESS_MESSAGE]:" ,
                "0"       => "" ,
            ];
            // periksa $alert tersedia atau tidak
            if( !strstr($alert , "danger , warning , info , success")){
                $alert = "info";
                $msg_caption = "0";
            }
            // pesan yang akan ditampilkan
            $msg_body = "<div id='" . $id . "' class='alert alert-" . $alert . "'>" . "<strong>" .
                (String) (($msg_caption == "0") ? $msg_caption : $msg_caption[ $alert ]) . "</strong> " . $pesan .
                "</div>";

            return $msg_body;
        }

        function getAtributOfTabel($table)
        {
            $sql = "SHOW FULL COLUMNS FROM " . $table;
            $data = self::runquery([
                "sql"   => $sql ,
                "fetch" => "fetchAll" ,
            ]);

            return $data;
        }

        function getLengthOfField(array $field , $index)
        {
            if( !is_int($index)){
                $index = self::getIdField($index , $field);
            }
            $data = implode("" , split("[a-z]*[()]" , $field[ $index ]['Type']));

            return $data;
        }

        function runquery(array $param/* $sql, $pesan = "", $fetchON = true, $fetch = "fetchAll" */)
        {
            $sql = isset($param["sql"]) ? $param["sql"] : "";
            $pesan = isset($param["pesan"]) ? $param["pesan"] : "";
            $fetch = isset($param["fetch"]) ? $param["fetch"] : "";
            try{
                // mempersiapkan koneksi dan printah SQL
                $query = self::koneksi()->prepare($sql);
                // menjalankan perintah SQL
                $query->execute();

                // memeriksa perintah SQL apakah terdapat perintah SELECT atau SHOW
                return ((strstr(strtoupper($sql) , "SELECT") || strstr(strtoupper($sql) , "SHOW")) && $fetch != "") ?
                    (($pesan != "") ? [
                        $query->{$fetch}(\PDO::FETCH_ASSOC) ,
                        self::alert(((is_array($pesan)) ? $pesan[0] : $pesan) , "info") ,
                    ] : $query->{$fetch}(\PDO::FETCH_ASSOC)) : (($pesan != "") ? [
                        $query ,
                        self::alert(((is_array($pesan)) ? $pesan[0] : $pesan) , "success") ,
                    ] : $query);
            }catch(PDOException $error){
                // periksa apakah array pesan dengan indek 1 berisi value
                return (isset($pesan[1]) ? [
                    self::alert($pesan[1] . " [ERROR]:[" . $error->getMessage() . "]" , "danger") ,
                    self::alert($pesan[1] , "danger") ,
                ] : [
                    self::alert("Maaf, terjadi kesalahan saat memproses data" , "danger") ,
                    self::alert("Maaf, terjadi kesalahan saat memproses data : " . $error->getMessage() , "danger") ,
                ]);
            }
        }

        function rmZeroOnFirst($angka)
        {
            $n = 0;

            return (substr((String) $angka , 0 , 1) == 0) ? self::rmZeroOnFirst(substr($angka , $n + 1)) : $angka;
        }

        function genIdChar($prefix = "" , $sufix = "" , $table , $field)
        {
            $length = self::getLengthOfField(self::getAtributOfTabel($table) , $field);
            $sql = "SELECT max(" . $field . ") as id FROM " . $table . "";
            $data = self::runquery([
                "sql"   => $sql ,
                "fetch" => "fetch" ,
            ]);
            $length_prefix = strlen($prefix);
            $length_sufix = strlen($sufix);
            $lengthForID = $length - ($length_prefix + $length_sufix);
            $idChar = $data['id'];
//            var_dump($idChar);
            if($idChar == NULL){// bila data kosong maka dan lengthForID lebih dari 0 maka Idchar akan di set=1
                if($lengthForID > 0){
                    $idChar = 1;
                }
            }else{
                $idChar = preg_replace("/$prefix/" , "" , $idChar); //menghapus prefix
                $idChar = preg_replace("/$sufix/" , "" , $idChar); // menghapus sufix
                $idChar = self::rmZeroOnFirst($idChar); // menghapus angka nol di depan misal: 000010 akan jadi-> 10
                $idChar++;
            }
            return ($prefix . str_pad($idChar , $lengthForID , 0 , STR_PAD_LEFT) . $sufix);
        }
    }
