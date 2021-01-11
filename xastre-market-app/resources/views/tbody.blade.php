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
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td class="w-50">{{ $product->name }}</td>
            <td class="w-25">{{ $product->location }}</td>
            <td>
                <button type="button" class="btn btn-secondary" 
                data-id-product="{{ $product->id }}" data-name-product="{{ $product->name }}" 
                data-location-product="{{ $product->location }}" data-action-produto="update" 
                data-toggle="modal" data-target="#modalVisualizarProduto">
                    <i class="bi bi-eye"></i>
                </button>
                <button type="button" class="btn btn-secondary" 
                data-id-product="{{ $product->id }}" data-name-product="{{ $product->name }}" 
                data-location-product="{{ $product->location }}" data-action-produto="update" 
                data-toggle="modal" data-target="#modalProduto">
                    <i class="bi bi-pencil-fill"></i>
                </button>

                <button type="button" class="btn btn-danger" data-toggle="modal" 
                data-target="#modalExcluirProduto" data-id-product="{{ $product->id }}" 
                data-name-product="{{ $product->name }}" data-location-product="{{ $product->location }}">
                    <i class="bi bi-trash-fill"></i>
                </button>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}