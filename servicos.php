<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Dev</title>

    <meta name="description" content="Time Dev é uma equipe de desenvolvimento de software focados em tecnologia e inovação.">
    <meta name="keywords" content="Time Dev, desenvolvimento de software, tecnologia, inovação, equipe de desenvolvimento">
    <meta name="author" content="Time Dev - Matheus Joaquim, Guilherme">

    <!-- Open Graph -->
    <meta property="og:title" content="Time Dev - Equipe de Desenvolvimento de Software">
    <meta property="og:description" content="Time Dev é uma equipe de desenvolvimento de software focados em tecnologia e inovação.">
    <meta property="og:image" content="https://">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="assets/favicon/favicon.svg">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- Animação Slick -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <!-- Estilos do Projeto -->
    <link rel="stylesheet" href="css/style-g.css">
    <link rel="stylesheet" href="css/style-t.css">
    <link rel="stylesheet" href="css/style-m.css">
</head>

<body>

    <!-- Menu / Topo -->
    <?php require_once('secoes_index/topo.php'); ?>
    <!-- Fim menu -->

    <!-- Serviços -->
    <section id="servicos" class="servicos">
        <div class="conteudo-servicos">

            <div class="card">
                <div class="icone-serv">
                    <img src="assets/landing_page.svg" alt="Ícone de Landing Page">
                </div>
                <h2>Landing Pages</h2>
                <p>Desenvolvo páginas estratégicas, ultrarrápidas e 100% otimizadas para transformar o seu tráfego pago ou orgânico em clientes reais. Foco total em uma experiência fluida, design moderno e copywriting estruturado para maximizar suas vendas e captação de leads.</p>
            </div>

            <div class="card">
                <div class="icone-serv">
                    <img src="assets/site_institucional.svg" alt="Ícone de Site Institucional">
                </div>
                <h2>Sites Institucionais</h2>
                <p>Construção de sites completos e sob medida que transmitem autoridade, posicionam sua marca no mercado e passam extrema credibilidade. Layouts responsivos que funcionam perfeitamente em qualquer tela, com foco em SEO para você ser encontrado no Google.</p>
            </div>

            <div class="card">
                <div class="icone-serv">
                    <img src="assets/banco_de_dados.svg" alt="Ícone de Banco de Dados">
                </div>
                <h2>Banco de Dados</h2>
                <p>Estruturação e otimização de bancos de dados para garantir alta performance, segurança da informação e respostas rápidas nas consultas. Ideal para manter a integridade dos dados, prevenir gargalos de sistema e suportar a expansão das suas aplicações.</p>
            </div>

            <div class="card">
                <div class="icone-serv">
                    <img src="assets/sistemas_web.svg" alt="Ícone de Sistemas Web">
                </div>
                <h2>Sistemas Web</h2>
                <p>Criação de plataformas digitais, dashboards e painéis administrativos personalizados para automatizar processos operacionais, gerenciar dados e escalar o seu negócio. Soluções robustas, seguras e adaptadas exatamente às necessidades da sua empresa.</p>
            </div>

        </div>

        <!-- Botão de Contato Final -->
        <div class="container-btn">
            <a href="#contato" class="btn-contato">Entrar em contato</a>
        </div>
    </section>
    <!-- Fim Serviços -->

    <!-- FAQ -->
    <?php require_once('secoes_index/faq.php'); ?>
    <!-- Fim FAQ -->

    <!-- Footer -->
    <?php require_once('secoes_index/footer_servicos.php'); ?>
    <!-- Fim Footer -->

    <!-- JS / Bibliotecas -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>

    <!-- 1. BIBLIOTECA THREE.JS (Tem que vir ANTES do js/m.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- 2. SCRIPTS DA EQUIPE -->
    <script src="js/g.js"></script>
    <script src="js/t.js"></script>
    <script src="js/m.js"></script> <!-- Seu arquivo onde colou o código 3D -->

</body>
</html>