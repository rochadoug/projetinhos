<?php
require_once('requireall.php');

class Ranking 
{
    public $CharsArray;

 
    public function carregarRanking()
    {
        try {

            $Conexao = Conexao::getConnection();
            $query = $Conexao->query("SELECT Name,Resets FROM MuOnline.dbo.Character WHERE CtlCode < 8 ORDER BY Resets DESC, cLevel DESC");
            $this->$CharsArray = $query->fetchAll();
    
            return $this->$CharsArray;
         
         } catch (Exception $e) {
         
            echo $e->getMessage();
         
            exit;
         
         }
    }
} 
?>