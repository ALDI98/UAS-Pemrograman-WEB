<?php $this->load->view('admin/header');?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> Daftar Admin </div>
<div class="panel-body">
<table class="table table-striped">
	<thead>
			<th>id_admin</th>
			<th>nama_admin</th>
			<th>Username</th>
			<th>Password</th>
			<th>Edit</th>
			<th>Delete</th>
	</thead>
	<tbody><?php foreach ($admin as $key) { ?>
		<tr><td><?php echo $key->id_admin;?></td>
			<td><?php echo $key->nama_admin;?></td>
			<td><?php echo $key->username;?></td>
			<td><?php echo $key->password;?></td>
			<td><a href="<?=site_url()?>/admin/Update/<?php echo "$key->id_admin"?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/admin/delete/<?php echo "$key->id_admin"?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</div>
</div>
<?php $this->load->view('admin/footer');?>
