<?php
// Função para criar a árvore de Natal com piscagem
function criarArvoreDeNatal($altura, $piscagens = 5) {
    for ($p = 0; $p < $piscagens; $p++) {
        // Limpar a tela para o efeito de piscagem
        if (PHP_OS_FAMILY === 'Windows') {
            system('cls');
        } else {
            system('clear');
        }

        for ($i = 1; $i <= $altura; $i++) {
            // Espaços à esquerda para centralizar os ramos
            echo str_repeat(' ', $altura - $i);
            // Alternar cores para efeito de piscagem
            $cor = $p % 2 === 0 ? "\033[32m" : "\033[33m";
            echo str_repeat("{$cor}*\033[0m", ($i * 2) - 1);
            echo "\n";
        }

        // Tronco da árvore
        $troncoAltura = max(1, round($altura / 4));
        $troncoLargura = max(1, $altura % 2 == 0 ? $altura - 1 : $altura - 2);
        $troncoEspacos = ($altura - 1) - floor($troncoLargura / 2);

        for ($i = 0; $i < $troncoAltura; $i++) {
            echo str_repeat(' ', $troncoEspacos);
            echo str_repeat("\033[31m|\033[0m", $troncoLargura);
            echo "\n";
        }

        // Pausa entre as piscagens
        usleep(500000);
    }
}

// Função para exibir mensagem de Feliz Natal
function exibirMensagemDeNatal() {
    echo "\n";
    $mensagem = "FELIZ NATAL! 🎄🎁";
    $decoracao = str_repeat('=', strlen($mensagem));

    echo "\033[31m$decoracao\033[0m\n";
    echo "\033[36m$mensagem\033[0m\n";
    echo "\033[31m$decoracao\033[0m\n";
}

// Limpar o terminal antes de iniciar
if (PHP_OS_FAMILY === 'Windows') {
    system('cls');
} else {
    system('clear');
}

// Criar a árvore de Natal
$altura = 10; // Altura da árvore
$piscagens = 5; // Número de piscagens
criarArvoreDeNatal($altura, $piscagens);

// Exibir mensagem de Natal
exibirMensagemDeNatal();
