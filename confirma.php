<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png"/> <!-- Colocar ícone na página -->
    <title>calcupom</title> <!-- Título do navegador -->
</head>
<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-image: url('img/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column; /* empilha os elementos verticalmente */
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            flex: 1;
            display: flex;
            flex-direction: column; /* empilha os elementos verticalmente */
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 1rem; /* espaço entre os elementos */
        }

        #title {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 3.2rem;
            color: #f1f1f1; 
            text-transform: uppercase;
        }

        #texto {
            font-size: 1.2rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #f1f1f1;
            text-align: justify;
            padding-right: 2.5em;
            padding-left: 2.5em;
            padding-bottom: 1em;
        }

        #btnHome {
            color: #f1f1f1;
            background-color: transparent;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 1.5rem;
            padding: .3em 2em;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.5);
            border: 3px solid;
        }

        #btnHome:hover {
            background-color: #585067;
            transition: 1s;
            border-color: #585067;
        }

        #btnHome:not(:hover){
            background-color: transparent;
            transition: 1s;
        }

    </style>
    <main class="container">
        <?php
            session_start();
            $nome = $_SESSION['nome'];
        ?>
        <h1 id="title">OBRIGADO PELO FEEDBACK, <?php echo $nome; ?>!</h1>
        <p id="texto"> Feedbacks são fundamentais para melhorar continuamente a experiência do usuário. Eles ajudam a identificar falhas, ajustar funcionalidades e entender o que realmente importa para quem utiliza o site, além de transmitir confiança para novos visitantes.</p>
        <a href="index.html"><button id="btnHome">Voltar</button></a>
        
    </main>

</body>
</html>