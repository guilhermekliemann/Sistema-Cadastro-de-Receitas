var controleCampo = 1;

function adicionarCampo() {
    controleCampo++;

    document.getElementById('novoIngrediente').insertAdjacentHTML('beforeend', '<div class="mb-3 col-md-4 pt-2" id="campo' + controleCampo + '"><input type="text" name="nome_ingrediente[]" id="nome_ingrediente" class="form-control" placeholder="Nome do ingrediente"><input type="number" name="previsto_kg[]" id="previsto_kg" class="form-control mt-1" placeholder="Previsto em Kg"><button type="button" class="btn btn-danger mt-2" id="' + controleCampo +'" onclick="removerCampo('+ controleCampo +')">Remover Ingrediente</button><hr></hr></div>');
}

function removerCampo(idCampo) {
    document.getElementById('campo' + idCampo).remove();
}