@extends('admin::layouts.master')
@section('content')
<div class="page-header">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('admin.index')}}">Trang chủ</a>
    </li>
    <li class="breadcrumb-item active">
      <a href="{{route('admin.get.image')}}">Quản lý hình ảnh</a>
    </li>
  </ol>
</div>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Quản lý hình ảnh
  </div>
  <div class="card-body">
    <div class="col">
      <div>
        @include("admin::image.form")
      </div>
      <div class="col product-content">
        <div class="form-group">
          <label for="">Hình ảnh</label>
        </div>

        @if(isset($images))
        <div class="card">
          <div class="image-grid-container">
            @foreach($images as $image)
            <div class="column">
              <img src="{{pare_url_file($image->img_name)}}" alt="" id="myImg">
            </div>
            @endforeach
          </div>
        </div>
        @else
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Không có hình ảnh</h4>
        </div>
        @endif

      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

@endsection

@section('script')
<script>
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
@endsection