<!--MENU SECTION END-->
<?php
$typeupload = "location_upload_ganti";
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
  .submit{
    margin-left:10px;
  }
</style>
<?php
$dft = (isset($default['post'])?$default['post']:null);
?>
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h3 class="header-line"><?=($type == 'new')?'Add New':'Edit'?> Post</h3>
      </div>
    </div>
    <?php
      echo ($this->session->flashdata('success_message'))?'<div class="alert alert-success">'
      .$this->session->flashdata('success_message').
      '</div>':'';
    ?>
      <div class="row">
	     <form id="form" action="" method="post">
        <div class="col-md-8">
          <div class="form-group">
            <input type="text" required name="title" class="form-control custom-border" placeholder="Title..." autocomplete="off" value="<?=($dft)?$dft->post_title:'';?>">
          </div>
          <div class="form-group">
            <?php
            echo form_dropdown('category', $categories, (($dft)?$dft->category:''), 'class="form-control custom-border"');
            ?>
          </div>
          <div class="form-group">
            <textarea name="content" id="editor" placeholder="Insert Text" height="500px">
              <?=(($dft)?$dft->post:'');?>
            </textarea>
          </div>
        </div>
       </form>
          <?php
            $display = '';
            if($type == 'new'){
              $display = 'display:none';
            }
          ?>
        <div class="col-md-4">
            <button name="draft" type="button" class="btn btn-warning btn-lg col-md-5 custom-border" onclick="submit_form('draft');">Draft</button>
            <button name="submit" type="buttom" class="btn btn-primary btn-lg col-md-5 custom-border submit" onclick="submit_form('submit');" style="<?=$display?>">Publish</button>
          <hr>
            <?=(isset($default['error']))?'<span class="label label-danger">'.$default['error'].'</span>':''?>
          <br>
          <div class="row" style="<?=$display?>">
              <h3 class="col-md-12">Thumbnail Image</h3>
            <hr>
            <div class="col-md-12 text-center">
              <img src="<?=base_url('assets/images/uploads/no-image.png')?>" alt="..." class="img">
              <input type="file" class="uploadImage" accept="image/jpeg"/>
              <p>400x300 (*.jpg)</p>
            </div>
          </div>
          <div class="row" style="<?=$display?>">
              <h3 class="col-md-12">Gallery</h3>
            <hr>
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
  function submit_form(type){
      var form = document.getElementById('form');
    if(type === 'draft'){
      form.setAttribute("action","?draft");
    }else{
      form.setAttribute("action","?submit");
    }
    document.getElementById("form").submit({});
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
<script src="bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
<script src="bower_components/blueimp-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>

<script src="bower_components/cloudinary-jquery-file-upload/cloudinary-jquery-file-upload.js" type="text/javascript"></script>
<!-- CONTENT-WRAPPER SECTION END-->