@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">Product Operations</h5>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home/Product/operations</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <label>Request Overview</label>
                            </div>
                            <div class="col text-right">
                                <operation-create></operation-create>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <input type="text" class="form-control-sm">
                            <product-request></product-request>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
               <product-approved></product-approved>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    {{--<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>--}}
    {{--<script src="{{asset('js/jqtabledit.js')}}"></script>--}}
@stop