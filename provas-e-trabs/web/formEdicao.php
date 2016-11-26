<?php
    //faz a conexao selecionando o campo que sera usado 
    session_start();
    //$conexao = mysqli_connect('localhost', 'root', '', 'modelos');
    $conexao = mysqli_connect("cefet-inf-2015.ddns.net:43306", "root", "apenasinf-2015", "modelos") or die ('Impossível conectar-se ao banco de dados.');
    $query = sprintf("SELECT titulo FROM cabecalho");
    $dados = mysqli_query($conexao,$query);
    //guarda num array os dados selecionados 
    $linha = mysqli_fetch_assoc($dados);
    //verifica se foi recebido algum dado e retorna o numero de linhas da tabela
    $totalLinha = mysqli_num_rows($dados);
    $aux = 0; 
 
//mostra o cabeçalho
      echo "<!DOCTYPE html>
    <html>
        <head>
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
          <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0'/>
          <title>Portal Educação</title>


           <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
          <script src='../../template/js/materialize.js'></script>
          <script src='../../template/js/init.js'></script>
          <script src='script.js'></script>
          <!-- CSS  -->
          <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
          <link href='../../styles/css/materialize.css' type='text/css' rel='stylesheet' media='screen,projection'/>
          <link href='../../styles/css/style.css' type='text/css' rel='stylesheet' media='screen,projection'/>
          <link rel='icon' href='../../imgs/logo.png' >
          <link rel='stylesheet' type='text/css' href='estilo.css'>
          <style type='text/css'>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
              }

              main {
                flex: 1 0 auto;
              }
          </style>
          <link rel='icon' href='../../imgs/logo.png' >
        </head>
        <body>
          <nav class='light-blue darken-4' role='navigation'>
            <div class='nav-wrapper container'>
                <!-- MENU SLIDE OUT STRUCTURE-->
            <ul id='slide-out' class='side-nav'>
              <br>
              <li>
                <div class='logo'>
                  <img class='background center-block responsive' src='../../imgs/logo.png'>
                </div>
              </li>
              <br>
              <li><a class='waves-effect' href='../../index.html'>Página Inicial</a></li>
              <li><a class='waves-effect' href='pagInicial.html'>Modelo de Provas/Trabalhos</a></li>
              <li><a class='waves-effect' href='../../Forum/Web/Fórum.html'>Fórum</a></li>
              <li><a class='waves-effect' href='../../Upload/index.html'>Download/Upload Aplicativos</a></li>
              <li><a class='waves-effect' href='../../Correcao/LayoutCorrecaoProvas.html'>Correção Provas e Trabalhos</a></li>
              <li><a class='waves-effect' href='../../Mural/web/index.html'>Mural</a></li>
              <li><a class='waves-effect' href='#!'>Chat</a></li>
              <li><a class='waves-effect' href='#!'>Repositório de Fotos</a></li>
              <li><a class='waves-effect' href='#!'>Banco de Questões</a></li>
              <li><a class='waves-effect' href='#!'>Calendário</a></li>
              <!--<li><div class='divider'></div></li>-->
              <!--<li><a class='subheader'>Subheader</a></li>-->
            </ul>
              <ul class='left '>
                <li>
                  <button data-activates='slide-out' class='waves-effect waves-light btn-flat button-collapse white-text light-blue darken-4'>Menu</button>
                </li>
              </ul>
              <ul class='right '>
                <!-- <li><button class='waves-effect waves-light btn-flat white-text light-blue darken-4'>Entrar</button></li> -->
                <li><a class='waves-effect waves-light btn modal-trigger white-text light-blue darken-3' href='#modal1'>Entrar</a></li>
              </ul>
            </div>
          </nav>
          
          <!-- Modal de login -->
          <div id='modal1' class='modal modal-fixed-footer'>
            <div class='modal-content'>
              <h4>Login</h4>
              <div class='row'>
                <p>Insira dados</p>
                <form>
                  <label for='username'>Nome de usuario</label>
                  <input type='text' name='username'>
                  <label for='senha'>Senha</label>
                  <input type='password' name='senha'>
                  <label for='tipoUsuario'>Tipo de usuário</label>
                  <select name='tipoUsuario'>
                    <option value=' disabled selected>Tipo de Usuario</option>
                    <option value='1'>Aluno</option>
                    <option value='2'>Professor</option>
                    <option value='3'>Coordenador</option>
                    <option value='4'>Diretor</option>
                  </select>
                  <button class='col s12 btn-flat waves-effect waves-light green white-text' type='submit' name='action'>Entrar
                      <i class='material-icons right'>input</i>
                    </button>
                </form>

              </div>
            </div>
            <div class='modal-footer'>
              <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat red white-text'>Sair</a>
            </div>
          </div>

          <!-- ESPAÇO PARA MARQUEE -->
          <div>
            
          </div>  
           </div>
        <main>
          <div class='section no-pad-bot' id='index-banner'>
            <div class='container'>
              <div class='row center'>
                <h5 class='header col s12 light'>Selecione o que Deseja Editar</h5>
              </div>
            </div>
          </div>
          <div class='container'>
          <div class='row'>
          <table>
          <tr>";

      // verifica se foi recebido algum dado e caso tenha faz um loop para mostra los
      //linha['titulo'] pega o dado do array que sera manipulado

      if($totalLinha>0){
        do{ 
         echo "
         <td>
                <div class='col s12 m7'>
                  <div class='card'>
                    <div class='card-image'>
                      <img src='cabecalho.png'>
                    
                    </div>
                    <div class='card-action'>
                        <span class='card-title'>TÍTULO: ".$linha['titulo']."</span><br> 
                      <a href='Editacampo.php'>Editar</a> &emsp;
                      <a href='Apaga.php'>Apagar</a>
                    </div>
                  </div>
                </div>
              </td>";
            
            $_SESSION['linha'] =  $linha['titulo'];
           
            $aux = $aux + 1;
            if($aux == 4){
              echo "</tr><tr>";
              $aux = 0;
            }

        } while ($linha = mysqli_fetch_assoc($dados)); //executa ate o array terminar 
}
        //mostra footer 
         echo "  </table> 
         </div>
         </div>
          </main> 
           <footer class='page-footer blue'>
            <div class='container'>
              <div class='row'>
                <div class='col l6 s12'>
                  <h5 class='white-text'>Desenvolvedores</h5>
                  <p class='grey-text text-lighten-4'>
                    Somos a turma de Informática 2A do ano de 2016 do CEFET-MG (Centro Federal de Educação Tecnológica de Minas Gerais) desenvolvendo o trabalho final multidisciplinar de Linguagem de Programação 1 e Aplicações para WEB.
                    <br><a class='white-text link' href='../../colaboradores.html'>Clique aqui</a> para saber mais
                  </p>
                </div>
                <div class='col l3 s12'>
                  <h5 class='white-text'>Sobre a Instituição</h5>
                  <p class='grey-text text-lighten-4'>
                    Centro Federal de Educação Tecnológica de Minas Gerais
                    <br>Av. Amazonas 5253 - Nova Suiça - Belo Horizonte - MG - Brasil
                    <br>Telefone: +55 (31) 3319-7000 - Fax: +55 (31) 3319-7001
                  </p>
                </div>
                <div class='col l3 s12'>
                  <h5 class='white-text'>Recursos</h5>
                  <ul>
                    <li><a class='white-text link' href='https://github.com/cefet-inf-2015/portal-educacao/' target='_blank'>Github</a></li>
                    <li><a class='white-text link' href='http://cefetmg.br/' target='_blank'>CEFET-MG</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class='footer-copyright'>
              <div class='container'>
              Made by <a class='blue-text text-lighten-3' href='http://materializecss.com'>Materialize</a>
              </div>
            </div>
          </footer>

          <!--  Scripts-->
          <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
          <script src='../../template/js/materialize.js'></script>
          <script src='../../template/js/init.js'></script>
          <script src='../../index.js'></script>

          </body>
        </html>" ; 
?>