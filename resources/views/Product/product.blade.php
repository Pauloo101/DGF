@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home/Product</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <label>All Products</label>
                            </div>
                            <div class="col text-right">
                                <product-create></product-create>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table id="example5" class="table table-bordered table-hover dataTable example1">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Sales Rep</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->sale_rep}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="/productop" type="button" class="btn btn-success btn-sm shadow">
                            Request Product <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>





@stop
@section('javascript')

    {{--<script src="{{asset('js/jquery.dataTables.js')}}"></script>--}}
    {{--<script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>--}}
    {{--<script src="{{ asset('js/jquery.tabledit.min.js') }}"></script>--}}
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/jqtabledit.js')}}"></script>
    <script>
        $(function () {
            $(".example1").DataTable();


        });
    </script>

@endsection