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


  <section id="tabela">
    <table>
      <tr id="titulo">
        <td colspan="2">Nome</td>
        <td colspan="2">BI</td>
        <td colspan="2">Email</td>
        <td colspan="2">Telefone</td>
        <td colspan="2">Genero</td>
        <td colspan="2">Curso</td>

      </tr>
      <?php
      //todas as variaveis que vieram da BD estão guardadas na variavel $dados
      $dados = $crud->buscarDadosCandidatos();
      if (count($dados) > 0) //se tem pessoas cadastradas no banco de dados mostre
      {
        for ($i = 0; $i < count($dados); $i++) {
          echo "<tr >";
          foreach ($dados[$i] as $chave => $valor) {
            if ($chave != "id_cand") {
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