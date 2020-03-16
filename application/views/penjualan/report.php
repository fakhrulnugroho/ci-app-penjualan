<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
			<!-- <h4 class="h4 text-dark "><strong><?= $perusahaan->nama_perusahaan ?></strong></h4> -->
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>No Penjualan</td>
					<td>Nama Kasir</td>
					<td>Tanggal Penjualan</td>
					<td>Total</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_penjualan as $penjualan): ?>
					<tr>
						<td><?= $penjualan->no_penjualan ?></td>
						<td><?= $penjualan->nama_kasir ?></td>
						<td><?= $penjualan->tgl_penjualan ?> Pukul <?= $penjualan->jam_penjualan ?></td>
						<td>Rp <?= number_format($penjualan->total, 0, ',', '.') ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>