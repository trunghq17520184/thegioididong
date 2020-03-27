<div class="box">
    <div class="box-header">
        @if(isset($slider))
        <h3 class="box-title">Sửa Slider</h3>
        <a href="{{route('admin.get.slider')}}" class="btn btn-info">Thêm mới</a>
        @else
        <h3 class="box-title">Thêm hình ảnh Slider</h3>
        @endif
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group-label">
                <label for="">Hình ảnh</label>
            </div>
            <div class="form-group">
                <img src="{{isset($slider->name) ? pare_url_file($slider->name):''}}" alt="" style="width:100%" id='outputImg'>
            </div>
            <div class="form-group">
                <input id='inputImg' type="file" name="slider_name" class="btn form-control">
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="product-content">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea class="form-control" name="slider_description">{{isset($slider)?$slider->description:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">URL</label>
                            <input type="text" name="url" class="form-control" value="{{isset($slider) ? $slider->url : ''}}" placeholder="URL">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-content">
                        <div class="form-group">
                            <label for="">Loại hiển thị</label>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" name="slider_type">
                                <option selected value="1">Slider động</option>
                                <option value="0">Slider tĩnh</option>
                                <option value="2">Cả hai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            @if(isset($slider))
                            <button type="submit" class="btn btn-success">Sửa</button>
                            @else
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>