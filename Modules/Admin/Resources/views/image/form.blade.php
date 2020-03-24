<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="product-content">
    <div class="form-group files">
      <input type="file" class="form-control" multiple="" name="image">
    </div>
    <div class="form-group" style="place-content: center">
      <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
  </div>
</form>