@extends('layouts.app')

@section('content')
    <h3>Registrar Compra</h3>
    <br>

    <!-- Opciones para Compra -->
    <div class="mb-3">
        <button id="btn-existing" class="btn btn-primary">Comprar Bicicleta Existente</button>
        <button id="btn-new" class="btn btn-success">Comprar Bicicleta Nueva</button>
    </div>

    <!-- Formulario para Bicicleta Existente -->
    <div id="form-existing" style="display:none;">
        <form action="{{ route('purchase.store') }}" method="POST">
            @csrf
            <input type="hidden" name="existing_byke" value="1">
            
            <div class="form-group">
                <label for="byke_id_existing">Seleccionar Bicicleta</label>
                <select name="byke_id" id="byke_id_existing" class="form-control">
                    <option value="">-- Selecciona una bicicleta --</option>
                    @foreach ($bykes as $byke)
                        <option value="{{ $byke->id }}">{{ $byke->nombre }} (Stock: {{ $byke->stock }})</option>
                    @endforeach
                </select>
                @error('byke_id') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="cantidad_existing">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad_existing" class="form-control" min="1" required>
                @error('cantidad') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Registrar Compra</button>
        </form>
    </div>

    <!-- Formulario para Bicicleta Nueva -->
    <div id="form-new" style="display:none;">
        <form action="{{ route('purchase.store') }}" method="POST">
            @csrf
            <input type="hidden" name="existing_byke" value="0">

            <div class="form-group">
                <label for="nombre_new">Nombre</label>
                <input type="text" name="nombre" id="nombre_new" class="form-control" required>
                @error('nombre') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion_new">Descripción</label>
                <textarea name="descripcion" id="descripcion_new" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="precio_compra_new">Precio de Compra</label>
                <input type="number" name="precio_compra" id="precio_compra_new" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="precio_venta_new">Precio de Venta</label>
                <input type="number" name="precio_venta" id="precio_venta_new" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="cantidad_new">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad_new" class="form-control" min="1" required>
                @error('cantidad') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="supplier_id_new">Proveedor</label>
                <select name="supplier_id" id="supplier_id_new" class="form-control">
                    <option value="">-- Selecciona un proveedor --</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->nombre }}</option>
                    @endforeach
                </select>
                @error('supplier_id') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id_new">Categoría</label>
                <select name="category_id" id="category_id_new" class="form-control">
                    <option value="">-- Selecciona una categoría --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                    @endforeach
                </select>
                @error('category_id') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-3">Registrar Compra</button>
        </form>
    </div>

    <script>
        // Mostrar y ocultar formularios al hacer clic en los botones
        document.getElementById('btn-existing').addEventListener('click', function () {
            document.getElementById('form-existing').style.display = 'block';
            document.getElementById('form-new').style.display = 'none';
        });
    
        document.getElementById('btn-new').addEventListener('click', function () {
            document.getElementById('form-new').style.display = 'block';
            document.getElementById('form-existing').style.display = 'none';
        });
    </script>
@endsection
