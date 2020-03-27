<div class="box-body">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="pro-code" class="col-5 col-form-label">Tên sản phẩm</label>
                            <input type="text" name="pro_name" class="form-control " value="{{old('pro_name',isset($product) ? $product->pro_name : '')}}">
                            @if ($errors->has('pro_name'))
                            <div class="alert alert-danger">
                                {{$errors->first('pro_name')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pro-code" class="col-5 col-form-label">Mã sản phẩm</label>
                            <input class="form-control" type="text" value="{{isset($product)?$product->pro_code:''}}" id="pro-code" name="pro_code">
                        </div>
                        <div class="form-group">
                            <label for="">Nội dung sản phẩm</label>
                            <textarea class="form-control" name="pro_content" style="height: 100px;">{{isset($product)?$product->pro_content:''}}</textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="pro-price" class="col-5 col-form-label">Giá sản phẩm</label>
                                <input class="form-control" type="number" value="{{isset($product)?$product->pro_price:0}}" id="pro-price" name="pro_price">
                                @if ($errors->has('pro_price'))
                                <div class="alert alert-danger">
                                    {{$errors->first('pro_price')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="pro-price-discount" class="col-5 col-form-label">Giá khuyến mãi</label>
                                <input class="form-control" type="number" value="{{isset($product)?$product->pro_price_discount:0}}" id="pro-price-discount" name="pro_price_discount">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-5 col-form-label">Kho</label>
                                <input class="form-control" type="number" value="{{isset($product)?$product->pro_stock:0}}" name="pro_stock">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả ngắn sản phẩm</label>
                            <textarea class="form-control" name="pro_meta_content">{{isset($product)?$product->pro_meta_content:''}} </textarea>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">SEO</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Title SEO</label>
                            <input type="text" id="title" name="pro_title_seo" class="form-control" onkeyup="ChangeToSlug();" value="{{old('productTitle',isset($product) ? $product->pro_title_seo : '')}}">
                            @if ($errors->has('productName'))
                            <div class="alert alert-danger">
                                {{$errors->first('productName')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Đường đẫn</label>
                            <input type="text" id="slug" name="pro_slug" class="form-control" value="{{old('productUrl',isset($product) ? $product->pro_slug : '')}}">
                            @if ($errors->has('pro_slug'))
                            <div class="alert alert-danger">
                                {{$errors->first('pro_slug')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Từ khóa</label>
                            <input type="text" id="pro_keyword_seo" name="pro_keyword_seo" class="form-control" value="{{old('productUrl',isset($product) ? $product->pro_keyword_seo : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả SEO</label>
                            <textarea class="form-control" name="pro_description_seo">{{isset($product) ? $product->pro_description_seo : ''}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Đăng sản phẩm</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            @if(isset($product))
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                            @else
                            <button type="submit" class="btn btn-primary">Đăng</button>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pro_active">Trạng thái: </label>
                            <select class="custom-select" name="pro_active">
                                <option value="1" {{isset($product)?($product->pro_active ==1? "selected" :""):"selected"}}>Công khai</option>
                                <option value="0" {{isset($product)?($product->pro_active ==0? "selected" :""):""}}>Riêng tư</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="pro_hot">
                            <label class="form-check-label" for="pro_hot" {{isset($product)&&($product->pro_hot == 1) ?"checked" :''}}>Nổi bật</label>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh mục</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="product-content">
                            <div class="form-group-label">
                                <label for="">Danh mục sản phẩm</label>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="pro_category_id">
                                    <option value="">Không</option>
                                    @if(isset($categories))
                                    @foreach($categories as $cate)
                                    <option value="{{$cate->id}}" {{old('pro_category_id',(isset($product->pro_category_id) ? $product->pro_category_id : '') == $cate->id ? "selected = 'selected'" : "")}}>{{$cate->c_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <a href="{{route('admin.get.category')}}"><i class="fa fa-plus-circle"></i> Thêm danh mục mới</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Ảnh sản phẩm</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group-label">
                            <label for="">Ảnh sản phẩm</label>
                        </div>
                        <div class="form-group">
                            <img src="{{isset($product->pro_avatar) ? pare_url_file($product->pro_avatar): asset('images/no-image.png')}}" alt="" style="width:100%" id='outputImg'>
                        </div>
                        <div class="form-group">
                            <input id='inputImg' type="file" name="pro_avatar" class="btn form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('pro_content', {
        height: '600px',
    });
</script>
@endsection