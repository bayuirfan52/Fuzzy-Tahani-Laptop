<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
	<script src="<?=base_url()?>/assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
	<style>
		.bg-1{
			background : #2d2d30;
			color : #bdbdbd;
			padding-bottom:25px;
		}
	</style>
	<script>

	</script>
	<title>Dashboard</title>
</head>
<body>
	<div class="jumbotron text-center">
		<h1>Software Pendukung Rekomendasi Laptop</h1>
		<p>Aplikasi rekomendasi dengan menerapkan Fuzzy Database Tahani</p>
	</div>
	<div class="bg-1">
		<div class="container">
			<h2>Pilih Kategori Laptop Pilihan Anda</h2>
			<div class="form-group">
				<form action="" method="get">
					<div class="col-sm-4" style="text-align:center">
						<h4>Harga</h4>
						<label style="margin-right:15px; float:left;"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-harga" id="c-harga"></label>						
						<select class="form-control" style="width:90%" name="sl-harga" id="sl-harga">
							<option value="murah">Murah</option>
							<option value="sedang">Sedang</option>
							<option value="mahal">Mahal</option>
						</select>
					</div>
					<div class="col-sm-4" style="text-align:center">
						<h4>Kecepatan Processor</h4>
						<label style="margin-right:15px; float:left"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-processor" id="c-processor"></label>						
						<select class="form-control" style="width:90%" name="sl-processor" id="sl-processor">
							<option value="murah">Rendah</option>
							<option value="sedang">Sedang</option>
							<option value="mahal">Tinggi</option>
						</select>
					</div>
					<div class="col-sm-4" style="text-align:center">
						<h4>Dimensi Layar</h4>
						<label style="margin-right:15px; float:left;"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-dimens" id="c-dimens"></label>						
						<select class="form-control" style="width:90%" name="sl-dimens" id="sl-dimens">
							<option value="murah">Sempit</option>
							<option value="sedang">Sedang</option>
							<option value="mahal">Lebar</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div>
		
	</div>	
</body>
</html>