<?php
require_once('requireall.php');

/*****************************************************************************
@ MSSQL Settings
@ Configurações do Servidor Microsoft SQL Server
@ true = Sim
@ false = Não
*****************************************************************************/
define("DB_HOST", "172.28.6.181"); // -- Host do MSSQL (Padrão -> 127.0.0.1)
define("DB_USER", "SA"); // -- Usuario do MSSQL (Padrão -> sa)
define("DB_PASSWORD", "Pass1234"); // -- Senha do MSSQL
define("DB_NAME", "MuOnline"); // -- DataBase das contas [Geralmente = Me_MuOnline] (Padrão -> MuOnline)
define('DB_DRIVER', "sqlsrv");

define("SERVER_TITLE","Site Título")

?>