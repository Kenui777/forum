<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum NBA</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header, nav, main, footer {
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        /* Estilos específicos do fórum */
        .forum {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .forum h1 {
            display: flex;
            align-items: center;
        }

        .forum h1 img {
            margin-right: 5px;
            max-height: 10px; /* Tamanho da imagem ajustado */
        }

        .forum h1 span {
            font-size: 1.5em;
            color: #007bff;
        }

        .post {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .post h3 {
            margin-top: 0;
            color: #333;
        }

        footer {
            text-align: center;
            color: #fff;
            background-color: #1a477b;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px;
        }
        
        main {
            margin: 0 20px; /* espaço lateral ajustado */
        }
    </style>
</head>
<body>
    <header style="background-color: #1a477b; color: #fff;">
        <h1>
            <img src="https://a.espncdn.com/combiner/i?img=%2Fi%2Fespn%2Fmisc_logos%2F500%2Fnba.png" alt="Logo da NBA">
            <span>Fórum NBA</span>
        </h1>
    </header>

    <nav style="background-color: #f0f0f0;">
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Notícias</a></li>
            <li><a href="#">Equipes</a></li>
            <li><a href="#">Jogadores</a></li>
            <li><a href="#">Discussões</a></li>
        </ul>
    </nav>

    <main>
        <section class="forum">
            <h2>Discussões Recentes</h2>
            <div class="post">
                <h3>Título da Discussão</h3>
                <p>Autor: Usuário123</p>
                <p>Última Atualização: 21 de Maio, 2024</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nibh nec libero iaculis posuere.</p>
            </div>
            <div class="post">
                <h3>Outro Título</h3>
                <p>Autor: NBAfanatic</p>
                <p>Última Atualização: 20 de Maio, 2024</p>
                <p>Nullam molestie est nec nisi rhoncus, ac condimentum sapien fermentum.</p>
            </div>
        </section>
    </main>


    @yield('content')

    <footer>
        <p>&copy; 2024 Fórum NBA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>