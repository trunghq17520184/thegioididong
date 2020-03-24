<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-9">
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">Trình soạn thảo</label>
                </div>
                @csrf
                <div class="form-group">
                    <input type="text" name="post_name" class="form-control" value="{{old('post_name',isset($post) ? $post->c_name : '')}}" placeholder="Tên bài viết">
                    @if ($errors->has('post_name'))
                    <div class="alert alert-danger">
                        {{$errors->first('post_name')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="post_content"></textarea>
                </div>
            </div>
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">SEO</label>
                </div>
                @csrf
                <div class="form-group">
                    <input type="text" id="title" name="post_title_seo" class="form-control" onkeyup="ChangeToSlug();" value="{{old('postTitle',isset($post) ? $post->post_title_seo : '')}}" placeholder="Title SEO">
                    @if ($errors->has('postName'))
                    <div class="alert alert-danger">
                        {{$errors->first('postName')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" id="slug" name="post_slug" class="form-control" value="{{old('postUrl',isset($post) ? $post->c_slug : '')}}" placeholder="URL">
                </div>
                <div class="form-group">
                    <input type="text" id="post_keyword_seo" name="post_keyword_seo" class="form-control" value="{{old('postUrl',isset($post) ? $post->c_slug : '')}}" placeholder="Từ khóa sản phẩm">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="post_description_seo" placeholder="Mô tả"></textarea>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">Đăng bài viết</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Đăng</button>
                </div>
                <div class="form-group">
                    <label for="">Trạng thái: </label>
                    <select class="custom-select col-sm-7" name="post_active">
                        <option selected value="1">Công khai</option>
                        <option value="0">Riêng tư</option>

                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="post_hot">
                    <label class="form-check-label" for="post_hot">Nổi bật</label>
                </div>
            </div>
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">Danh mục sản phẩm</label>
                </div>
                <div class="form-group">
                    <select class="custom-select" name="post_category_id">
                        <option selected value="">Không</option>
                        @if(isset($categories))
                        @foreach($categories as $cate)
                        <option value="{{$cate->id}}">{{$cate->c_name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <a href="{{route('admin.get.category')}}"><i class="fa fa-plus-circle"></i> Thêm danh mục mới</a>
            </div>
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">TAG sản phẩm</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control col" value="" placeholder="TAG">
                    <button type="submit" class="col-sm-3 btn btn-primary" style="width:10%"><i class=" fa fa-plus"></i></button>
                </div>
            </div>
            <div class="post-content">
                <div class="form-group-label">
                    <label for="">Ảnh sản phẩm</label>
                </div>
                <div class="form-group">
                    <img src="{{asset('images/no-image.png')}}" alt="" style="width:100%" id='outputImg'>
                </div>
                <div class="form-group">
                    <input id='inputImg' type="file" name="post_avatar" class="btn form-control">
                </div>
            </div>
        </div>
    </div>
</form>
@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('post_content');
    CKEDITOR.replace('post_meta_content');
</script>
@endsection