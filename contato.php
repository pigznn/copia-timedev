<?php
$status = '';
$formData = ['nome' => '', 'empresa' => '', 'email' => '', 'telefone' => '', 'servico' => '', 'mensagem' => ''];
$servicos = ['Landing Page', 'Site Institucional', 'Banco de Dados', 'Sistemas Web', 'Outro'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($formData as $campo => $valor) {
        $formData[$campo] = trim((string)($_POST[$campo] ?? ''));
    }

    if (trim((string)($_POST['website'] ?? '')) !== '') {
        $status = 'Não foi possível enviar sua mensagem. Tente novamente.';
    } elseif (
        $formData['nome'] === '' ||
        !filter_var($formData['email'], FILTER_VALIDATE_EMAIL) ||
        $formData['telefone'] === '' || !in_array($formData['servico'], $servicos, true) ||
        $formData['mensagem'] === ''
    ) {
        $status = 'Confira os campos e preencha todas as informações corretamente.';
    } else {
        $nome = preg_replace('/[\r\n]+/', ' ', $formData['nome']);
        $empresa = preg_replace('/[\r\n]+/', ' ', $formData['empresa']);
        $telefone = preg_replace('/[\r\n]+/', ' ', $formData['telefone']);
        $assunto = 'Novo contato pelo site Time Dev';
        $empresaLinha = $empresa !== '' ? $empresa : 'Não informada';
        $corpo = "Nome: {$nome}\nEmpresa: {$empresaLinha}\nE-mail: {$formData['email']}\nTelefone: {$telefone}\nServiço: {$formData['servico']}\n\nMensagem:\n{$formData['mensagem']}";
        $cabecalhos = [
            'From: Time Dev <contatotimedev@gmail.com>',
            'Reply-To: ' . $formData['email'],
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: PHP/' . phpversion(),
        ];

        if (!function_exists('mail')) {
            $emailEnviado = false;
            error_log('Falha ao enviar formulário de contato: a função mail() do PHP está desabilitada.');
        } else {
            $emailEnviado = @mail(
                'contatotimedev@gmail.com',
                $assunto,
                $corpo,
                implode("\r\n", $cabecalhos)
            );

            if (!$emailEnviado) {
                error_log('Falha ao enviar formulário de contato: verifique a configuração SMTP/sendmail do PHP.');
            }
        }

        if ($emailEnviado) {
            $status = 'Mensagem enviada! Em breve entraremos em contato.';
            foreach ($formData as $campo => $valor) {
                $formData[$campo] = '';
            }
        } else {
            $status = 'Não foi possível enviar agora. Escreva para contatotimedev@gmail.com.';
        }
    }
}

function contatoEsc($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Entre em contato com a Time Dev e conte para nós sobre seu próximo projeto.">
    <title>Contato | Time Dev</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style-g.css">
    <link rel="stylesheet" href="css/style-t.css">
    <link rel="stylesheet" href="css/style-m.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="pagina-contato">
    <main>
        <section class="contato-intro" aria-labelledby="titulo-contato">
            <?php require_once('secoes_index/topo.php'); ?>
            <div class="contato-chamada">
                <h1 id="titulo-contato">Contato</h1>
                <p>Vamos nos conectar? Preencha o formulário abaixo ou envie uma mensagem.</p>
            </div>
        </section>

        <section class="contato-area" aria-label="Formulário de contato">
            <form class="contato-formulario" method="post" action="contato.php" novalidate>
                <?php if ($status !== ''): ?>
                    <p class="contato-status" role="status"><?= contatoEsc($status) ?></p>
                <?php endif; ?>
                <div class="campo-isca" aria-hidden="true">
                    <label for="website">Website</label>
                    <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                </div>
                <div class="contato-campos">
                    <label class="campo-contato" for="nome">
                        <span>seu nome</span>
                        <input id="nome" name="nome" type="text" placeholder="Nome:" value="<?= contatoEsc($formData['nome']) ?>" autocomplete="name" required>
                    </label>
                    <label class="campo-contato" for="empresa">
                        <span>Nome da sua empresa</span>
                        <input id="empresa" name="empresa" type="text" placeholder="Nome da empresa (opcional):" value="<?= contatoEsc($formData['empresa']) ?>" autocomplete="organization">
                    </label>
                    <label class="campo-contato" for="email">
                        <span>Seu Email</span>
                        <input id="email" name="email" type="email" placeholder="Email:" value="<?= contatoEsc($formData['email']) ?>" autocomplete="email" required>
                    </label>
                    <label class="campo-contato" for="telefone">
                        <span>Seu Telefone</span>
                        <input id="telefone" name="telefone" type="tel" placeholder="Telefone:" value="<?= contatoEsc($formData['telefone']) ?>" autocomplete="tel" required>
                    </label>
                    <label class="campo-contato campo-largo" for="servico">
                        <span>Selecione o tipo de serviço</span>
                        <select id="servico" name="servico" required>
                            <option value="" disabled <?= $formData['servico'] === '' ? 'selected' : '' ?>>Serviço:</option>
                            <?php foreach ($servicos as $servico): ?>
                                <option value="<?= contatoEsc($servico) ?>" <?= $formData['servico'] === $servico ? 'selected' : '' ?>><?= contatoEsc($servico) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label class="campo-contato campo-largo campo-mensagem" for="mensagem">
                        <span>Insira a sua mensagem neste campo</span>
                        <textarea id="mensagem" name="mensagem" required><?= contatoEsc($formData['mensagem']) ?></textarea>
                    </label>
                </div>
                <button class="contato-enviar" type="submit">Enviar mensagem</button>
            </form>
        </section>
    </main>
    <?php require_once('secoes_index/footer.php'); ?>
    <script src="js/t.js"></script>
</body>
</html>
