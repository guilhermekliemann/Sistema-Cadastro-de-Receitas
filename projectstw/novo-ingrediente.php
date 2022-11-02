<h1><b>Novo Ingrediente</b></h1>

<center>
    <form action="?page=salvar-ingrediente" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3 col-md-4">
            <label>Digite aqui o nome do ingrediente:</label>
            <input type="text" name="nome_ingrediente" id="nome_ingrediente" class="form-control" placeholder="Nome do ingrediente">
        </div>

        <div class="mb-3 col-md-4">
            <label>Previsto em kg:</label>
            <input type="number" name="previsto_kg" id="previsto_kg" class="form-control mt-1" placeholder="Previsto em Kg">
            <hr></hr>
        </div>

        <div class="mb-3 col-md-4">
            <button type="submit" id="salvar-ingrediente" class="btn btn-primary">Salvar Ingrediente</button>
        </div>
    </form>
</center>