@extends('admins.layouts.app')

@section('title')
    Sửa Sản Phẩm
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa Sản Phẩm</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admins.updatePro',$model->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputName">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" value="{{$model->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh sản phẩm</label>
                                <input type="file" name="images" class="form-control">
                                <img src="{{Storage::url($model->images)}}" alt="" width="50" height="50">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Mổ Tả</label>
                                <input type="text" name="describe" class="form-control" value="{{$model->describe}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Danh mục</label>
                                <input type="text" name="category_id" class="form-control" value="{{$model->category_id}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Giá</label>
                                <input type="text" name="price" class="form-control" value="{{$model->price}}">
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
@endsection
