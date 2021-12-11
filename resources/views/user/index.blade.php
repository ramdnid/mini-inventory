@extends('user.layouts.app')

@section('title')
    Dashboard Mini Project
@endsection

@section('content')
    
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Data Barang</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Barang</li>
        </ol>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block" style="border-bottom: solid 1px rgb(235, 235, 235); padding-bottom: 20px;">
                    <div class="button-add mt-2">
                        <a href="{{route('user.create')}}" class="btn btn-success">Tambah <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="content" style="padding-top: 20px;">
                    <table class="table table-striped">
                        <tr style="font-weight: bold;">
                            <td>No</td>
                            <td>Nama Barang</td>
                            <td>Jenis Brang</td>
                            <td>Stock</td>
                            <td>Action</td>
                        </tr>
                        <?php $i=1 ?>
                        @foreach ($items as $item)
                            <tr>
                                <td><?= $i ?></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->stock}}</td>
                                <td>
                                    <a href="{{route('user.edit', $item->id)}}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php $i++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection