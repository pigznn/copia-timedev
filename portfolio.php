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

    <section class="fundo3">
        <section id="portfolio" class="site">
            <h1>Projetos Desenvolvidos</h1>
            <p class="portfolio-subtitulo">Alguns dos sites que criamos para nossos clientes.</p>

            <div class="portfolio-carrossel">
                <div class="portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-imagem">
                            <img src="assets/site_thiago.png" alt="Site ClimaGL">
                            <span class="portfolio-overlay">Ver prévia</span>
                        </div>
                        <div class="portfolio-info">
                            <span class="portfolio-tag">Site institucional</span>
                            <h2>ClimaGL</h2>
                            <p>Site para empresa de climatização que leva o visitante direto ao orçamento pelo WhatsApp.</p>
                            <span class="portfolio-botao">Ver projeto <span aria-hidden="true">&rarr;</span></span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-imagem">
                            <img src="assets/site_guilherme.png" alt="Site VivaBem Spa">
                            <span class="portfolio-overlay">Ver prévia</span>
                        </div>
                        <div class="portfolio-info">
                            <span class="portfolio-tag">Site institucional</span>
                            <h2>VivaBem Spa</h2>
                            <p>Site leve e acolhedor para spa de massoterapia, com serviços, eventos e galeria.</p>
                            <span class="portfolio-botao">Ver projeto <span aria-hidden="true">&rarr;</span></span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-imagem">
                            <img src="assets/site_matheus.png" alt="Site Stella Castejon">
                            <span class="portfolio-overlay">Ver prévia</span>
                        </div>
                        <div class="portfolio-info">
                            <span class="portfolio-tag">Site institucional</span>
                            <h2>Stella Castejon</h2>
                            <p>Vitrine elegante para maquiadora, com o portfólio em destaque e contato fácil.</p>
                            <span class="portfolio-botao">Ver projeto <span aria-hidden="true">&rarr;</span></span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-imagem">
                            <img src="assets/site_galennos.png" alt="Site Galennos Laboratório">
                            <span class="portfolio-overlay">Ver prévia</span>
                        </div>
                        <div class="portfolio-info">
                            <span class="portfolio-tag">Landing page</span>
                            <h2>Galennos Laboratório</h2>
                            <p>Landing page que fala a língua do dentista e foca em conquistar novos parceiros.</p>
                            <span class="portfolio-botao">Ver projeto <span aria-hidden="true">&rarr;</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chamada pro contato -->
            <div class="portfolio-cta">
                <h3>Quer um site assim para o seu negócio?</h3>
                <a href="contato.php" class="portfolio-cta-botao">Fale com a gente</a>
            </div>
        </section>
    </section>

    <!-- FAQ -->
    <?php require_once('secoes_index/faq.php'); ?>
    <!-- Fim FAQ -->

    <!-- Footer -->
    <?php require_once('secoes_index/footer_servicos.php'); ?>
    <!-- Fim Footer -->

    <!-- JS / Bibliotecas -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>

    <!-- 2. SCRIPTS DA EQUIPE -->
    <script src="js/g.js"></script>
    <script src="js/t.js"></script>
    <script src="js/m.js"></script> <!-- Seu arquivo onde colou o código 3D -->

</body>
</html>