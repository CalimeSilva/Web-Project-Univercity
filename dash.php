<?php
require_once 'crudPDO.php';
$crud = new Candidato("tbuniversidade", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/dash.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>

  <?php

  if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $bi = $_POST['bi'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $curso = $_POST['curso'];
    $genero = $_POST['genero'];
    $user = $_POST['user'];
    $senha = $_POST['pass'];
    if (!empty($nome) && !empty($bi) && !empty($email) && !empty($telefone) && !empty($user) && !empty($senha)) {
      if (!$crud->cadastrarCandidato($nome, $bi, $email, $telefone, $curso, $genero, $user, $senha)) {
        echo "email ja cadastrado";
      }
    } else {
      echo "Preencha todos os campos por favor*";
    }
  }
  ?>
  <section id="cadastro">
    <form method="POST">
      <p>Cadastro de Candidato</p>
      <span>Este formulario é destinado aos candidatos.</span>
      <div class="DadosObrigatorios input">
        <label for="nome">Nome Completo:</label><input type="text" placeholder="Nome Completo" maxlength="30" minlength="10" required name="nome" />
        <br />
        <label for="bi">Nº do documento de identidade:</label><input type="text" placeholder="BI" maxlength="14" minlength="10" required name="bi" />
        <br />
        <label for="email">Email:</label><input type="email" placeholder="uniluanda@gmail.com" maxlength="50" required name="email" />
        <br />
        <label for="telefone">Telefone:</label><input type="tel" placeholder="900-000-000" title="Digite o numero no formato XXX-XXX-XXX" maxlength="14" required name="tel" />
      </div>
      <label for="cursos">Curso</label>
      <select id="Cursos" name="curso">
        <option selected disabled value="">Selecione uma das opções</option>
        <option value="1">Ciencia da Computação</option>
        <option value="2">Informatica</option>
        <option value="3">Gestão Empresiarial</option>
        <option value="4">Economia</option>
      </select>
      <!--Dados obrigatorios-->
      <div class="DadosGerais input">
        <label for="genero">Genero:</label>
        <select id="genero" name="genero">
          <option selected disabled value="">Selecione uma das opções</option>
          <option value="1">M</option>
          <option value="2">F</option>

        </select>
        <br />

      </div>
      <!--Dados gerais-->

      <div class="DadosAcesso input">
        <label for="user">Nome de Acesso:</label><input type="text" placeholder="UserName" maxlength="10" required name="user" /><br />
        <label for="pass">Palavra Passe:</label><input type="password" placeholder="Password" maxlength="30" required name="pass" />
      </div>
      <!--Dados de acesso-->

      <input type="submit" value="Entrar" />
    </form>

  </section>
  <section id="tabela">
    <table>
      <tr id="titulo">
        <td colspan="2">Nome</td>
        <td colspan="2">BI</td>
        <td colspan="2">Email</td>
        <td colspan="2">Telefone</td>
        <td colspan="2">Curso</td>
        <td colspan="2">Genero</td>
        <td colspan="2">User</td>
        <td colspan="2">Palavra Passe</td>
      </tr>
      <?php
      //todas as variaveis que vieram da BD estão guardadas na variavel $dados
      $dados = $crud->buscarDados();
      if (count($dados) > 0) //se tem pessoas cadastradas no banco de dados mostre
      {
        for ($i = 0; $i < count($dados); $i++) {
          echo "<tr >";
          foreach ($dados[$i] as $chave => $valor) {
            if ($chave != "iddados") {
              echo "<td colspan=2>" . $valor . "</td>";
            }
          }
      ?>

          <td><a href="">Editar</a><a href="">Excluir</a></td>
      <?php
          echo "</tr>";
        }
      } else { // não tem pessoas cadastradas
        echo "Não tem pessoas cadastradas!";
      }
      ?>

    </table>
  </section>
</body>

</html>