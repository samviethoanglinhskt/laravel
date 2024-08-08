@extends('admins.layouts.app')

@section('title')
    Danh Sách Sản Phẩm
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách Sản Phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Images</th>
                                    <th>Describe</th>
                                    <th>Category_id</th>
                                    <th>Price</th>
                                    <th>Thao Tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pro as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <img src="{{Storage::url($item->images)}}" alt="" width="100" height="100">
                                        </td>
                                        <td>{{$item->describe}}</td>
                                        <td>{{$item->category_id}}</td>
                                        <td>{{$item->price}}</td>
                                        <td class="d-flex">
                                            <button class="btn btn-primary"><a class="text text-light" href="{{route('admins.editPro', $item->id)}}">Sửa</a></button>

                                            <form action="{{route('admins.destroyPro', $item->id)}}" method="POST">
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
                                    <th>Name</th>
                                    <th>Images</th>
                                    <th>Describe</th>
                                    <th>Category_id</th>
                                    <th>Price</th>
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
