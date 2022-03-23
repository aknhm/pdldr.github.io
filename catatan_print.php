<?php
ob_start();
session_start();
if(!isset($_SESSION['nik'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='login.php'>Back</button>");
}
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com">
  <title>PeduliDiri</title>
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
<div class="page-section">
      <div class="container">
        <h1 class="mb-4" style="text-align: center;">Laporan PeduliDiri</h1>
        <div class="text-center wow fadeInUp">
            <label>NIK : </label>
                <?php 
				  require_once 'koneksi.php';
					$query = "SELECT * FROM tb_user WHERE nik='$_SESSION[nik]'";
					$result = mysqli_query($koneksi, $query);	
					while($data = mysqli_fetch_assoc($result) )
					{
					  ?>
						<?php echo $data['nik']; ?>
					  <?php 
					} 				
			    ?>
			<label>Nama : </label>	  
		        <?php 
				  require_once 'koneksi.php';
					$query = "SELECT * FROM tb_user WHERE nik='$_SESSION[nik]'";
					$result = mysqli_query($koneksi, $query);	
					while($data = mysqli_fetch_assoc($result) )
					{
					  ?>
						<?php echo $data['nama']; ?>
					  <?php 
					} 				
				?>
          <div class="subhead">
			  <div class="container">
				<div class="card-body"> <!--Tabel-->
				   
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>tgl</th>
								<th>waktu</th>
								<th>lokasi</th>
								<th>suhu_tubuh</th>
							</tr>
						</thead>
							<tbody>					
									<?php
									   include('koneksi.php');
									  $sql = mysqli_query($koneksi, "SELECT * FROM tb_catatan WHERE nik='$_SESSION[nik]'") or die(mysqli_error($koneksi)); //GANTI
									  if(mysqli_num_rows($sql) > 0)
									  {
										$no = 1;
										while($data = mysqli_fetch_assoc($sql))
										{
										  echo '
										  <tr>
											<td>'.$no.'</td>
											<td>'.$data['tgl'].'</td>
											<td>'.$data['waktu'].'</td>
											<td>'.$data['lokasi'].'</td>
											<td>'.$data['suhu_tubuh'].'</td>
										  </tr>
										  ';
										  $no++;
										}
									  }
									  else
									  {
										echo '
										<tr>
										  <td colspan="6">Tidak ada data.</td>
										</tr>
										';
									  }
									?>
							</tbody>      
					</table>
					
					
				</div>
			  </div>

		  </div>
		</div>
	  </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
<script>
window.print()
</script>
</html>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>
<script src="assets/js/google-maps.js"></script>
<script src="assets/js/theme.js"></script>