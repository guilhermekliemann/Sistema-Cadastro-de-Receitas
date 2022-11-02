<h1><b>Lista de Receitas Cadastradas</b></h1>

<?php
    $sql = "SELECT * FROM receitas";

    $res = $conn2->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered row'>";
            print "<tr>";
            print "<th >#</th>";
            print "<th >Nome da Receita</th>";
            print "<th >Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->receita_id."</td>";
            print "<td>".$row->nome_receita."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=ingredientes&receita_id=".$row->receita_id."';\" class='btn btn-warning text-white'>Ingredientes</button>
                    <button onclick=\"location.href='?page=editar&receita_id=".$row->receita_id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&receita_id=".$row->receita_id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
    
?>