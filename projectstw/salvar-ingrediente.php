<?php
    include_once "config.php";
    
    switch($_REQUEST["acao"]) {
        case "cadastrar":
            $nome_ingrediente = $_POST["nome_ingrediente"];
            $previsto_kg = $_POST["previsto_kg"];

            $query_ingrediente = "INSERT INTO ingredientes (nome_ingrediente, previsto_kg)
                        VALUES (:nome_ingrediente, :previsto_kg)";

            $cad_ingrediente = $conn->prepare($query_ingrediente);
            $cad_ingrediente->bindParam(':nome_ingrediente', $nome_ingrediente);
            $cad_ingrediente->bindParam(':previsto_kg', $previsto_kg);
            $cad_ingrediente->execute();

            if($cad_ingrediente == true) {
                print "<script>alert('Ingrediente cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar ingrediente!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            }

        case "editar":
            $nome_ingrediente = $_POST["nome_ingrediente"];
            $previsto_kg = $_POST["previsto_kg"];

            $query_ingrediente = "UPDATE ingredientes 
                        SET nome_ingrediente=:nome_ingrediente, previsto_kg=:previsto_kg
                        WHERE ingrediente_id=".$_REQUEST["ingrediente_id"];

            $cad_ingrediente = $conn->prepare($query_ingrediente);
            $cad_ingrediente->bindParam(':nome_ingrediente', $nome_ingrediente);
            $cad_ingrediente->bindParam(':previsto_kg', $previsto_kg);
            $cad_ingrediente->execute();

            if($cad_ingrediente == true) {
                print "<script>alert('Ingrediente editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            } else {
                print "<script>alert('Não foi possível editar ingrediente!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            }

            break;
        case "excluir":
            $sql = "DELETE FROM ingredientes_receitas WHERE ingrediente_id=".$_REQUEST["ingrediente_id"];
            $res = $conn2->query($sql);
            $sql2 = "DELETE FROM ingredientes WHERE ingrediente_id=".$_REQUEST["ingrediente_id"];
            $res = $conn2->query($sql2);

            if($res == true) {
                print "<script>alert('Ingrediente excluido com sucesso!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o ingrediente!');</script>";
                print "<script>location.href='?page=listar-ingredientes';</script>";
            }
            break;
    }
?>