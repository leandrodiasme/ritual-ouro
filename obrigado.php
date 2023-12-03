<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento pela Compra</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <style>
        h1 {
            background: -webkit-linear-gradient(#fe9b04, #f6b60f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body {
            margin: 0;
            font-family: "Inknut Antiqua", serif;
            line-height: 1.3;
            text-wrap: wrap;
        }
        body {
    margin: 0;
    padding: 0;
    background-image: url('img/bg-obrigado.png');
    /* Substitua 'caminho/para/sua/imagem.jpg' pelo caminho da sua imagem */
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    text-align: center;
    color: white;
}

h1 {
    font-size: 3em;
    margin-bottom: 10px;
}

p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.whatsapp-button {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    background-color: #25D366;
    /* Cor do WhatsApp */
    transition: background-color 0.3s;
}

.whatsapp-button:hover {
    background-color: #128C7E;
    /* Cor de hover do WhatsApp */
}

.whatsapp-button svg {
    width: 24px;
    height: 24px;
    vertical-align: middle;
    margin-right: 5px;
}
    </style>
</head>

<body>
    <div class="container">
        <h1>Agradecemos pela compra</h1>
        <p style="color: #b97a1a;">Obrigado por adquirir o ritual do ouro da Dara. Agradecemos sua confiança em nosso
            produto.</p>
        <a href="https://api.whatsapp.com/send?phone=SEUNUMERODOTELEFONE" class="whatsapp-button">
            <span>Acessar grupo do WhatsApp</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
                viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
        </a>
    </div>
</body>

</html>