<?php
// Função para criar a árvore de Natal com piscagem
function criarArvoreDeNatal($altura, $piscagens = 5) {
    for ($p = 0; $p < $piscagens; $p++) {
        // Limpar a tela para o efeito de piscagem
        limparTela();

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
        // Exibir mensagem de Natal
        exibirMensagemDeNatal();
        // Pausa entre as piscagens
        usleep(1500000);
      
    }
}

// Função para limpar a tela manualmente
function limparTela() {
    // Imprime várias linhas em branco para simular a limpeza
    echo str_repeat("\n", 100);
}

// Função para exibir mensagem de Feliz Natal
function exibirMensagemDeNatal() {
    echo "\n";
    $mensagem = "     FELIZ NATAL! 🎄🎁";
    $decoracao = str_repeat('=', strlen($mensagem));

    echo "\033[31m$decoracao\033[0m\n";
    echo "\033[36m$mensagem\033[0m\n";
    echo "\033[31m$decoracao\033[0m\n";
}

// Limpar o terminal antes de iniciar
limparTela();

// Criar a árvore de Natal
$altura = 14; // Altura da árvore
$piscagens = 7; // Número de piscagens
criarArvoreDeNatal($altura, $piscagens);


