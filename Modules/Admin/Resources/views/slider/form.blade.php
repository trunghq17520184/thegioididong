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
                    <label for="">Nội dung hiển thị</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="slider_description">{{isset($slider)?$slider->description:''}}</textarea>
                </div>
                <div class="form-group">
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
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</form>
@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('slider_description', {
        height: '200px',
    });
</script>
@endsection