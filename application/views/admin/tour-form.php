<!--MENU SECTION END-->
<?php
$type = "location_upload_ganti";
?>
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h4 class="header-line">Offers Product</h4>
      </div>
    </div>
	  <form action="" method="post">
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Title...">
          </div>
          <div class="form-group">
            <textarea name="content" id="editor" placeholder="Insert Text"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          ...
        </div>
      </div>
	  </form>
  </div>
</div>
<script src="<?=base_url('assets/js/editor/tinymce.min.js')?>"></script>
<script>
  var base_url = "<?=base_url()?>";
  var upload_folder = "<?=$type?>";
  tinymce.init({ 
    selector:'#editor',
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