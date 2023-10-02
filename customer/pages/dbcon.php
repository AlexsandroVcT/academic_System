<?php
$envFile = __DIR__ . '/.env'; // Caminho para o arquivo .env

if (file_exists($envFile)) {
    $env = parse_ini_file($envFile);
    
    // Defina as variáveis de ambiente com base no conteúdo do arquivo .env
    if (!empty($env['DB_HOST'])) {
        putenv('DB_HOST=' . $env['DB_HOST']);
    }
    if (!empty($env['DB_USER'])) {
        putenv('DB_USER=' . $env['DB_USER']);
    }
    if (!empty($env['DB_PASSWORD'])) {
        putenv('DB_PASSWORD=' . $env['DB_PASSWORD']);
    }
    if (!empty($env['DB_DATABASE'])) {
        putenv('DB_DATABASE=' . $env['DB_DATABASE']);
    }
} else {
    die("Arquivo .env não encontrado. Certifique-se de criar o arquivo .env com suas configurações.");
}

// Agora você pode acessar as variáveis de ambiente em seu código
$con = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_DATABASE'));

// Verifique a conexão
if (mysqli_connect_errno()) {
    echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
}

?><!-- Visit codeastro.com for more projects -->
