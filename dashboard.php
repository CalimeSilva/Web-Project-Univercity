<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/dashboard.css" rel="stylesheet" />
    <title>Administrador</title>
  </head>
  <body>
    <main>
      <div class="menu-lateral">
        <h2>UNILUANDA</h2>
        <ul>
          <li>Dashboard</li>
          <li>Estudantes</li>
          <li>Candidatos</li>
          <li>Ajuda</li>
          <li>Definições</li>
        </ul>
      </div>
      <!--menu lateral-->

      <div class="container">
        <div class="header">
          <div class="nav">
            <div class="pesquisar">
              <input type="text" placeholder="Pesquisar..." />
            </div>
            <!--pesquisar-->
            <div class="user">
              <a href="#" class="btn">Add new</a>
            </div>
            <!--user-->
          </div>
          <!--nav-->
        </div>
        <!--header-->
        <div class="content">
          <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h3>Estudantes</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h3>Professores</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/teachers.png" alt="">
                    </div>
                </div>
        
      </div>
      <!--container-->
      <section id="cadastro">
        <form action="crudPDO.php" method="post">
          <p>Cadastro de Candidato</p>
          <span>Este formulario é destinado aos candidatos.</span>
          <div class="DadosObrigatorios input">
            <label for="nome">Nome Completo:</label
            ><input
              type="text"
              placeholder="Nome Completo"
              maxlength="30"
              minlength="10"
              required
              name="nome"
            />
            <br />
            <label for="bi">Nº do documento de identidade:</label
            ><input
              type="text"
              placeholder="BI"
              maxlength="14"
              minlength="10"
              required
              name="bi"
            />
            <br />
            <label for="email">Email:</label
            ><input
              type="email"
              placeholder="uniluanda@gmail.com"
              maxlength="50"
              required
              name="email"
            />
            <br />
            <label for="telefone">Teledfone:</label
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
            <label> <input type="radio" name="genero" value="sim" />H </label>
            <label> <input type="radio" name="genero" value="nao" />M </label>
            <br />
            <label for="especial">Tem alguma necesidade especial</label>
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
            <label for="user">Nome de Acesso:</label
            ><input
              type="text"
              placeholder="UserName"
              maxlength="10"
              required
              name="user"
            /><br />
            <label for="pass">Palavra Passe:</label
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
      </section>
      <section id="tabela">
        <table>
          <tr>
            <td>Nome</td>
            <td>BI</td>
            <td colspan="2">Email</td>
            <td>Telefone</td>
            <td>Curso</td>
            <td>Genero</td> 
            <td>User</td>
            <td>Palavra Passe</td>
          </tr>
          <tr>
            <td>Calime</td>
            <td>323223sadas</td>
            <td>alime@gmail.com</td>
            <td>991296122</td>
            <td>Ciencia da Computação</td>
            <td>M</td>
            <td>Cali</td>
            <td>ol=aha</td>
            <td><a href="">Editar</a> <a href="">Excluir</a></td>
          </tr>
        </table>
      </section>
    </main>
  </body>
</html>
