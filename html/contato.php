<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto Optiva OAT</title>
    <link rel="stylesheet" href="../Css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../Css/estilo.css">
</head>
<body>
    <div class="header">
        <div class="linha">
            <header>
                <div class="coluna col4">
                    <h1 class="logo">Mundo do Automobilismo Virtual</h1>
                </div>
                <div class="coluna col8">
                    <nav>
                        <ul class="menu inline sem-marcador">
                            <li><a href="../index.html">Página inicial</a></li>
                            <li><a href="simuladores.html">Simuladores</a></li>
                            <li><a href="sobre.html">sobre</a></li>
                            <li><a href="contato.php">Fale conosco</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>
    <div class="linha">
        <section>
            <div class="coluna col5 sidebar">
                <h3>Localização</h3>
                <img src="../img/mapa.jpg" />
                <ul class="sem-padding sem-marcador">
                    <li>Rua dos bobos, 0</li>
                    <li>Alguma - MG</li>
                </ul>
                <h3>Contato Direto</h3>

                <ul class="sem-padding sem-marcador">
                    <li>Fone: <strong>(00) 9 9999-9999</strong></li>
                    <li>E-mail: <strong>fulando@exemplo.com</strong></li>
                  
                </ul>
            </div>
            <div class="coluna col7 contato">
                <h2>Envie uma mensagem</h2>
                <form action="?pg=processar<?= $actionEditar ?>" method="POST">
        <div class="form-group">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">         
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </section>
    </div>
    <div class="conteudo-extra">
        <div class="linha">
            <div class="coluna col7">
                <section>
                    <h2>Outras formas de entrar em contato</h2>
                    <p>Caso não consiga usar o método acima, talvez você possa usar algum desses métodos:</p>
                    <ol>
                        <li>Sinal de fumaça.</li>
                        <li>Aviso na igreja.</li>
                        <li>Propaganda no jornal.</li>
                        <li>Mensagem na garrafa.</li>
                    </ol>
                    <p>Porém, tenho certeza que nenhum deles vai funcionar :P</p>
                </section>
            </div>
            <div class="coluna col5">
                <h3>SIte de parceiros:</h3>
                <ul class="sem-marcador sem-padding noticias">
                    <li>
                        <<img src="../img/thumb-pequena.jpg" />
                        <h4>IRB iracing Brasil</h4>
                        <p>Campeonatos de automobilismo virtual<br><a href="">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <img src="../img/thumb-pequena.jpg" />
                        <h4>Título da notícia</h4>
                        <p>Insira uma notícia incrível...<br><a href="">Leia mais &raquo;</a></p>
                    </li>
                    <li>
                        <img src="../img/thumb-pequena.jpg" />
                        <h4>Título da notícia</h4>
                        <p>Insira uma notícia incrível...<br><a href="">Leia mais &raquo;</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="linha">
                <footer>
                    <div class="coluna col12">
                        <span>&copy; 2019 OAT optativa</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
