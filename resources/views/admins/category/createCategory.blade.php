@extends('admins.layouts.app')

@section('title')
    Thêm Danh Mục
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Danh Mục</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admins.storeCate')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" id="id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tên Danh Mục</label>
                                <input type="text" name="name" class="form-control">
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
