<h1><b>Nova Receita</b></h1>

<center>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3 col-md-4">
            <label>Digite aqui o nome da sua nova receita:</label>
            <input type="text" name="nome_receita" id="nome_receita" class="form-control" placeholder="Nome da Receita">
        </div>

        <div id="novoIngrediente">
            <div class="mb-3 col-md-4">
                <label>Adicione ou remova novos ingredientes em ordem:</label>
                <input type="text" name="nome_ingrediente[]" id="nome_ingrediente" class="form-control" placeholder="Nome do ingrediente">
                <input type="number" name="previsto_kg[]" id="previsto_kg" class="form-control mt-1" placeholder="Previsto em Kg">
                <button class="btn btn-success mb-1 mt-2" type="button" onclick="adicionarCampo()">Adicionar Ingrediente</button>
                <hr></hr>
            </div>
        </div>

        <div class="mb-3 col-md-4">
            <button type="submit" id="salvar" class="btn btn-primary">Salvar Receita</button>
        </div>
    </form>
</center>