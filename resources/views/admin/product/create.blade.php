@extends('layouts.adminapp')
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add New Product</h1>
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
                <h3 class="card-title">Add New Product</h3>
                <a class="btn btn-danger btn-sm" style="float: right;" href="{{ route('products') }}">All Product</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form role="form" action="{{ route('store.products') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Category</label>
                                <select name="cat_id" class="form-control">
                                    <option selected="" disabled="">==Choose One==</option>
                                    @foreach($category as $row)
                                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Sub Category</label>
                                <select name="subcat_id" class="form-control" id="subcat_id">
                                    <option selected="" disabled="">==Choose One==</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Brands</label>
                                <select name="brand_id" class="form-control">
                                    <option selected="" disabled="">==Choose One==</option>
                                    @foreach($brand as $row)
                                        <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="price">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">File Input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Product Size</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="size">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Product Color</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="color">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Product Details</label>
                                <textarea placeholder="Place Some Text Here" class="textarea" id="exampleInputEmail1" name="details"
                                style="width: 100%;height: 300px;font-size: 14px;line-height: 18px;border: 1px solid #dddddd;padding: 10px"></textarea>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Extra options</h4>
                        <div class="row">
                            <div class="form-check col-md-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="stockout" value="1" checked="">
                                <label class="form-check-label" for="exampleCheck1">Stock Available</label>
                            </div>
                            <div class="form-check col-md-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hot_deal" value="1" >
                                <label class="form-check-label" for="exampleCheck1">Hot Deal</label>
                            </div>
                            <div class="form-check col-md-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="buy_one_get_one" value="1" >
                                <label class="form-check-label" for="exampleCheck1">Buy 1 Get 1</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--category added modal-->

    <script type="text/javascript">
        $(document).ready(function (){
           $('select[name="cat_id"]').on('change',function (){
               var cat_id=$(this).val();
               if (cat_id){
                   $.ajax({
                      url:"{{ url('/get/subcat/') }}/"+cat_id,
                       type:"GET",
                       dataType:"json",
                       success:function (data){
                          $('#subcat_id').empty();
                          $.each(data,function (key,value){
                             $('#subcat_id').append('<option selected="" value='+value.id+'>'+value.subcategory_name+'</option>');
                          });
                       },
                   });
               }else {
                   alert('danger');
               }
           });
        });
    </script>

@endsection
