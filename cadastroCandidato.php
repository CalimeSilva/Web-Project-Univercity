<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/cadastroUser.css" rel="stylesheet" />
    <title>Cadastro de User</title>
  </head>
  <body>
    <nav class="top">
      <img src="img/Ativo 1.png" alt="" />
      <div class="login">
        <span><a href="loginForm.html">LOGIN</a> </span>
      </div>
    </nav>

    <header id="header">
      <ul>
        <li><a href="index.html">Home</a></li>
        |
        <li><a href="quemsomos.html">Quem Somos</a> |</li>
        <li><a href="curso.html">Curso</a> |</li>
        <li><a href="candidatura.html">Candidatura</a> |</li>
        <li><a href="ajuda.html">Ajuda</a> |</li>
        <li><a href="contaco.html">Contactos</a></li>
      </ul>
    </header>

    <div class="principal">
      <div class="form">
        <form action="crudPDO.php" method="post">
          <p>Cadastro de Candidato</p>
          <span>Este formulario é destinado aos candidatos.</span>
          <div class="DadosObrigatorios input">
            <label>Nome Completo:</label
            ><input
              type="text"
              placeholder="Nome Completo"
              maxlength="30"
              minlength="10"
              required
              name="nome"
            />
            <br />
            <label>Nº do documento de identidade:</label
            ><input
              type="text"
              placeholder="BI"
              maxlength="14"
              minlength="10"
              required
              name="bi"
            />
            <br />
            <label>Email:</label
            ><input
              type="email"
              placeholder="uniluanda@gmail.com"
              maxlength="50"
              required
              name="email"
            />
            <br />
            <label>Teledfone:</label
            ><input
              type="tel"
              pattern="\d{3}.\d{3}.\d{3}"
              placeholder="900-000-000"
              title="Digite o numero no formato XXX-XXX-XXX"
              maxlength="14"
              required
              name="tel"
            />
          </div>
          <label>Curso</label>
          <select id="Cursos" name="curso">
            <option selected disabled value="">Selecione uma das opções</option>
            <option value="1">Ciencia da Computação</option>
            <option value="2">Informatica</option>
            <option value="3">Gestão Empresiarial</option>
            <option value="4">Economia</option>
          </select>
          <!--Dados obrigatorios-->
          <div class="DadosGerais input">
            <label>Genero:</label>
            <label> <input type="radio" name="genero" value="sim" />H </label>
            <label> <input type="radio" name="genero" value="nao" />M </label>
            <br />
            <label>Tem alguma necesidade especial</label>
            <select id="difiencia" name="difiencia">
              <option selected disabled value="">
                Selecione uma das opções
              </option>
              <option>sem nenhuma difiencia</option>
              <option>Dificiencia Visual</option>
              <option>Dificiencia para andar</option>
              <option>Mudo</option>
            </select>
          </div>
          <!--Dados gerais-->

          <div class="DadosAcesso input">
            <label>Nome de Acesso:</label
            ><input
              type="text"
              placeholder="UserName"
              maxlength="10"
              required
              name="user"
            /><br />
            <label>Palavra Passe:</label
            ><input
              type="password"
              placeholder="Password"
              maxlength="30"
              required
              name="pass"
            />
          </div>
          <!--Dados de acesso-->
          <br />
          <textarea placeholder="" maxlength="30" name="texto"></textarea>
          <br />
          <input type="submit" value="Entrar" />
        </form>
        
        <?php
          if(isset($_POST['submit'])){
            if(!empty($_POST['curso']))
            $selected = $_POST['curso'];
            echo 'Voce escolheu: '. $selected;
          }else{
            echo'Please select the value';
          }


        ?>
        
      </div>
      <!--formulario-->
      <div class="img">
        <h1>
          Venha fazer parte deste grande universo que chamamos de
          <span>Universidade!</span>
        </h1>
        <p>
          Para fazer parte da <span> UNILUANDA</span> precisa fazer o teste de
          admição.
          <br />
          Registra-se com canditato.
          <br />
          É Simples, Facil e Rapido.
        </p>
      </div>
      <!--imagem-->
    </div>
    <!--principal-->
    <footer>
      <p>992 666 041 - 927214737 | Bairro Morrobento Luanda angola</p>
      <div class="social">
        <a href="" target="_blank">
          <i class="fb"></i>
        </a>
      </div>
    </footer>
  </body>
</html>
