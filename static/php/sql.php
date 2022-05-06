<?php
    class mysqli {
        private $host, $user, $pass, $db;

        function __construct($host, $user, $pass, $db) {
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
        }

        public function getHost() {
            return $this->host;
        }

        public function setHost($host) {
            $this->host = $host;
            return $this;
        }
            
        public function getUser() {
            return $this->user;
        }

        public function setUser($user) {
            $this->user = $user;
            return $this;
        }
            
        public function getPass() {
            return $this->pass;
        }

        public function setPass($pass) {
            $this->pass = $pass;
            return $this;
        }

        public function getDb() {
            return $this->db;
        }

        public function setDb($db) {
            $this->db = $db;
            return $this;
        }
    }
?>