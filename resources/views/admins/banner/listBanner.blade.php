@extends('admins.layouts.app')

@section('title')
    Danh Sách Banner
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách Banner</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Thao Tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banner as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img src="{{Storage::url($item->image)}}" alt="" width="300" height="150">
                                        </td>
                                        <td class="d-flex">
                                            <button class="btn btn-primary"><a class="text text-light" href="{{route('admins.editBanner', $item->id)}}">Sửa</a></button>

                                            <form action="{{route('admins.destroyBanner', $item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-success" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Thao Tác</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
