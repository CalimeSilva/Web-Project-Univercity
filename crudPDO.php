<?php

//**********************************CONEXÃO************************* */

class Candidato
{
  private $pdo;
  //conexao com a BD
  public function __construct($dbname, $host, $user, $senha)
  {
    try {
      $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
    } catch (PDOException $th) {
      echo "ERRO COM O BANCO DE DADOS: " . $th->getMessage();
    } catch (Exception $e) {
      echo "ERRO comum: " . $e->getMessage();
    }
  }

  //função para preencher a tabela no dashboard admin
  public function buscarDados()
  {
    $res = array();
    $cmd = $this->pdo->query("SELECT * FROM candidatos ORDER BY nome");
    $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
  //função para cadastrar 
  public function cadastrarCandidato($nome, $bi, $email, $telefone, $curso, $genero, $user, $senha)
  {
    //verificar se ja esta cadastrado

    $cmd = $this->pdo->prepare("SELECT iddados from candidatos WHERE email = :e");
    $cmd->bindValue(":e", $email);
    $cmd->execute();
    // não foi encontrada o email então cadastre
    if ($cmd->rowCount() > 0) {
      return false;
    } else {
      $cmd->$this->pdo->prepare("INSERT INTO candidatos(nome, bi, email, telefone, curso, genero, username, senha) VALUES (:nom, :bi, :em, :tel, :cur, :gene, :user, :senha)");
      $cmd->bindValue(":nom", $nome);
      $cmd->bindValue(":bi", $bi);
      $cmd->bindValue(":em", $email);
      $cmd->bindValue(":tel", $telefone);
      $cmd->bindValue(":cur", $curso);
      $cmd->bindValue(":gene", $genero);
      $cmd->bindValue(":user", $user);
      $cmd->bindValue(":senha", $senha);
      $cmd->execute();
    }
  }
}

//**********************************INSERT************************* */

/*$nome=$_POST['nome'];
$bi=$_POST['bi'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$curso=$_POST['curso']; 
//$genero=$_POST['genero']; 
$genero=filter_input(INPUT_POST, 'genero');
$dificiencia=$_POST['difiencia'];
$user=$_POST['user'];
$senha=$_POST['pass'];
$texto=$_POST['texto']; 

$res = $pdo->prepare("INSERT INTO dados(nome, bi, email, telefone, curso, genero, especial, username, senha, informacoes) VALUES (:nom, :bi, :em, :tel, :cur, :gene, :espa, :user, :senha, :info)");

$res->bindValue(":nom",$nome);
$res->bindValue(":bi",$bi);
$res->bindValue(":em",$email);
$res->bindValue(":tel",$tel);
$res->bindValue(":cur",$curso);
$res->bindValue(":gene",$genero);
$res->bindValue(":espa",$dificiencia);
$res->bindValue(":user",$user);
$res->bindValue(":senha",$senha);
$res->bindValue(":info",$texto);

$res -> execute();*/
