<?php
    include_once "config.php";
    
    switch($_REQUEST["acao"]) {
        case "cadastrar":
            ob_start();
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $query_receita = "INSERT INTO receitas (nome_receita) VALUES (:nome_receita)";
            $cad_receita = $conn->prepare($query_receita);
            $cad_receita->bindParam(':nome_receita', $dados['nome_receita']);
            $cad_receita->execute();
            $receita_id = $conn->lastInsertId();

            foreach($dados['nome_ingrediente'] as $chave => $nome_ingrediente) {
                $query_ingrediente = "INSERT INTO ingredientes (nome_ingrediente, previsto_kg) VALUES (:nome_ingrediente, :previsto_kg)";
                $cad_ingrediente = $conn->prepare($query_ingrediente);
                $cad_ingrediente->bindParam(':nome_ingrediente', $nome_ingrediente);
                $cad_ingrediente->bindParam(':previsto_kg', $dados['previsto_kg'][$chave]);
                $cad_ingrediente->execute();
                $ingrediente_id = $conn->lastInsertId();

                $query_ingrediente_receita = "INSERT INTO ingredientes_receitas (ingrediente_id, receita_id) VALUES (:ingrediente_id, :receita_id)";
                $cad_ingrediente_receita = $conn->prepare($query_ingrediente_receita);
                $cad_ingrediente_receita->bindParam(':ingrediente_id', $ingrediente_id);
                $cad_ingrediente_receita->bindParam(':receita_id', $receita_id);
                $cad_ingrediente_receita->execute();
            }
            
            if($cad_ingrediente_receita == true) {
                print "<script>alert('Receita cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar receita!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "editar":
            ob_start();
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $query_receita = "UPDATE receitas SET nome_receita=:nome_receita WHERE receita_id=".$_REQUEST["receita_id"];
            $cad_receita = $conn->prepare($query_receita);
            $cad_receita->bindParam(':nome_receita', $dados['nome_receita']);
            $cad_receita->execute();

            if($cad_receita == true) {
                print "<script>alert('Receita editada com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar receita!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "excluir":
            $sql = "DELETE FROM ingredientes_receitas WHERE receita_id=".$_REQUEST["receita_id"];
            $sql2 = "DELETE FROM receitas WHERE receita_id=".$_REQUEST["receita_id"];

            $res = $conn2->query($sql);
            $res = $conn2->query($sql2);

            if($res == true) {
                print "<script>alert('Receita excluida com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir receita!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>