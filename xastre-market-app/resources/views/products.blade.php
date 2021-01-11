<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css" rel="stylesheet">
    <title>Xastre Market</title>
    <script src="/js/app.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>

<body class="">

    <!-- Início de Menu -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand"><i class="bi bi-cart4"></i> Xastre Market</a>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalProduto" data-action-produto="insert"><i class="bi bi-plus"></i>Novo</button>
    </nav>
    <!-- Fim de Menu -->

    <!-- Início Modal -->

    <div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="modalProdutoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProdutoLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="produto">
                        <input type="hidden" name="idProduto" value="" id="idProduto">
                        <div class="form-row">
                            <label for="name" class="col-sm-2 col-form-label">Nome:</label>
                            <input type="text" class="form-control col-sm-10" id="name" name="name" placeholder="Digite o nome do produto..." autocomplete="off">
                        </div>
                        <fieldset>
                            <div class="form-row">
                                <legend class="col-form-label col-sm-2 pt-0">Corredor:</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorA" value="A" checked>
                                        <label class="form-check-label" for="corredorA">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorB" value="B">
                                        <label class="form-check-label" for="corredorB">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorC" value="C">
                                        <label class="form-check-label" for="corredorC">C</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-row">
                                <legend class="col-form-label col-sm-2 pt-0">Prateleira:</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira1" value="1" checked>
                                        <label class="form-check-label" for="prateleira1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira2" value="2">
                                        <label class="form-check-label" for="prateleira2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira3" value="3">
                                        <label class="form-check-label" for="prateleira3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira4" value="4">
                                        <label class="form-check-label" for="prateleira4">4</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-row">
                                <legend class="col-form-label col-sm-2 pt-0">Lado:</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lado" id="ladoe" value="E" checked>
                                        <label class="form-check-label" for="ladoe">Esquerda</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lado" id="ladod" value="D">
                                        <label class="form-check-label" for="ladod">Direita</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary float-right" form="produto" value="Salvar" data-action-produto="insert">
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal -->

    <div class="container my-4">
        <!-- Início de tabela de Listagem -->
        <div class="row">
            <div class="col" id='list-products'>
                @include('tbody')
            </div>
        </div>
        <!-- Fim de tabela de Listagem -->
    </div>
    <!-- Modal Excluir Produto-->
    <div class="modal fade" id="modalExcluirProduto" tabindex="-1" aria-labelledby="modalExcluirProdutoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExcluirProdutoLabel">Deseja realmente excluir esse produto?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li id='pro-name' class="list-group-item"></li>
                        <li id='pro-loc' class="list-group-item"></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button id="btn-excluir-product" type="button" class="btn btn-danger" data-product-id="">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Vizualizar Produto -->
    <div class="modal fade" id="modalVisualizarProduto" tabindex="-1" aria-labelledby="modalVisualizarProdutoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVisualizarProdutoLabel">Detalhes do Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li id='pro-name' class="list-group-item"></li>
                        <li id='pro-loc' class="list-group-item"></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts dos modais -->
    <script>
        $(document).ready(function() {
            let table = $('#list-products');
            $('#produto').submit(function() {
                let dados = $(this).serialize();
                let idProduto;
                let action = $('.modal-footer input[data-action-produto]').data('action-produto');
                let uri;
                let verb;

                if (action === 'update') {
                    idProduto = $(this).find('input#idProduto').val();
                    uri = `/products/${idProduto}`;
                    verb = 'PUT'
                } else if (action === 'insert') {
                    uri = '/products';
                    verb = 'POST'
                }

                $.ajax({
                    type: verb,
                    url: uri,
                    data: dados,
                    success: function(data) {
                        $('#modalProduto').modal('hide');
                    }
                }).done(function(response) {
                    table.html(response);
                });


                return false;
            });
            // Executar antes do show modal excluir produto
            $('#modalExcluirProduto').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);
                let idProduct = button.data('id-product');
                let nameProduct = button.data('name-product');
                let locationProduct = button.data('location-product');
                let modal = $(this);
                modal.find('.modal-body #pro-name').html(`<strong>Produto: </strong>${nameProduct}`);
                modal.find('.modal-body #pro-loc').html(`<strong>Localização: </strong>${locationProduct}`);
                modal.find('.modal-footer button[data-product-id]').data('product-id', idProduct)
                // console.log(modal.find('.modal-footer button[data-product-id]').data('product-id'));
            });
            // Executar antes do show modal visualizar produto
            $('#modalVisualizarProduto').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);
                let idProduct = button.data('id-product');
                let nameProduct = button.data('name-product');
                let locationProduct = button.data('location-product');
                let modal = $(this);
                modal.find('.modal-body #pro-name').html(`<strong>Produto: </strong>${nameProduct}`);
                modal.find('.modal-body #pro-loc').html(`<strong>Localização: </strong>${locationProduct}`);
                // console.log(modal.find('.modal-footer button[data-product-id]').data('product-id'));
            });

            // Executar antes do show modal produto
            $('#modalProduto').on('show.bs.modal', function(event) {
                let button = $(event.relatedTarget);
                let idProduct = button.data('id-product') ?? "";
                let nameProduct = button.data('name-product') ?? "";
                let locationProduct = button.data('location-product') ?? "";
                let action = button.data('action-produto');
                let corredor = locationProduct.charAt(0) ?? "";
                let prateleira = locationProduct.charAt(1) ?? "";
                let lado = locationProduct.charAt(2) ?? "";
                let modal = $(this);
                let titulo = action === 'insert' ? 'Cadastro de Produto': 'Alteração de Produto';
                modal.find('.modal-header .modal-title').text(titulo);
                modal.find('.modal-footer input[data-action-produto]').data('action-produto', action);
                modal.find('.modal-body #produto #name').val(nameProduct);
                modal.find('.modal-body #produto #idProduto').val(idProduct);
                modal.find('.modal-body #produto input[name="corredor"]').each(function(index, element) {
                    if ($(element).val() === corredor)
                        $(element).prop('checked', true);
                });

                modal.find('.modal-body #produto input[name="prateleira"]').each(function(index, element) {
                    if ($(element).val() === prateleira)
                        $(element).prop('checked', true);
                });
                modal.find('.modal-body #produto input[name="lado"]').each(function(index, element) {
                    if ($(element).val() === lado)
                        $(element).prop('checked', true);
                });
                //modal.find('.modal-footer button[data-product-id]').data('product-id', idProduct)
                // console.log(modal.find('.modal-footer button[data-product-id]').data('product-id'));
            });

            // evento para excluir produto
            $('#modalExcluirProduto #btn-excluir-product').on('click', function(event) {
                let table = $('#list-products');
                let idProduct = $(this).data('product-id');
                $.ajax({
                    type: "DELETE",
                    url: `/products/${idProduct}`,
                    success: function(data) {
                        $('#modalExcluirProduto').modal('hide');
                    }
                }).done(function(response) {
                    console.log(response);
                    table.html(response);
                });
                return false;
            });
            
        });
        $('.pagination').addClass('justify-content-center');
    </script>

</body>

</html>