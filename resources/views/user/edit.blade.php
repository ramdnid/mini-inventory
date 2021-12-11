@extends('user.layouts.app')

@section('title')
    Dashboard Mini Project
@endsection

@section('content')
    
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Edit Data Barang</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Edit Barang</li>
        </ol>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="content">
                    <form action="{{route('user.update', $item->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" value="{{$item->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="type">Jenis Barang</label>
                            <input type="text" class="form-control" id="type" value="{{$item->type}}" name="type">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" value="{{$item->stock}}" name="stock">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection