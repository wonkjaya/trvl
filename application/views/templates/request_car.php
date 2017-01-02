<?php
// echo $default;
?>
<div class="col-md-12" style="margin-top:40px">
		<div class="about-head text-center">
	  <h4>
	  	Anda Ingin Menyewa Mobil Ini ? Hubungi Kami Disini.
	  </h4>
	  <span style="width: 40%"></span>
	  <img lsrc="<?=base_url('assets/images/_web/about-img.png')?>" alt="">
	  <span style="width: 45%"></span>
	</div>
	<style>
		.input-group-lg .input,.input-group-xs .input{
			border-radius: 0px;
		}
	</style>
	<div class="col-md-12" id="form-offer" 
		display="<?=(!isset($display_form))?false:true?>" style="padding-top:20px">
			<?php
			if($this->session->flashdata('success')){
				echo '
					<div class="alert alert-success">'
						.$this->session->flashdata('success').
					'</div>';
			}
			?>
			<?php
			if(isset($default)){
				echo '
					<div class="alert alert-danger">'
						.$default['error'].
					'</div>';
			}
			?>
		<form method="POST">
		  <div class="form-group col-md-6 input-group-lg">
		    <!-- <label for="email">Email</label> -->
		    <input name="email" type="email" class="form-control input" placeholder="Email" value="<?=(isset($default)?$default['email']:'')?>">
		  </div>
		  <div class="form-group col-md-6 input-group-lg">
		    <!-- <label for="notelp">No Telp</label> -->
		    <input name="telp" type="text" class="form-control input" placeholder="No Telp" value="<?=(isset($default)?$default['telp_number']:'')?>" required>
		  </div>
		  <div class="form-group col-md-6 input-group-lg">
		    <!-- <label for="nama">Nama</label> -->
		    <input name="name" type="text" class="form-control input" placeholder="Nama Anda" value="<?=(isset($default)?$default['name']:'')?>" required>
		  </div>
		  <div class="form-group col-md-6 input-group-lg">
		    <label for="waktu" style="width:25%;float:left;margin-top:10px">Waktu</label>
		    <?php
		    $dropdownData=[
		    	'1'  => '1 Hari',
		    	'2'  => '2 Hari',
		    	'3'  => '3 Hari',
		    	'4'  => '4 Hari',
		    	'5'  => '5 Hari',
		    	'6'  => '6 Hari',
		    	'7'  => '7 Hari',
		    	'8'  => '8 Hari',
		    	'9'  => '9 Hari',
		    	'other' => '10 Hari Lebih'
		    ];
		    echo form_dropdown('time',$dropdownData, (isset($default)?$default['time']:''),'class="form-control input" style="width:74%;float:left"');
		    ?>
		  </div>
		  <div class="col-md-12 show-xs hidden-md hidden-lg" style="margin-top: 50px;"></div>
		  <div class="form-group col-md-12 input-group-lg">
		    <!-- <label for="nama">Nama</label> -->
		    <input name="location" type="text" class="form-control input" placeholder="Kota..." value="<?=(isset($default)?$default['from_city']:'')?>">
		  </div>
		  <div class="checkbox">
		  	<b>Gunakan Sopir : </b>
		    <label>
		      <input name="driver" type="radio" value="0" checked> Tidak Perlu
		    </label>
		    <label>
		      <input name="driver" type="radio" value="1"> Gunakan
		    </label>
		  </div>
		  <div class="form-group col-md-12 input-group-xs">
		    <!-- <label for="nama">Nama</label> -->
		    <textarea name="description" class="form-control input" cols="30" rows="10" placeholder="Masukkan Keinginan Anda" style="height: 200px"> <?=(isset($default)?$default['description']:'')?></textarea>
		  </div>
		  <div class="form-group col-md-8">
		    <!-- <label for="nama">Nama</label> -->
		    <div class="g-recaptcha" data-sitekey="6Lfy5w8UAAAAAGi_w2i5ciFZmGJDwWM6EKfyE3iK"></div>
		  </div>
		  <div class="form-group col-md-4">
		    <!-- <label for="nama">Nama</label> -->
		    <button class="btn btn-primary pull-right" type="submit">Minta Penawaran</button>
		  </div>
		</form>
	</div>
</div>