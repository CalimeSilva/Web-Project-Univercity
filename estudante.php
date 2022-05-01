<?php
require_once 'crudPDO.php';
$crud = new Candidato("tbuniversidade", "localhost", "root", "");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/candidatura.css" rel="stylesheet" />
  <title>ADMIN</title>
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
    if (!empty($nome) && !empty($bi) && !empty($email) && !empty($telefone)) {
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
      <p>Cadastro de Estudantes Admin</p>

      <div class="DadosObrigatorios input">
        <label for="nome">Nome Completo:</label><input type="text" placeholder="Nome Completo" maxlength="30" minlength="10" required name="nome" />
        <br />
        <label for="curso">Curso</label><input type="text" placeholder="Curso" name="bi" />
        <br />
        <label for="Ano">Ano Curricular:</label><input name="ano" />
        <br />
        <label for="tipo">Tipo de estudante:</label><input name="tipo" />
        <br />
        <label for="telefone">Telefone:</label><input name="tel" />
      </div>

      <!--Dados gerais-->

      <input type="submit" value="Entrar" />
    </form>
  </section>

  <section id="tabela">
    <table>
      <tr id="titulo">
        <td colspan="2">Nome</td>
        <td colspan="2">Curso</td>
        <td colspan="2">Ano Curricular</td>
        <td colspan="2">Tipo de estudante</td>
        <td colspan="2">Telefone</td>

      </tr>
      <?php
      //todas as variaveis que vieram da BD estão guardadas na variavel $dados
      $dados = $crud->buscarDadosEstudantes();
      if (count($dados) > 0) //se tem pessoas cadastradas no banco de dados mostre
      {
        for ($i = 0; $i < count($dados); $i++) {
          echo "<tr >";
          foreach ($dados[$i] as $chave => $valor) {
            if ($chave != "id_estudante") {
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