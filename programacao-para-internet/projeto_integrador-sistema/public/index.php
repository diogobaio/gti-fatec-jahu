<?php
session_start(); // Inicia a seesão
// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

// Função para renderizar as telas com layout
function render($view, $data = []) {
    // Extrai os dados recebidos e converte em variáveis
    extract($data);
    ob_start();
    // Inclui a tela que enviamos específica
    require __DIR__ . '/../app/Views/' . $view;
    ob_end_flush(); // Envia o conteúdo do buffer para o navegador
}

// Função para renderizar as telas sem template (página completa)
function render_sem_template($view, $data = []) {
    // Extrai os dados recebidos e converte em variáveis
    extract($data);
    ob_start();
    // Inclui a tela que enviamos específica
    require __DIR__ . '/../app/Views/' . $view;
    ob_end_flush(); // Envia o conteúdo do buffer para o navegador
}

// Obtem a URL do navegador
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Navegação geral
if ($url == "/" || $url == "/index.php" || $url == "/home") { 
    render_sem_template('home.php', [
    'title' => 'Bem-Vindo!',
    'lenda' => 'Agora eu sou uma lenda do PHP!'
   ]);
} else if ($url == "/sobre"){
    render('sobre.php', ['title' => 'Sobre a Página!']);
}

// Usuarios
else if ($url == "/usuarios"){
    // Cria uma instância do Controlller e chama a função listar
    $controller = new UsuarioController();
    $controller-> listar();
}else if ($url == "/usuarios/inserir"){
    render('usuarios/cadastro_usuarios.php', ['title' => 'Cadastrar usuários']);
} else if ($url == "/usuarios/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $controller = new UsuarioController();
    $controller->salvar();
}

// Produtos 
else if ($url == "/produtos"){
    render('produtos/lista_produtos.php', ['title' => 'Listar produtos']);
}
else if ($url == "/produtos/inserir"){
    render('produtos/fomr_produtos.php', ['title' => 'Cadastrar produtos']);
}
