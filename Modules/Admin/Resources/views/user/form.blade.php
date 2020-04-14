<div class="input-cate">
    <div class="box box-warning">
        <div class="box-header with-border">
            @if(isset($category))
            <h3 class="box-title">Sửa chuyên mục</h3>
            @else
            <h3 class="box-title">Thêm chuyên mục</h3>
            @endif
            <i class="pull-right fa fa-angle-left" id="hidden"></i>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tên chuyên mục</label>
                            <input type="text" class="form-control @error('c_name') is-invalid @enderror" onkeyup="ChangeToSlug();" value="{{isset($category->c_name)?$category->c_name:''}}" name="c_name" placeholder="Nhập tên chuyên mục ...">
                            @error('c_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                        <label>Đường dẫn </label>
                            <input type="text" id="slug" name="categoryUrl" class="form-control" value="{{old('categoryUrl',isset($category) ? $category->c_slug : '')}}" placeholder="URL">
                        </div>
                        <div class="form-group">
                        <label>Danh mục cha </label>
                            <select class="custom-select" name="categoryParent">
                                <option selected value="">Không</option>
                                @if(isset($categories))
                                @foreach($categories as $cate)
                                <option value="">{{$cate->c_name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                        <label>Mô tả </label>
                            <textarea class="form-control" name="pro-meta-content" placeholder="Mô tả"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="c_home">
                            <label class="form-check-label" for="c_home" {{isset($category)&&($category->c_home == 1) ?"checked" :''}}>Hiển thị trang chủ</label>
                        </div>
                        <div class="form-group">
                            @if (isset($category))
                            <button type="submit" class="btn btn-success">Lưu</button>
                            @else
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group-label">
                            <label for="">Banner danh mục</label>
                        </div>
                        <div class="form-group">
                            <input id='inputImg' type="file" name="c_banner" class="btn form-control">
                        </div>
                        <div class="form-group-label">
                            <label for="">Banner trang chủ</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id='inputImg1' type="file" name="c_home_banner1" class="btn form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id='inputImg2' type="file" name="c_home_banner2" class="btn form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- /.box-body -->
</div>