<?php
    $sql = "SELECT * FROM receitas r
            JOIN ingredientes_receitas ir ON ir.receita_id = r.receita_id 
            JOIN ingredientes i ON i.ingrediente_id = ir.ingrediente_id
            WHERE r.receita_id = ".$_REQUEST["receita_id"];

    $res = $conn2->query($sql);

    $qtd = $res->num_rows;

    $flag = true;
    $cont = 1;

    if($qtd > 0) {
        while($row = $res->fetch_object()) {
            if($flag == true) {
                print "<table class='table table-hover table-striped table-bordered row'>";

                print "<tr>";
                    print "<th>Código: $row->receita_id </th>";
                    print "<th colspan='3'>Nome da Receita: $row->nome_receita </th>";
                print "</tr>";
                
                print "<tr>";
                    print "<th colspan='4'>Ingredientes</th>";
                print "</tr>";
                
                print "<tr>";
                    print "<th>Ordem</th>";
                    print "<th>#</th>";
                    print "<th>Descrição</th>";
                    print "<th>Previsto em Kg</th>";
                print "</tr>";
            }
                print "<tr>";
                    print "<td>$cont</td>";
                    print "<td>$row->ingrediente_id</td>";
                    print "<td>$row->nome_ingrediente</td>";
                    print "<td>$row->previsto_kg</td>";
                print "</tr>";
            
                $flag = false;
                $cont++;
        }
                print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

    print "<div class='mb-3 col-md-4'>
            <button onclick=location.href='?page=listar' class='btn btn-primary'>Voltar</button>
            </div>";

?>