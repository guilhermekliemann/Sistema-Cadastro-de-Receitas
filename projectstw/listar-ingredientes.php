<h1><b>Lista de Ingredientes Cadastrados</b></h1>

<?php
    $sql = "SELECT * FROM ingredientes";

    $res = $conn2->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered row'>";
            print "<tr>";
            print "<th >#</th>";
            print "<th >Nome do Ingrediente</th>";
            print "<th >Previsto em Kg</th>";
            print "<th >Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->ingrediente_id."</td>";
            print "<td>".$row->nome_ingrediente."</td>";
            print "<td>".$row->previsto_kg."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar-ingrediente&ingrediente_id=".$row->ingrediente_id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-ingrediente&acao=excluir&ingrediente_id=".$row->ingrediente_id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
    
?>