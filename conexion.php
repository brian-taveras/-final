

 <?php

    class conexion{

        private $con;

        public function __construct(){

           
          $this->con = new mysqli('localhost', 'root', '', 'final');

        }

        public function getUsers($user, $pass){
          $query = $this->con->query("SELECT * FROM politecnico WHERE username = '".$user."' and password = '".$pass."';");
            $retorno = [];
            $i =0;

            while ($fila = $query->fetch_assoc()){
                $retorno [$i] =$fila;
                $i++;                
            }
            return $retorno;
        }
    
    }

?>