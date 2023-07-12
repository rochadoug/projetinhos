<?php
require_once('requireall.php');

if (!class_exists("Conexao")):

    class Conexao
    {
        private static $connection;

        private function __construct()
        {
        }

        public static function getConnection()
        {

            $pdoConfig = DB_DRIVER . ":" . "Server=" . DB_HOST . ";";
            $pdoConfig .= "Database=" . DB_NAME . ";";

            try {
                if (!isset($connection)) {
                    $connection = new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                return $connection;
            } catch (PDOException $e) {
                $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
                $mensagem .= "\nErro: " . $e->getMessage();
                $mensagem .= "<br>" . DB_NAME . " " . DB_USER . " " . DB_PASSWORD;
                throw new Exception($mensagem);
            }
        }
    }



    /*  class Conexao
      {
          private $Connect = FALSE;
          private $DataBase = FALSE;

          public function __construct()
          {
              $this->Connect();
              
              if(connection_aborted() == TRUE)
              {
                  //@mssql_close($this->Connect);
              }
          }

          private function Connect()
          {

              $pdoConfig  = "sqlsrv:". "server=" . MSSQL_Host . ";";
              $pdoConfig .= "Database=".MSSQL_DB.";";

              //$this->Connect = @mssql_connect(MSSQL_Host, MSSQL_User, MSSQL_Pass); php5
              //$this->DataBase = @mssql_select_db(MSSQL_DB, $this->Connect);   php5
             try
             {
                  $this->Connect = new PDO($pdoConfig, "".MSSQL_User."", "".MSSQL_Pass."");
                  return true;
             }
             catch (PDOException $e)
             {
                  echo '<p>'. $e->getMessage() .'</p>';
                  exit('<span style=\"border:1px dashed #c00; color:#c00; padding:6px; background-color:#ffebe8;\"><strong>CONEXÃO ERROR 1:'.$e->getMessage().' </strong></span>');
                  return false;
             }           
              
          }

          public function Query($STMT_STRING)
          {
              $Query = @mssql_query($STMT_STRING);
              if($Query == FALSE)
              {
                  if(constant("MSSQL_Security_Log") == TRUE)
                  {
                      //$this->MSSQL_Log($CTM_MSSQL, "Query");
                  }
                  exit("<span style=\"border:1px solid #c00; color:#c00; padding:6px; background-color:#ffebe8;\">CONEX&Atilde;O ERROR 2: Erro ao executar Query : <strong>\"{$STMT_STRING}\"</strong></span>");
              }
              return $Query;
          }
          public function Fetch($STMT_STRING)
          {
              return @mssql_fetch_row($STMT_STRING);
          }

          public function FetchArray($STMT_STRING)
          {
              return @mssql_fetch_array($STMT_STRING);
          }
          public function FetchQuery($STMT_STRING)
          {
              return @mssql_fetch_row($STMT_STRING);
          }
      } */
endif;
?>