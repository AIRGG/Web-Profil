<?php
class user
{
	private $dbhost;
	private $dbuser;
	private $dbpass;
	private $dbnama;
	function __construct($host,$user,$pass,$dbnama)
	{
		$this->dbhost = $host;
		$this->dbuser = $user;
		$this->dbpass = $pass;
		$this->dbnama = $dbnama;
	}

	function koneksi()
	{
		$koneksi = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbnama);
		if ($koneksi) {
			
		}
		else{
			die("GAGAL");
		}
		return $koneksi;
	}

	function login($username,$password)
	{
		if ($username == "admin") {
			$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$sql_lvl = mysqli_query($this->koneksi(),"SELECT * FROM admin WHERE username='$username' AND password='$password'");
		}
		else{
			$sql = "SELECT * FROM tbl_siswa WHERE username='$username' AND password='$password'";
			$sql_lvl = mysqli_query($this->koneksi(),"SELECT * FROM tbl_siswa WHERE username='$username' AND password='$password'");
		}

		while ($data = mysqli_fetch_array($sql_lvl)) {
			$level = $data['level'];
			$nis = $data['nis'];
		}

		$query = mysqli_query($this->koneksi(),$sql);
		$cek = mysqli_num_rows($query);

		if ($cek > 0) {
			if ($level == 1) {
				$_SESSION['user'] = "admin";
				$_SESSION['status'] = "login";
				$_SESSION['username'] = $username;
				header("location:../mandiri(pwpb)mysqli");
			}
			elseif ($level == 2) {
				$_SESSION['user'] = "guru";
				$_SESSION['status'] = "login";
				$_SESSION['username'] = $username;
				header("location:../mandiri(pwpb)mysqli");
			}
			else{
				$_SESSION['user'] = "siswa";
				$_SESSION['status'] = "login";
				$_SESSION['username'] = $username;
				header("location:../mandiri(pwpb)mysqli/?nis=".$nis);
			}
		}
		else{
			echo "<script>alert('Login Gagal, Username atau Password Salah');document.location.href='../mandiri(pwpb)mysqli';</script>";
		}
	}

	function input($nis, $nama, $tgl_lahir, $tempat_lahir, $jk, $username, $password, $level, $kode_jurusan)
	{
		/*
		$sql = "INSERT INTO tbl_siswa VALUES('$nis', '$nama', '$tgl_lahir', '$tempat_lahir', '$jk', '$username', '$password', '$level', $kode_jurusan)";
		*/
		$sql = "INSERT INTO tbl_siswa VALUES('$nis','$nama','$tgl_lahir','$tempat_lahir','$jk','$username','$password','$level','$kode_jurusan')";
		$query = mysqli_query($this->koneksi(),$sql);
		if ($query) {
			
		}
		else{
			echo "<script>alert('GAGAL Ditambahkan');document.location.href='../mandiri(pwpb)mysqli';</script>";
		}
	}

	function update($nis, $nama, $tgl_lahir, $tempat_lahir, $jk, $kode_jurusan, $level, $username, $password)
	{
		/*
		$sql = "UPDATE tbl_siswa SET nama='$nama', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', level='$level', kode_jurusan='$kode_jurusan' WHERE nis='$nis'";
		*/
		$sql = "UPDATE tbl_siswa SET nama='$nama', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', level='$level', kode_jurusan='$kode_jurusan', username='$username', password='$password' WHERE nis='$nis'";
		$query = mysqli_query($this->koneksi(),$sql);
		if ($query) {
			
		}
		else{
			echo "<script>alert('GAGAL Diedit');document.location.href='../mandiri(pwpb)mysqli';</script>";
		}
	}

	function edit($nis, $nama, $tgl_lahir, $tempat_lahir, $jk, $kode_jurusan, $level)
	{
		/*
		$sql = "UPDATE tbl_siswa SET nama='$nama', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', level='$level', kode_jurusan='$kode_jurusan' WHERE nis='$nis'";
		*/
		$sql = "UPDATE tbl_siswa SET nama='$nama', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', level='$level', kode_jurusan='$kode_jurusan' WHERE nis='$nis'";
		$query = mysqli_query($this->koneksi(),$sql);
		if ($query) {
			
		}
		else{
			echo "<script>alert('GAGAL Diedit');document.location.href='../mandiri(pwpb)mysqli';</script>";
		}
	}

	function hapus($nis)
	{
		$sql = "DELETE FROM tbl_siswa WHERE nis='$nis'";
		$query = mysqli_query($this->koneksi(),$sql);
		if ($query) {
			
		}
		else{
			echo "<script>alert('Data Gagal Di Hapus');document.location.href='../mandiri(pwpb)mysqli/#data_siswa';</script>";
		}
	}

	function logout()
	{
		session_start();
		session_destroy();
		header("location:../mandiri(pwpb)mysqli");
	}
}
?>