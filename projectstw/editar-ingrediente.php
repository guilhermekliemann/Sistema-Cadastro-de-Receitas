<h1><b>Editar Ingrediente</b></h1>

<?php
    $sql = "SELECT * FROM ingredientes WHERE ingrediente_id=".$_REQUEST['ingrediente_id'];

    $res = $conn2->query($sql);
    $row = $res->fetch_object();
?>

<center>
    <form action="?page=salvar-ingrediente" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="ingrediente_id" value="<?php print $row->ingrediente_id; ?>">

        <div class="mb-3 col-md-4">
            <input type="text" name="nome_ingrediente" id="nome_ingrediente" class="form-control" value="<?php print $row->nome_ingrediente; ?>">
            <input type="number" name="previsto_kg" id="previsto_kg" class="form-control mt-1" value="<?php print $row->previsto_kg; ?>">
            <hr></hr>
        </div>

        <div class="mb-3 col-md-4">
            <button type="submit" id="salvar" class="btn btn-primary">Salvar Ingrediente</button>
        </div>
    </form>
</center>

<?php
    print "<div class='mb-3 col-md-4'>
        <button onclick=location.href='?page=listar-ingredientes' class='btn btn-primary'>Voltar</button>
        </div>";
?>