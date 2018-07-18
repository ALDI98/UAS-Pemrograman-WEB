<?php $this->load->view('user/header');?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> Daftar User </div>
<div class="panel-body">
<table class="table table-striped">
	<thead>
			<th>id_user</th>
			<th>nama_user</th>
			<th>Jenis Kelamin</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Edit</th>
			<th>Delete</th>
	</thead>
	<tbody><?php foreach ($user as $key) { ?>
		<tr><td><?php echo $key->id_user;?></td>
			<td><?php echo $key->nama_user;?></td>
			<td><?php echo $key->jenis_kelamin;?></td>
			<td><?php echo $key->email;?></td>
			<td><?php echo $key->alamat;?></td>
			<td><?php echo $key->no_telp;?></td>
			<td><a href="<?=site_url()?>/user/Update/<?php echo "$key->id_user"?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/user/delete/<?php echo "$key->id_user"?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</div>
</div>
<?php $this->load->view('user/footer');?>
