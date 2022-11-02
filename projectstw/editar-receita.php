<h1><b>Editar Receita</b></h1>

<?php
    $sql = "SELECT * FROM receitas r
    JOIN ingredientes_receitas ir ON ir.receita_id = r.receita_id 
    JOIN ingredientes i ON i.ingrediente_id = ir.ingrediente_id
    WHERE r.receita_id = ".$_REQUEST["receita_id"];

    $res = $conn2->query($sql);
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
?>

<center>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="receita_id" value="<?php print $row->receita_id; ?>">

        <div class="mb-3 col-md-4">
            <label>Alterar nome da receita:</label>
            <input type="text" name="nome_receita" value="<?php print $row->nome_receita; ?>" class="form-control">
        </div> 

        <div class="mb-3 col-md-4">
            <button type="submit" id="salvar" class="btn btn-primary">Salvar Receita</button>
        </div>

    </form>
</center>

<?php
    print "<div class='mb-3 col-md-4'>
        <button onclick=location.href='?page=listar' class='btn btn-primary'>Voltar</button>
        </div>";
?>
