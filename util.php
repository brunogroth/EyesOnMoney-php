<?php

function validar_msg($msg){
    switch($msg){
        case 'invalid':
            $retorno = '<h3 class="alert alert-danger">Usuário/senha inválidos. Tente novamente.</h3>';
        break;
        
        case 'blank':
            $retorno = '<h3 class="alert alert-warning">Informe seu usuário/senha para efetuar login.</h3>';
        break;
        case 'cad_blank':
            $retorno = '<h3 class="alert alert-danger">Digite todas as informações do investimento para realizar o cadastro.</h3>';
        break;
        case 'success':
            $retorno = '<h3 class="alert alert-success">Investimento cadastrado com sucesso!</h3>';
        break;
        case 'cad_error':
            $retorno = '<h3 class="alert alert-danger">Erro ao cadastrar investimento. Atualize a página e tente novamente.</h3>';
        break;    
        case 'edt_blank':
            $retorno = '<h3 class="alert alert-danger">Digite todas as informações para alterar o investimento.</h3>';
        break;    
        case 'editado':
            $retorno = '<h3 class="alert alert-success">Investimento alterado com sucesso!</h3>';
        break;    
        case 'erroeditar':
            $retorno = '<h3 class="alert alert-danger">Erro ao editar investimento. Atualize a página e tente novamente.</h3>';
        break;
        case 'invalid_id':
            $retorno = '<h3 class="alert alert-warning">ID de investimento inválido! Atualize a página e tente novamente.</h3>';
        break;    
        case 'inv_excluido':
            $retorno = '<h3 class="alert alert-success">Investimento Excluído com sucesso!</h3>';
        break;    
        case 'erro_excluir':
            $retorno = '<h3 class="alert alert-danger">Erro ao excluir investimento. Atualize a página e tente novamente.</h3>';
        break; 
        default:
            $retorno = '';
        break; 
        }

    return $retorno;
       
    }

?>