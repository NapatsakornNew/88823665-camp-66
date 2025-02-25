@extends('layouts.default')

@section('content')
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('components.header')
        @include('components.menu')
        <main class="app-main">
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-header"><h3 class="card-title">Edit Product</h3></div>
                                <div class="card-body">
                                    <form action="{{ url('product') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category Name</label>
                                            <input type="text" name="category" class="form-control" id="category">
                                        </div>
                                        <button type="button" id="btn-add-product" class="btn btn-primary">+ Add Product</button>
                                        <div id='add-product'></div>
                                        <button class="btn btn-success mt-3" type="submit">Save</button>
                                    </form>
                                    <table class="mt-3 table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Category Name</td>
                                                <td>Product Name</td>
                                                <td>User Name</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($c as $category)
                                                @foreach($category->products as $index => $product)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->user->name }}</td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count =1;
        $('#btn-add-product').on('click', function(){
            $("#add-product").append(`
            <div class="mt-3 col-6">
                <label class="form-label product-label">${count++}. Product Name
                    <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                </label>
                    <input type="text" name="product_name[]" class="form-control">
            </div>
            `)
        })
        $(document).on('click','.btn-delete-product', function(){
            $(this).parent().parent().remove();
        })
    });
</script>
@endsection
