<!--MENU SECTION END-->
<?php
$type = "location_upload_ganti";
?>
<style>
  .custom-border{
    border-radius: 0px;
  }
  .img{
    margin-top:10px;
  }
  .uploadImage{
    position: absolute;
    top: 10px;
    opacity: 0;
    height: 90px;
    width: 100%;
    cursor: pointer;
  }
</style>
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h3 class="header-line">Tour Offers</h3>
      </div>
    </div>
      <div class="row">
	     <form id="form" action="" method="post">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" required name="title" class="form-control custom-border" placeholder="Title...">
          </div>
          <div class="form-group">
            <?php
            echo form_dropdown('category', $categories, '', 'class="form-control custom-border"');
            ?>
          </div>
          <div class="form-group">
            <textarea name="content" id="editor" placeholder="Insert Text" height="500px"></textarea>
          </div>
        </div>
	     </form>
        <div class="col-md-4">
            <button class="btn btn-warning btn-lg col-md-5 custom-border" type="button">Draft</button>
            <button class="btn btn-primary btn-lg col-md-5 custom-border" type="submit" style="margin-left:10px" onclick="submit_form();">Publish</button>
          <hr>
            <?=(isset($default))?'<span class="label label-danger">'.$default['error'].'</span>':''?>
          <br>
            <h3 class="col-md-12">Thumbnail Image</h3>
          <hr>
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
              <p>400x300 (*.jpg)</p>
            </div>
          </div>
            <h3 class="col-md-12">Gallery</h3>
          <hr>
          <div class="row">
            <div class="col-md-4 col-xs-6" style="overflow: hidden;">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 col-xs-6">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
            </div>
            <div class="col-md-4 hidden-xs">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script src="<?=base_url('assets/js/editor/tinymce.min.js')?>"></script>
<script>
  function submit_form(){
    document.getElementById("form").submit();
  }
  var base_url = "<?=base_url()?>";
  var upload_folder = "<?=$type?>";
  tinymce.init({ 
    selector:'#editor',
    height : "400",
    file_picker_callback: function(callback, value, meta) {
      // Provide file and text for the link dialog
      if (meta.filetype == 'file') {
        callback('mypage.html', {text: 'My text'});
      }

      // Provide image and alt text for the image dialog
      if (meta.filetype == 'image') {
        callback('myimage.jpg', {alt: 'My alt text'});
      }

      // Provide alternative source and posted for the media dialog
      if (meta.filetype == 'media') {
        callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
      }
    },
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    images_upload_url: base_url + '/admin/uploadImage',
    images_upload_base_path: '/assets/images/uploads/' + upload_folder,
    automatic_uploads: false
  });
</script>
<!-- CONTENT-WRAPPER SECTION END-->