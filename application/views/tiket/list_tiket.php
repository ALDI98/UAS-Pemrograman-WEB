<?php $this->load->view('tiket/header');?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> Daftar Tiket </div>
<div class="panel-body">
<table class="table table-striped">
	<thead>
			<th>id_tiket</th>
			<th>nama_event</th>
			<th>kategori</th>
			<th>qty</th>
			<th>harga</th>
			<th>availability</th>
			<th>Edit</th>
			<th>Delete</th>
	</thead>
	<tbody><?php foreach ($tiket as $key) { ?>
		<tr><td><?php echo $key->id_tiket;?></td>
			<td><?php echo $key->nama_event;?></td>
			<td><?php echo $key->kategori;?></td>
			<td><?php echo $key->qty;?></td>
			<td><?php echo $key->harga;?></td>
			<td><?php echo $key->availability;?></td>
			<td><a href="<?=site_url()?>/tiket/Update/<?php echo "$key->id_tiket"?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/tiket/delete/<?php echo "$key->id_tiket"?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</div>
</div>
<?php $this->load->view('tiket/footer');?>
