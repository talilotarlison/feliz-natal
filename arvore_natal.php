<?php
// Função para criar a árvore de Natal
function criarArvoreDeNatal($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Espaços à esquerda para centralizar os ramos
        echo str_repeat(' ', $altura - $i);
        // Asteriscos para formar os ramos
        echo str_repeat('*', ($i * 2) - 1);
        echo "\n";
    }

    // Tronco da árvore
    $troncoAltura = max(1, round($altura / 4));
    $troncoLargura = max(1, $altura % 2 == 0 ? $altura - 1 : $altura - 2);
    $troncoEspacos = ($altura - 1) - floor($troncoLargura / 2);

    for ($i = 0; $i < $troncoAltura; $i++) {
        echo str_repeat(' ', $troncoEspacos);
        echo str_repeat('|', $troncoLargura);
        echo "\n";
    }
}

// Função para exibir mensagem de Feliz Natal
function exibirMensagemDeNatal() {
    echo "\n";
    echo "===============================\n";
    echo "       FELIZ NATAL! 🎄🎁       \n";
    echo "===============================\n";
}

// Limpar o terminal antes de iniciar
if (PHP_OS_FAMILY === 'Windows') {
    system('cls');
} else {
    system('clear');
}

// Criar a árvore de Natal
$altura = 10; // Altura da árvore
criarArvoreDeNatal($altura);

// Exibir mensagem de Natal
exibirMensagemDeNatal();
