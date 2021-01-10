<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <title>Xastre Market</title>
    <script src="/js/app.js"></script>
</head>

<body class="">

    <!-- Início de Menu -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Navbar</a>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#ModalInsertUpdate"
            data-whatever="text_qualquer"><i class="bi bi-plus"></i>Novo</button>
    </nav>
    <!-- Fim de Menu -->

    <!-- Início Modal -->

    <div class="modal fade" id="ModalInsertUpdate" tabindex="-1" aria-labelledby="ModalInsertUpdateLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalInsertUpdateLabel">Cadastro de Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <label for="name" class="col-sm-2 col-form-label">Nome:</label>
                            <input type="text" class="form-control col-sm-10" id="name">
                        </div>
                        <fieldset>
                            <div class="form-row">
                                <legend class="col-form-label col-sm-2 pt-0">Corredor:</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorA"
                                            value="A">
                                        <label class="form-check-label" for="corredorA">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorB"
                                            value="B">
                                        <label class="form-check-label" for="corredorB">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="corredor" id="corredorC"
                                            value="C">
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
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira1"
                                            value="1">
                                        <label class="form-check-label" for="prateleira1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira2"
                                            value="2">
                                        <label class="form-check-label" for="prateleira2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira3"
                                            value="3">
                                        <label class="form-check-label" for="prateleira3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prateleira" id="prateleira4"
                                            value="4">
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
                                        <input class="form-check-input" type="radio" name="lado" id="ladoe" value="E">
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
                    <button type="submit" class="btn btn-primary float-right">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal -->

    <!-- Início de formulário de edição -->
    <div class="container">
        <!-- Fim de formulário de edição -->
        <hr>
        <!-- Início de tabela de Listagem -->
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Localização</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><i class="bi bi-pencil-fill"></i> <i class="bi bi-trash-fill"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><i class="bi bi-pencil-fill"></i> <i class="bi bi-trash-fill"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td><i class="bi bi-pencil-fill"></i> <i class="bi bi-trash-fill"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fim de tabela de Listagem -->
    </div>
</body>

</html>