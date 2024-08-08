@extends('admins.layouts.app')

@section('title')
    Thêm Sản Phẩm
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Sản Phẩm</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admins.storePro')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh sản phẩm</label>
                                <input type="file" name="images" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Mổ Tả</label>
                                <input type="text" name="describe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Danh mục</label>
                                <input type="text" name="category_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Giá</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
@endsection
