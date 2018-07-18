<?php $this->load->view('pembayaran/header');?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> Daftar Pembayaran </div>
<div class="panel-body">
<table class="table table-striped">
	<thead>
			<th>id_bayar</th>
			<th>id user</th>
			<th>id event</th>
			<th>id tiket</th>
			<th>jumlah beli</th>
			<th>total harga</th>
			<th>Edit</th>
			<th>Delete</th>
	</thead>
	<tbody><?php foreach ($pembayaran as $key) { ?>
		<tr><td><?php echo $key->id_bayar;?></td>
			<td><?php echo $key->id_user;?></td>
			<td><?php echo $key->id_event;?></td>
			<td><?php echo $key->id_tiket;?></td>
			<td><?php echo $key->jumlah_beli;?></td>
			<td><?php echo $key->total_harga;?></td>
			<td><a href="<?=site_url()?>/pembayaran/Update/<?php echo "$key->id_bayar"?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/pembayaran/delete/<?php echo "$key->id_bayar"?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</div>
</div>
<?php $this->load->view('pembayaran/footer');?>
