@extends('layouts.adminapp')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Products List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Products</h3>
                <a class="btn btn-danger btn-sm" style="float: right;" href="{{ route('create.product') }}">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td><img src="{{ asset('product/'.$row->image) }}" style="height: 40px;width: 40px"></td>
                                <td>{{ $row->category_name }}</td>
                                <td>{{ $row->price }}</td>
                                <td>
                                    @if($row->stockout==1)
                                        <span class="badge badge-success">Available</span>
                                    @else
                                        <span class="badge badge-danger">Stock Out</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                    <a href="" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Category Name </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!--category added modal-->

@endsection
