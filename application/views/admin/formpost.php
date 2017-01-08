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
    margin:0px 10px;
  }
</style>
<?php
$dft = (isset($default['post'])?$default['post']:null);
$post_id = ($dft)?$dft->post_id:null;
$no_image = base_url('assets/images/uploads/no-image.png');
// print_r($dft);
$imgs['thumbnail'] = isset($dft->image_value)?str_replace('image/upload/','image/upload/w_100,h_100,c_pad/',$dft->image_value):'';
$images_data = ['img1','img2','img3','img4','img5','img6','img7','img8'];
// set default 
for ($a=0; $a <= count($images_data)-1; $a++) { 
  $imgs[$images_data[$a]] = '<img src="'.$no_image.'" data-empty="true" class="img thumbnail '. $images_data[$a] .'">';
}
if(isset($default['img'])){
  $i= 0;
  foreach ($default['img'] as $img) {
    $image = str_replace('image/upload/','image/upload/w_100,h_100,c_pad/',$img->image_value);
    $imgs[$images_data[$i]] = '<img src="'.$image.'" data-empty="false" class="img thumbnail '. $images_data[$i] .'">';
    $i++;
  }  
}
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
          <?php
          $form_data = [
            "timestamp"=>time(),
            "tags"=>"kuirent",
            "api_key"=>"384971664985673",
            "upload_preset" => "sample_489655fe76",
          ];
          $form_data=json_encode($form_data);
          ?>
          <?//=str_replace('"',"&quot;",$form_data)?>
          
        </div>
       </form>
          <?php
            $display = '';
            if($type == 'new' or !$post_id){
              $display = 'display:none';
            }
          ?>
        <div class="col-md-4">
            <button name="draft" type="button" class="btn btn-warning btn-lg col-md-4 custom-border" onclick="submit_form('draft');">Draft</button>
            <button name="submit" type="buttom" class="btn btn-default btn-lg col-md-3 custom-border submit" onclick="submit_form('submit');" style="<?=$display?>">Publish</button>
            <a href="<?=site_url('tour_destination/'.$dft->post_slug)?>" class="btn btn-primary btn-lg col-md-4 custom-border">Preview</a>
          <hr>
            <?=(isset($default['error']))?'<span class="label label-danger">'.$default['error'].'</span>':''?>
          <br>
          <div class="row" style="<?=$display?>">
            <div class="col-md-12 text-center">
              <div class="form-group">
                <br>
                <?php 
                $type_drop = [
                  'thumbnail1'=>'Thumbnail',
                  'img1'=>'Image 1',
                  'img2'=>'Image 2',
                  'img3'=>'Image 3',
                  'img4'=>'Image 4',
                  'img5'=>'Image 5',
                  'img6'=>'Image 6',
                  'img7'=>'Image 7',
                  'img8'=>'Image 8',
                  'img9'=>'Image 9',
                ];
                echo form_dropdown('type',$type_drop,'','class="form-control selector" onchange="setNewAttribute()"')?>
                <br>
                <input class="cloudinary-fileupload form-control" data-cloudinary-field="test" 
                data-form-data="<?=str_replace('"',"&quot;",$form_data)?>" 
                data-url="https://api.cloudinary.com/v1_1/ddk1ecibv/auto/upload" 
                multiple="1" name="file" type="file">
              </div>
            </div>
              <h3 class="col-md-12">Thumbnail Image 400x300 (*.jpg)</h3>
            <hr>
            <div class="col-md-12 text-center">
            <center class="thumbnail1-preview">
              <img src="<?=isset($imgs['thumbnail'])?$imgs['thumbnail']:$no_image?>" alt="..." class="img thumbnail thumbnail1">
            <center>
            </div>
            <div class="preview">
              
            </div>
          </div>
          <div class="row" style="<?=$display?>">
              <h3 class="col-md-12">Gallery</h3>
            <hr>
            <div class="col-md-4 col-xs-6 img1-preview" style="overflow: hidden;">
              <?=$imgs['img1']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img2-preview">
              <?=$imgs['img2']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img3-preview">
              <?=$imgs['img3']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img4-preview">
              <?=$imgs['img4']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img5-preview">
              <?=$imgs['img5']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img6-preview">
              <?=$imgs['img6']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img7-preview">
              <?=$imgs['img7']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 col-xs-6 img8-preview">
              <?=$imgs['img8']?> 
              <!-- <input type="file" class="uploadImage" accept="image/jpeg"/> -->
            </div>
            <div class="col-md-4 hidden-xs">
              <!-- <img src="<?=isset($imgs['thumbnail'])?$imgs['thumbnail']:$no_image?>" alt="..." class="img"> -->
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<script src="<?=base_url('assets/js/editor/tinymce.min.js')?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.12.5/js/vendor/jquery.ui.widget.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.12.5/js/jquery.iframe-transport.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.12.5/js/jquery.fileupload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cloudinary-jquery-file-upload/2.1.2/cloudinary-jquery-file-upload.js"></script>

<script>
  var activeselector="thumbnail1";

  function resetcss(){
    $(".thumbnail1").css("background-color","transparent");
    for (var i = 8; i >= 1; i--) {
      $(".img"+i).css("background-color","transparent");
    }
  }

  function setNewAttribute(){
    resetcss();
    var selector = $(".selector");
    activeselector = selector.val();
    if(activeselector === "thumbnail1"){
      $(".thumbnail1").css("background-color","#000");
    }else{
      $("."+activeselector).css("background-color","#000");
    }
  }

</script>

<script type="text/javascript">
  $.cloudinary.config({"api_key":"384971664985673","cloud_name":"ddk1ecibv"});
</script>

<script>
  function prettydump(obj) {
    ret = "";
    $.each(obj, function(key, value) {
      ret += "<tr><td>" + key + "</td><td>" + value + "</td></tr>";
    });
    return ret;
  }
  
  $(function() {
    $('.cloudinary-fileupload')
    .cloudinary_fileupload({
      dropZone: '#direct_upload',
      start: function () {
        console.log('Starting direct upload...');
      },
      progress: function () {
        console.log('Uploading...');
      }
    })
    .on('cloudinarydone', function (e, data) {
        $("."+activeselector+"-preview").html(
          $.cloudinary.image(data.result.public_id, 
          { format: data.result.format, version: data.result.version, 
            crop: 'pad', width: 100, height: 100 ,class:'img thumbnail '+activeselector})
        );
        sendData(data.result);
    });
  });

  function sendData(data){
    var imageKey = "";
    if(activeselector === "thumbnail1"){
      imageKey = "thumbnail";
    }else{
      imageKey = "gallery";
    }
    data.imageKey = imageKey;
    data.post_id = "<?=$post_id?>";
    $.ajax({
      url: "<?=site_url('api/notif_upload')?>",
      type: 'post',
      data: data,
      success: function( data, textStatus, jQxhr ){
          console.info(data);
      },
      error: function( jqXhr, textStatus, errorThrown ){
          console.log( errorThrown );
      }
    }).done(function(r){
      console.log(r);
    })
  }
</script>

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