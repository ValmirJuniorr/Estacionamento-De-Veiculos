<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

switch (@$_GET['tipo']) {
    case 1:
        echo '<p class="msg_erro"><b>#ERRO 1#</b> Não foi possivel realizar o cadastro.</p>';
        break;
    case 2:
        echo '<p class="msg_sucesso">Cadastro efetuado com <b>sucesso</b>.</p>';
        break;
    case 3:
        echo '<p class="msg_sucesso">Atualizada com <b>sucesso</b>.</p>';
        break;
    case 4:
        echo '<p class="msg_erro"><b>#ERRO 2#</b> Não foi possivel atualizar.</p>';
        break;
    case 5:
        echo '<p class="msg_sucesso">Usuário Excluido com <b>Sucesso</b>.</p>';
        break;
    case 6:
        echo '<p class="msg_erro"><b>#ERRO 3#</b> Não foi possivel excluir usuário.</p>';
        break;
    default:
        echo 'Sem Mensagem';
}

echo '<a href="index.php" class="entrar">Voltar</a>';
