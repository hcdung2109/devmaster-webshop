@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Sửa Sản phẩm <a href="{{route('admin.product.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách Sản phẩm</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.product.update', ['id' => $product->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                    <img src="{{asset($product->image)}}" width="200">
 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gía gốc</label>
                                <input value="{{ $product->price }}" type="text" class="form-control" id="price" name="price" placeholder="Nhập giá gốc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gía sale</label>
                                <input value="{{ $product->sale }}" type="text" class="form-control" id="sale" name="sale" placeholder="Nhập giá sale">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input value="{{ $product->position }}" type="text" class="form-control" id="position"
                                       name="position" placeholder="Nhập tên vị trí">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input {{ ($product->is_active) ? 'checked':'' }} type="checkbox" value="1"
                                           name="is_active"> Trạng thái
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input {{ ($product->is_hot) ? 'checked':'' }} type="checkbox" value="1"
                                           name="is_hot"> Sản phẩm hot
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lượng view</label>
                                <input value="{{ $product->views }}" type="text" class="form-control" id="views" name="views" placeholder="Nhập views">
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">-- Chọn --</option>
                                        <option {{ ($category_name->id == $product->category_id ? 'selected':'') }} value="{{ $product->category_id }}">{{ $product -> category_id }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sơ lược sản phẩm</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" placeholder="Enter ...">{{$product->summary}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" placeholder="Enter ...">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
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

@section('my_javascript')
    <script type="text/javascript">
        $(function () {

            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
