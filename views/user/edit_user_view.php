<?php $this->load->view('user/header');?>

<div class="container">
<div class="row">

<?php echo form_open('user/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data User</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_user">ID User :</label>
		<div class="col-sm-10">
		<input type="text" name="id_user" class="form-control" readonly id="id_user" value="<?php echo $user[0]->id_user?>" placeholder="id_user"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_user">Username :</label>
		<div class="col-sm-10">
		<input type="text" name="username" class="form-control" id="username" value="<?php echo $user[0]->username?>" placeholder="username"><br>
		</div>
	</div>

	<div class="form-group">

 	<select name="level">  
 	<option value="">Silahkan Pilih</option>  
 	<option value="admin">Admin</option>  
 	<option value="user">User</option>  
 	</select>   
    </div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">Password :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $user[0]->password?>" type="password" placeholder="password" name="password" placeholder="password"><br>
		</div>
	</div>
	
	
	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('user/footer');?>
