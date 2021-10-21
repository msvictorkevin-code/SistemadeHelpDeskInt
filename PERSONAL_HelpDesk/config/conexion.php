<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				$conectar = $this->dbh = new PDO("mysql:local=localhost;port=3306;dbname=grupo6_helpdesk","root","Peru2021$$.");
                //Produccion
                //$conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=andercode_helpdesk1","andercode","contraseña");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			return "http://localhost:8080/PERSONAL_HelpDesk/";
            //Produccion
            //return "http://helpdesk.anderson-bastidas.com/";
		}

    }
?>
