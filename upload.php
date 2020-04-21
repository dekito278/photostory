<?php
$page_title = "upload";

    include 'includes/config.php';

    include 'includes/header.php';

    include 'includes/navbar.php';

?>

<form>
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" id="nama" class="form-control" placeholder="Contoh form text ...">
	</div>
 
	<div class="form-group">
		<label for="umur">Umur</label>
		<input type="number" id="umur" class="form-control" placeholder="Contoh form angka ...">
	</div>
 
	<div class="form-group">
		<label for="pekerjaan">Pekerjaan</label>
		<select id="pekerjaan" class="form-control">
			<option value="">- Pilih Pekerjaan</option>
			<option value="">Programmer</option>
			<option value="">Web Designer</option>
			<option value="">Pengusaha</option>
		</select>
	</div>
 
	<div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea class="form-control" id="alamat" rows="3" placeholder="Contoh textarea .."></textarea>
	</div>
 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'includes/footer.php'; ?>