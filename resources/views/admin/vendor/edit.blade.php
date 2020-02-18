@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa Nhà Cung Cấp <a href="{{route('admin.vendor.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách Nhà Cung Cấp</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Nhà Cung Cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.vendor.update', ['id' => $vendor->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                <input value="{{ $vendor->name }}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $vendor->email }}" type="text" class="form-control" id="email" name="email" placeholder="Nhập email ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Điện Thoại</label>
                                <input value="{{ $vendor->phone }}" type="text" class="form-control" id="phone" name="phone" placeholder="Nhập Số điện thoại ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh</label>
                                <input type="file" id="new_image" name="new_image">
                                <!-- Hiển thị ảnh cũ -->
                                <br>
                                <img src="{{ asset($vendor->image) }}" width="250">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tùy chỉnh WebSite</label>
                                <input value="{{ $vendor->website }}" type="text" class="form-control" id="website" name="website" placeholder="website">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ nhà cung cấp</label>
                                <input value="{{ $vendor->address }}" type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control" id="position" name="position" placeholder="Nhập tên vị trí" value="{{ $vendor->position }}">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{ ($vendor->is_active == 1) ? 'checked' : '' }} > Trạng thái hiển thị
                                </label>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

