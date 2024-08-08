@extends('admins.layouts.app')

@section('title')
    Sửa Danh Mục
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa Danh Mục</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                            <form action="{{route('admins.updateCate',$model->id)}}" method="POST">
                            @csrf
                            @method('PUT')
{{--                            <div class="form-group">--}}
{{--                                <label for="inputName">ID</label>--}}
{{--                                <input type="hidden" id="id" class="form-control">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="inputName">Tên Danh Mục</label>
                                <input type="text" name="name" class="form-control" value="{{$model->name}}">
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
