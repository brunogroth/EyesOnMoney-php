<?php
include_once 'conn.php';

// função para criar investimento
function criar_investimento($produto, $valor, $rentab, $banco, $data_aquis, $data_venc){
    
    $conn = connection();

    $sql = "INSERT INTO invest_rf (produto_rf, valor_rf, rentab_rf, banco_emissor_rf, data_aquis_rf, data_venc_rf) VALUES ('$produto', '$valor', '$rentab', '$banco', '$data_aquis', '$data_venc')";
    
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
    return true;
    }

    return false;
}

//função para BUSCAR investimentos registrados (não exibir ainda)
function buscar_investimentos_rf(){

    $conn = connection();

    $sql = "SELECT * FROM invest_rf";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        return $result;
    }
    
    return null;
}

//função para EXIBIR investimentos

function exibir_investimentos_rf(){

    $result = buscar_investimentos_rf();


    $formatado = '<table border class="table table-hover">';
    //montar a primeira linha da tabela
    $formatado .= '<tr>';
    $formatado .= '<th>ID</th>';  // coluna th = table header
    $formatado .= '<th>Produto Investido</th>';
    $formatado .= '<th>Valor Aportado</th>';
    $formatado .= '<th>Rentabilidade do Investimento</th>';
    $formatado .= '<th>Banco Emissor</th>';
    $formatado .= '<th>Data de Aquisição</th>';
    $formatado .= '<th>Data de Vencimento</th>';
    $formatado .= '<th>Editar</th>';
    $formatado .= '<th>Excluir</th>';
    $formatado .= "</tr>";

    
    if($result == null){
        return '<h3>Nenhum investimento foi cadastrado ainda.</h3>';
    } else{
        
    while($investimento = mysqli_fetch_assoc($result)){
        $investimento['valor_rf'] = number_format($investimento['valor_rf'], 2, ',', '.');

        
        $formatado .= '<tr>'; // cria uma nova linha
        $formatado .=  "<td>" . $investimento['id_invest_rf'] . "</td>" ; //td = table data
        $formatado .= "<td>" . $investimento['produto_rf'] . "</td>";
        $formatado .= "<td>" .'R$' . $investimento['valor_rf'] . "</td>";
        $formatado .= "<td>" . $investimento['rentab_rf'] . "% do CDI </td>";
        $formatado .= "<td>" . $investimento['banco_emissor_rf'] . "</td>";
        $formatado .= "<td>" . $investimento['data_aquis_rf'] . "</td>";
        $formatado .= "<td>" . $investimento['data_venc_rf'] . "</td>";
         $formatado .= "<td>" . link_editar_investimento($investimento['id_invest_rf']) . "</td>";
         $formatado .= "<td>" . link_excluir_investimento($investimento['id_invest_rf']) . "</td>";
    }
    $formatado .= "</tr>";
    $formatado .= "</table>";

    return $formatado;
    }

}

    //função para montar o link de exclusão de investimento
    function link_excluir_investimento($id_invest_rf){
        $link = '<a class="btn btn-danger" href="excluir.php?id_invest_rf=' . $id_invest_rf . '" onclick="return confirm(\' Tem certeza que deseja excluir esse investimento?\')">Excluir</a>';
    
        return $link;
    }

    //função para EXCLUIR INVESTIMENTO
    function excluir_investimento($id_invest_rf){
        $conn = connection();

        $sql = "DELETE FROM invest_rf WHERE id_invest_rf = $id_invest_rf ";

        $result = mysqli_query($conn, $sql);
    
        if(mysqli_affected_rows($conn)>0){
        return true;
    }

    return false;

    }


    //função para montar o link de edição de investimento

    function link_editar_investimento($id_invest_rf){
        $link = '<a class="btn btn-warning" href="editar_investimento.php?id_invest_rf=' . $id_invest_rf .'">Editar</a>';
    
        return $link;
    }

    //função para busca de um investimento POR ID (para poder editar depois)
    function buscar_investimento_rf($id_invest_rf){

        $conn = connection();

        $sql = "SELECT * FROM invest_rf WHERE id_invest_rf = $id_invest_rf";

        $result = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0 ){
            return $result;
        }else{
            return null;
        }
    }

    //função para atualizar/editar investimento
    function editar_investimento($id_invest_rf, $produto, $valor, $rentab, $banco, $data_aquis, $data_venc){

        $conn = connection();

        $sql = "UPDATE invest_rf SET produto_rf = '$produto', valor_rf = '$valor    ', rentab_rf = '$rentab', banco_emissor_rf = '$banco', data_aquis_rf = '$data_aquis', data_venc_rf = '$data_venc' WHERE id_invest_rf = $id_invest_rf";
    
        $result = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn)>0){
            return true;
        }
            return false;
     
    }
/*
    // Tentativa de Função para calcular a rentabilidade do investimento
    function rentab_invest(){
        
        //busca investimento do ID e salva no array associativo $investimento
        $resultado = buscar_investimento_rf(6);
                $investimento = mysqli_fetch_assoc($resultado);


        if($investimento){
                //armazena tudo em string pra trabalhar
                $valor = $investimento['valor_rf'];
                $porc_cdi = $investimento['rentab_rf'];
                $data_aquis = $investimento['data_aquis_rf'];
                $data_venc = $investimento['data_venc_rf'];
                
        // Calcula a diferença em segundos entre as datas
        $diferenca = strtotime($data_venc) - strtotime($data_aquis);
        
        //Calcula a diferença em dias
        $diferenca_d = floor($diferenca / (60 * 60 * 24));
        
        $cdi = 0.02125; // taxa de juros CDI /DIA (base: 31/11/21 7,65 a.a.)
        $i = (($porc_cdi / 100) * $cdi); // validado ate aqui
        //M = C (1+i)^t
        
        $a = 1 + $i;
        $b = pow($a, $diferenca_d);
        $result  = $valor * $b; 
        
        
        return $result;
        //return number_format((float)$result, 2, ',', '.');

        desisto o calculo nao fecha
        }
    }    */

        
        
    
    ?>