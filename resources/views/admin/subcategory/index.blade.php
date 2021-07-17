@extends('layouts.adminapp')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sub Categories Table</h3>
                <button class="btn btn-danger btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Category Name </th>
                        <th>Sub Category Name </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subcategory as $row)
                        <tr>
                            <td>{{ $row->category_name }}</td>
                            <td>{{ $row->subcategory_name }}</td>
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
                        <th>Sub Category Name </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        <!--category added modal-->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert new Sub category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('store.subcategory') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category Name </label>
                                <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="subcategory_name" required="">
                                @error('subcategory_name')
                                <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name </label>
                                <select name="category_id" class="form-control" required>
                                    @foreach($category as $row)
                                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

@endsection
