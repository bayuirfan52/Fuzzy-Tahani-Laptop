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
	<title>Dashboard</title>
</head>
<body>
	<div class="jumbotron text-center">
		<h1>Software Pendukung Rekomendasi Laptop</h1>
		<p>Aplikasi rekomendasi dengan menerapkan Fuzzy Database Tahani</p>
	</div>
	<div class="bg-1">
		<div class="container text-center">
			<h2>Pilih Kategori Laptop Pilihan Anda</h2>
			<div class="form-group" style="padding-top:20px">
				<div class="col-sm-4" style="text-align:center">
					<h4>Harga</h4>
					<label style="margin-right:15px; float:left;"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-harga" id="c-harga" onchange="cekHarga(this)"></label>						
					<select class="form-control" style="width:90%" name="sl-harga" id="sl-harga" disabled=true>
						<option value="">--Pilih--</option>
						<option value="murah">Murah</option>
						<option value="sedang">Sedang</option>
						<option value="mahal">Mahal</option>
					</select>
					<input type="hidden" name="cx-hg" id="cx-hg" value=0>
				</div>
				<div class="col-sm-4" style="text-align:center">
					<h4>Kecepatan Processor</h4>
					<label style="margin-right:15px; float:left"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-processor" id="c-processor" onchange="cekProci(this)"></label>						
					<select class="form-control" style="width:90%" name="sl-processor" id="sl-processor" disabled=true>
						<option value="">--Pilih--</option>
						<option value="murah">Rendah</option>
						<option value="sedang">Sedang</option>
						<option value="mahal">Tinggi</option>
					</select>
					<input type="hidden" name="cx-pc" id="cx-pc" value=0>
				</div>
				<div class="col-sm-4" style="text-align:center">
					<h4>Dimensi Layar</h4>
					<label style="margin-right:15px; float:left;"><input style="transform:scale(2.5); height:26px;" type="checkbox" name="c-dimens" id="c-dimens" onchange="cekDimens(this)"></label>						
					<select class="form-control" style="width:90%" name="sl-dimens" id="sl-dimens" disabled=true>
						<option value="">--Pilih--</option>
						<option value="murah">Sempit</option>
						<option value="sedang">Sedang</option>
						<option value="mahal">Lebar</option>
					</select>
					<input type="hidden" name="cx-dm" id="cx-dm" value=0>
				</div>
				<button class="btn btn-success" style="margin-top:25px; width:150px" type="submit" onclick="cari()">Cari</button>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center" id="main-list">
		
	</div>	
</body>
<script>
	function cari(){
		var data = {
				'harga' : $("#s1-harga").val(),
				'kecepatan' : $("#s1-processor").val(),
				'dimensi' : $("#s1-dimens").val(),
				'cx-hg' : $('#cx-hg').val(),
				'cx-pc' : $('#cx-pc').val(),
				'cx-dm' : $('#cx-dm').val()
			};
		$.ajax({
			url : '<?= base_url("index.php/welcome/cari");?>',
			dataType : 'json',
			data : data,
			type : 'POST',
			success : function(data){
				var a = "";
				a += "<table>"+
				"<tr>Halo</tr>" +
				"</table>";
				$('#main-list').html(a);
			},
			error : function(){
				var popup = "";
				popup = "<div class='alert alert-danger'>" + 
  							"<strong>Danger!</strong> Indicates a dangerous or potentially negative action." + 
						"</div>";
			}
		})
	}

	function cekHarga(checkbox) {
		if(checkbox.checked == true){
			document.getElementById('cx-hg').value = 1;
			document.getElementById('sl-harga').disabled = false;
		}else{
			document.getElementById('cx-hg').value = 0;
			document.getElementById('sl-harga').disabled = true;
		}
	}

	function cekProci(checkbox) {
		if(checkbox.checked == true){
			document.getElementById('cx-pc').value = 1;
			document.getElementById('sl-processor').disabled = false;
		}else{
			document.getElementById('cx-pc').value = 0;
			document.getElementById('sl-processor').disabled = true;
		}
	}

	function cekDimens(checkbox) {
		if(checkbox.checked == true){
			document.getElementById('cx-dm').value = 1;
			document.getElementById('sl-dimens').disabled = false;
		}else{
			document.getElementById('cx-dm').value = 0;
			document.getElementById('sl-dimens').disabled = true;
		}
	}
</script>
</html>