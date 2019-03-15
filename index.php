<?php
session_start();
include 'config/class.php';

$user1 = new user("localhost","root","","db_rpl");
$user1->koneksi();

if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	$user1->login($user,$pass);
}
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "logout") {
		$user1->logout();
	}
	elseif ($_GET['pesan'] == "hapus") {
		$id = $_GET['id'];
		$user1->hapus($id);
		echo "<script>alert('Data Berhasil Di Hapus');document.location.href='../mandiri(pwpb)mysqli/#data_siswa';</script>";
	}
}
if (isset($_POST['input'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$jk = $_POST['jk'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$lvl = $_POST['level'];
	$kode_jurusan = $_POST['kode_jurusan'];
	$user1->input($nis,$nama,$tgl_lahir,$tempat_lahir,$jk,$username,$password,$lvl,$kode_jurusan);
	if (isset($_SESSION['user'])) {
		if ($_SESSION['user'] == "admin") {
			echo "<script>alert('Data Berhasil Di Simpan');document.location.href='../mandiri(pwpb)mysqli/#data_siswa';</script>";
		}
	}
	else{
			echo "<script>alert('Data Berhasil Di Simpan');document.location.href='../mandiri(pwpb)mysqli';</script>";
		}
}
if (isset($_POST['edit'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$jk = $_POST['jk'];
	$kode_jurusan = $_POST['kode_jurusan'];
	$lvl = $_POST['level'];
	$user1->edit($nis,$nama,$tgl_lahir,$tempat_lahir,$jk,$kode_jurusan,$lvl);
	echo "<script>alert('Berhasil Diedit');document.location.href='../mandiri(pwpb)mysqli/#data_siswa';</script>";
}
if (isset($_POST['update'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$jk = $_POST['jk'];
	$kode_jurusan = $_POST['kode_jurusan'];
	$lvl = $_POST['level'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
/*
	$query = mysqli_query($user1->koneksi(),"SELECT * FROM tbl_siswa WHERE nis='$nis'");
	while ($data = mysqli_fetch_array($query)) {
		$nis = $data['nis'];
	}
*/
	$user1->update($nis,$nama,$tgl_lahir,$tempat_lahir,$jk,$kode_jurusan,$lvl,$username,$password);
	echo "<script>alert('Berhasil Diedit');document.location.href='../mandiri(pwpb)mysqli/?nis=".$nis."';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to RPL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/w3.css">
	<link rel="stylesheet" type="text/css" href="lib/font/css/font-awesome.min.css">
	<link rel="icon" href="img/favicon.ico">
	<script src="lib/js/jquery.min.js"></script>
</head>
<style>
	.mySlides {display:none;}
	#scroll{
		cursor: pointer;
		position: fixed;
		display: none;
	}
</style>
<body>
<div id="home" class="mySlides.">
	<!-- Navitagion Bar -->
	<div class="w3-top">
		<div class="navbar">
		<ul class="w3-navbar w3-xlarge w3-light-blue">
		    <li></span><a class="w3-hover-red" onclick="document.getElementById('#home')" href="#home"><span class="fa fa-home"></span> Home</a></li>
		    <li><a class="w3-hover-indigo" href="#about"><span class="fa fa-info"></span> About</a></li>
		    <li><a class="w3-hover-green" href="#portofolio"><span class="fa fa-photo"></span> Portofolio</a></li>
		    <li><a class="w3-hover-deep-orange" href="#kontak"><span class="fa fa-envelope"></span> Kontak</a></li>
		    <?php
		    	if (isset($_SESSION['status'])) {
		    		if ($_SESSION['status'] == "login") {
		    		?>
		    		<li class="w3-dropdown-hover w3-hover-green w3-right">
		      			<a class="w3-hover-red" href="#"><span class="fa fa-user"></span> Hi, <?php echo $_SESSION['username']; ?> <span class="fa fa-caret-down"></span></a>
					      <div class="w3-dropdown-content w3-white w3-card-4">
					      	<?php if ($_SESSION['user'] == "admin") { }else{ ?>
					      	<a href="#" onclick="document.getElementById('detail').style.display='block'"><span class="fa fa-info"></span> Detail</a>
					      	<?php } ?>
					        <a href="?pesan=logout"><span class="fa fa-sign-out"></span> Logout</a>
					      </div>
		   			 </li>
		   			 <li class="w3-right"><a class="w3-hover-purple" href="#data_siswa"><span class="fa fa-book"></span> Data Siswa</a></li>
		    	<?php } }
		    	else{
		    		?>
		    		<li class="w3-right"><a class="w3-hover-green" onclick="document.getElementById('login').style.display='block'" href="#"><span class="fa fa-sign-in"></span> Login</a></li>
		    		<li class="w3-right"><a class="w3-hover-purple" onclick="document.getElementById('daftar').style.display='block'" href="#"><span class="fa fa-edit"></span> Pendaftaran</a></li>
		    <?php	}
		    ?>
	  	</ul></div>
	</div>

	<!-- Tombol Scrool -->
	<div class="naik"><a id="scroll" onclick="document.getElementById('#home')" href="#home" class="w3-btn w3-blue w3-hover-red w3-round" style="margin-left: 95%; margin-top: 519px;"><span class="fa fa-arrow-up"></span></a></div>

	<!-- Caraousel -->
	<div>
		<div class="w3-content w3-section" style="max-width:100%;">
			<!-- <a class="w3-btn-floating w3-hover-dark-grey w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
			<a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a> -->

			<img class="w3-animate-left mySlidess mySlides" src="img/image-01-01.png" style="width:100%; max-height: 650px">
			<img class="w3-animate-right mySlidess mySlides" src="img/no-place.png" style="width:100%; max-height: 650px">
			<img class="w3-animate-left mySlidess mySlides" src="img/programmer-wallpaper.png" style="width:100%; max-height: 650px">
			<img class="w3-animate-right mySlidess mySlides" src="img/hacker.jpg" style="width:100%; max-height: 650px">
		</div>
	</div>
	<div id="about"></div>
	<div class="w3-container" style="margin-bottom: 70px; margin-top: 70px;">
		<div class="w3-panel w3-light-blue w3-topbar w3-bottombar w3-border-blue"style="width: 110px;">
    		<p><h3><b>About</b></h3></p>
		</div>
		<div class="w3-container">
			<div class="w3-panel w3-light-grey">
			    <span style="font-size:150px;line-height:0.6em;opacity:0.2">❝</span>
			    <p class="w3-xlarge" style="margin-top:-40px">Rekayasa Perangkat Lunak atau yang lebih dikenal dengan RPL atau bahasa kerennya Software Engineering, adalah suatu Jurusan yang mempelajari Tentang Hal Program, Baik berbasis Desktop, Web, maupun Android.</p>
			</div>
		</div>
		<div id="portofolio"></div>
	</div>


	<div class="w3-container" style="margin-bottom: 100px;">
		<div class="w3-panel w3-light-blue w3-topbar w3-bottombar w3-border-blue"style="width: 160px;">
    		<p><h3><b>Portofolio</b></h3></p>
		</div>
		<div class="w3-row-padding w3-margin-top">
		    <div class="w3-third">
		    	<div class="w3-card-2">
		    		<img src="img/web-design-icon-2.png" style="width:100%; height: 380px;">
				    	<div class="w3-container">
				    		<h5 class="w3-text w3-bold"><b>Web Desain</b></h5>
				    		<p class="w3-text">Web Desain atau bahasa kerennya Web Developer, adalah suatu kegiataan dimana kita membuat suatu web melalui perancangan yang sudah kita buat.<br>Biasanya Web Desain menggunakan bahasa <code class="w3-codespan">HTML</code>,<code class="w3-codespan">CSS</code>,<code class="w3-codespan">PHP</code>,<code class="w3-codespan">JS</code></p>
				    	</div>
		    	</div>
		    </div>

		    <div class="w3-third">
		    	<div class="w3-card-2">
		    		<img src="img/desktop-app-development.png" style="width:100%; height: 380px;">
				    	<div class="w3-container">
				    		<h5 class="w3-text"><b>Desktop Application</b></h5>
				    		<p class="w3-text">Dektop Application adalah suatu kegiatan mengembangkan aplikasi berbasis desktop sesuai alur yang telah kita buat.<br>Biasanya Dekstop Application menggunakan bahasa <code class="w3-codespan">C#</code>,<code class="w3-codespan">Visual Basic</code>,<code class="w3-codespan">Java</code>,<code class="w3-codespan">Python</code></p>
				    	</div>
		    	</div>
		    </div>

		    <div class="w3-third">
		    	<div class="w3-card-2">
		    		<img src="img/webdevelopement_technoduce.jpg" style="width:100%; height: 380px;">
				    	<div class="w3-container">
				    		<h5 class="w3-text"><b>Android Developer</b></h5>
				    		<p class="w3-text">Andoid Developer adalah suatu kegiatan mengembangkan aplikasi berbasis android menggunakan Andorid Studio.<br>Biasanya memakai bahasa <code class="w3-codespan">XML</code> kalo gk salah, soalnya aku blum pernah coba karna laptopku gk kuat :')</p>
				    	</div>
		    	</div>
		    </div>
		</div>
		<div id="kontak"></div>
	</div>

	<div class="w3-container">
    	<div class="w3-panel w3-light-blue w3-topbar w3-bottombar w3-border-blue"style="width: 120px;">
    		<p><h3><b>Kontak</b></h3></p>
		</div>
    </div>
    <form class="w3-container" >
    	<p>
	    	<label class="w3-label w3-text-blue"><b>Nama</b></label>
	    	<input class="w3-input w3-border" name="nama" type="text"></p>
	    <p>
	    	<label class="w3-label w3-text-blue"><b>Email</b></label>
	    	<input class="w3-input w3-border" name="email" type="email"></p>
	    <p>
	    	<label class="w3-label w3-text-blue"><b>Pesan</b></label>
	    	<textarea class="w3-input w3-border" cols="5" rows="4" name="pesan" style="resize: none;"></textarea></p>
	    <p>
    		<button class="w3-btn w3-blue"><span class="fa fa-paper-plane"></span> Kirim</button></p>
	</form>
</div>

<!-- Table Siswa -->
<?php
if (isset($_SESSION['status'])) {
	if ($_SESSION['status'] == "login") {
?>
	<div id="data_siswa"></div>
	<div style="margin-bottom: 80px; margin-top: 80px;" align="center">
		<h3>Data Siswa</h3>
		<?php
			if ($_SESSION['user'] == "admin") {
				?><button class="w3-btn w3-blue" onclick="document.getElementById('daftar').style.display='block'"><span class="fa fa-plus"></span> Tambah Data</button>  <?php
			}
		?>
		<table class="w3-table w3-striped w3-bordered w3-centered w3-border w3-card-4" style="
		<?php
		if ($_SESSION['user'] == "admin") {
			echo "max-width: 1280px; margin-top: 15px;";
		}else{
			echo "max-width: 1180px; margin-top: 15px;";	
		}
		?>">
			<tr class="w3-blue">
				<td>No.</td>
				<td>NIS</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Tanggal Lahir</td>
				<td>Tempat Lahir</td>
				<td>Jurusan</td>
			<?php
				if ($_SESSION['user'] == "admin") {
					?><td>Action</td><?php
				}
			?>
			</tr>
		<?php
		$no=1;

		$query = mysqli_query($user1->koneksi(),"SELECT nis, nama, jk, tgl_lahir, tempat_lahir, nama_jurusan FROM tbl_siswa INNER JOIN tabel_rpl ON tabel_rpl.kode_jurusan = tbl_siswa.kode_jurusan ORDER BY nis");
			while ($data = mysqli_fetch_array($query)) {
		?>
			<tr class="w3-hover-khaki">
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nis']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jk']; ?></td>
				<td><?php echo $data['tgl_lahir']; ?></td>
				<td><?php echo $data['tempat_lahir']; ?></td>
				<td><?php echo $data['nama_jurusan']; ?></td>
				<?php
				if ($_SESSION['user'] == "admin") {
					?>
				<!-- "document.location.href='#edit?id=<?php // echo $data['nis']; ?>'" -->
				<td>
					<a onclick="document.getElementById('edit').style.display='block'" href="?edit&id=<?php echo $data['nis']; ?>#data_siswa" class="w3-btn w3-green"><span class="fa fa-pencil"></span> Edit</a> 
					&nbsp;&nbsp;
					<a href="?pesan=hapus&id=<?php echo $data['nis']; ?>" onclick="return hapus()" class="w3-btn w3-red"><span class="fa fa-times"></span> Hapus</a></td>
				<?php
				}
				?>
			</tr>
		<?php
		$no++;
		}
		?>
		</table>
	</div>
<?php
} }

?>


<!-- footer -->
	<footer class="w3-container w3-blue">
		<h5 align="center">&copy; Copyright 2018. Created by DTAX-01</h5>
	</footer>

<!-- MODAL Login -->
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/male_1.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">

          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Masukkan Username" name="username" autofocus required>

          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Masukkan Password" name="password" autofocus required>

          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="login">Login</button>

          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>

<!-- Modal Daftar -->
 <div id="daftar" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px;">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('daftar').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">
          <label><b>NIS</b></label>

          <input class="w3-input w3-border" type="number" placeholder="Masukkan NIS" name="nis" autofocus required><br>

          <label><b>Nama Lengkap</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Masukkan Nama" name="nama" autofocus required><br>

          <label><b>Tanggal Lahir</b></label>
          <input class="w3-input w3-border" type="date" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" autofocus required><br>

          <label><b>Tempat Lahir</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" autofocus required><br>

          <label><b>Jenis Kelamin</b></label><br>
          <input class="w3-radio" type="radio" name="jk" value="Laki-Laki"> Laki-Laki
          &nbsp;&nbsp;&nbsp;&nbsp;
          <input class="w3-radio" type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

          <label><b>Jurusan</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select class="w3-select" name="kode_jurusan">
          	<option value="" disabled selected>Pilih Jurusan...</option>
      	<?php
      	$no=1;
      	$query = mysqli_query($user1->koneksi(),"SELECT * FROM tabel_rpl");
      	while ($data = mysqli_fetch_array($query)) {
      	?>
          	<option value="<?php echo $data['kode_jurusan']; ?>"><?php echo $data['kode_jurusan']; ?></option>
        <?php $no++; } ?>
          </select>
          <hr>

          <label><b>Username</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Masukkan Username" name="username" autofocus required><br>

          <label><b>Password</b></label>

          <input class="w3-input w3-border" type="password" placeholder="Masukkan Password" name="password" autofocus required><input type="hidden" name="level" value="3"><br>

          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="input"> <?php if (isset($_SESSION['user'])) { if ($_SESSION['user'] == "admin") { echo "Tambahkan Data"; } }else{ echo "Daftar"; } ?></button>
        </div>
      </form>

      	<?php if (isset($_SESSION['user'])){ if($_SESSION['user'] == "admin") { } }else{ ?>
      		<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      		<button onclick="document.getElementById('daftar').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button><?php } ?>
      </div>

    </div>
  </div>

<?php
if (isset($_GET['edit'])) {
	$id = $_GET['id'];
	$query_edit = mysqli_query($user1->koneksi(),"SELECT * FROM tbl_siswa WHERE nis='$id'");
	while ($data_edit = mysqli_fetch_array($query_edit)) {
?>
<!-- Modal Edit -->
<div id="edit" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px;">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('edit').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>
      <form class="w3-container" action="" method="POST">
        <div class="w3-section">

          <label><b>NIS</b></label>
          <input class="w3-input w3-border" type="hidden" placeholder="Masukkan NIS" name="nis" value="<?php echo $data_edit['nis']; ?>">
          <input class="w3-input w3-border" type="number" placeholder="Masukkan NIS" name="nis1" value="<?php echo $data_edit['nis']; ?>" disabled><br>

          <label><b>Nama Lengkap</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Masukkan Nama" name="nama" autofocus value="<?php echo $data_edit['nama']; ?>" required><br>

          <label><b>Tanggal Lahir</b></label>
          <input class="w3-input w3-border" type="date" name="tgl_lahir" value="<?php echo $data_edit['tgl_lahir']; ?>" required><br>

          <label><b>Tempat Lahir</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?php echo $data_edit['tempat_lahir']; ?>" required><br>

          <label><b>Jenis Kelamin</b></label><br>
          <input class="w3-radio" type="radio" placeholder="Masukkan Nama" name="jk" value="Laki-Laki" 
          <?php if ($data_edit['jk'] == "Laki-Laki") { echo "checked"; } ?> > Laki-Laki
          &nbsp;&nbsp;&nbsp;&nbsp;<input class="w3-radio" type="radio" placeholder="Masukkan Nama" name="jk" value="Perempuan"
          <?php if ($data_edit['jk'] == "Perempuan") { echo "checked"; } ?> > Perempuan
          <br><br>

          <label><b>Jurusan</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select class="w3-select" name="kode_jurusan">
          	<option value="<?php echo $data_edit['kode_jurusan'] ?>"><?php echo $data_edit['kode_jurusan']; ?></option>
      	<?php
      	$no=1;
      	$query = mysqli_query($user1->koneksi(),"SELECT * FROM tabel_rpl");
      	while ($data = mysqli_fetch_array($query)) {
      	?>
          	<option value="<?php echo $data['kode_jurusan'] ?>"> <?php echo $data['kode_jurusan']; ?></option>
        <?php $no++; } ?>
          </select>

          <input type="hidden" name="level" value="<?php echo $data_edit['level']; ?>"><br>

          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="edit">Edit Data</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('edit').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      </div>

    </div>
  </div>
<?php
} }
?>

<!-- UPDATE SISWA -->
<?php
if (isset($_GET['nis'])) {
	$nis = $_GET['nis'];
	$query = mysqli_query($user1->koneksi(),"SELECT * FROM tbl_siswa WHERE nis='$nis'");
	while ($data_update = mysqli_fetch_array($query)) {
?>
<!-- Modal Update Siswa -->
<div id="detail" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('detail').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <h4>Detail & Update</h4>
      </div>

      <form class="w3-container" action="" method="POST">
        <div class="w3-section">

    		<label>NIS</label>
    		<input name="nis" class="w3-input" type="hidden" value="<?php echo $data_update['nis']; ?>">
    		<input name="nis1" class="w3-input" type="text" value="<?php echo $data_update['nis']; ?>" disabled><br>

    		<label>Nama Lengkap</label>
    		<input name="nama" class="w3-input" type="text" value="<?php echo $data_update['nama']; ?>"><br>

    		<label><b>Tanggal Lahir</b></label>
	        <input class="w3-input w3-border" type="date" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="<?php echo $data_update['tgl_lahir']; ?>" autofocus required><br>

	        <label><b>Tempat Lahir</b></label>
	        <input class="w3-input w3-border" type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?php echo $data_update['tempat_lahir']; ?>" autofocus required><br>

	        <label><b>Jenis Kelamin</b></label><br>
            <input class="w3-radio" type="radio" placeholder="Masukkan Nama" name="jk" value="Laki-Laki" 
            <?php if ($data_update['jk'] == "Laki-Laki") { echo "checked"; } ?> > Laki-Laki
            &nbsp;&nbsp;&nbsp;&nbsp;<input class="w3-radio" type="radio" placeholder="Masukkan Nama" name="jk" value="Perempuan"
            <?php if ($data_update['jk'] == "Perempuan") { echo "checked"; } ?> > Perempuan
            <br><br>

	        <label><b>Jurusan</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <select class="w3-select" name="kode_jurusan">
	        	<option value="<?php echo $data_update['kode_jurusan'] ?>"><?php echo $data_update['kode_jurusan']; ?></option>
	      	<?php
	      	$no=1;
	      	$query = mysqli_query($user1->koneksi(),"SELECT * FROM tabel_rpl");
	      	while ($data = mysqli_fetch_array($query)) {
	      	?>
	          	<option value="<?php echo $data['kode_jurusan'] ?>"><?php echo $data['kode_jurusan']; ?></option>
	        <?php $no++; } ?>
         	</select>
          	<hr>

    		<label>Username</label>
    		<input name="username" class="w3-input" type="text" value="<?php echo $data_update['username']; ?>"><br>
    		<label>Password</label>

    		<input name="password" class="w3-input" type="password" ><br>

    		<input name="level" class="w3-input" type="hidden" value="3">

    		<button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="update">Update</button>
        </div>
      </form>

    </div>
  </div>
<?php
} }
?>

</div>
<script>
function hapus() {
	var tanya = confirm("Apakah Anda Ingin Menghapus Data Ini?");
	if (tanya == true) return true;
	else return false;
}
//==============================================

$(document).ready(function(){
		$(window).scroll(function(){
			if ($(window).scrollTop() > 500) {
				$('#scroll').fadeIn();
			} else {
				$('#scroll').fadeOut();
			}
		});
	});

//============================
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlidess");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3800); // Change image every 2 seconds
}
//====================
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("li a, .naik a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
//====================================================
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>

<?php
/*

function hapus() {
	var tanya = confirm("Apakah Anda Ingin Menghapus Data Ini?");
	if (tanya == true) return true;
	else return false;
}
//============================
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlidess");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3800); // Change image every 2 seconds
}
// ==============================================	
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
// ==================================================================
// ==================== Smooth Scrool ===============================
// ==================================================================
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


*/

?>