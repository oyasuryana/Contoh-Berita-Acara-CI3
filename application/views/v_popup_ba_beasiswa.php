<html>
<head>
<title>Berita Acara</title>
<style>
body{
font-family:arial;
}
</style>
</head>
<body>

<h3 align="center">UNIVERITAS KUNINGAN</h3>
<p align="center">Jalan Cut Nyak DIen No. 36 Kuningan - Jawa Barat</p>
<hr/>
<br/>
<h4 align="center">BERITA ACARA PENYERAHAN BEASISWA
<br/>
Nomor : <?php echo $detail_mahasiswa['no_berita_acara'];?></h4>
<br/>
<?php
// mengambil tgl berita acara dari field tgl_berita_acara
// memecahnya dengan fungsi explode berdasarkan tanda - (strip)
// disimpan dalam variabel $parameter
$parameter=explode('-',$detail_mahasiswa['tgl_berita_acara']);
$tahun=$parameter[0];
$bulan=$parameter[1];
//untuk tanggal dibawah  10 maka dibuang nol nya  
if(substr($parameter[2],0,1)==0) {$tanggal=substr($parameter[2],1,1);} else {$tanggal=$parameter[2];}
?>
<p>Pada hari ini <?php echo nama_hari($bulan,$tanggal,$tahun);?>, tanggal <?php echo terbilang($tanggal);?> bulan  <?php echo bulan_indonesia($bulan);?> tahun <?php echo terbilang($tahun);?> yang bertanda tangan dibawah ini :</p>

<table class="tabel_1" width="700" align="center">
<tr><td width="150">Nama Lengkap</td><td>: Dr. Iskandar,M.M.</td></tr>
<tr><td>NIP</td><td>: 18900 0909 08997</td></tr>
<tr><td>Jabatan</td><td>: Rektor Univeritas Kuningan</td></tr>
</table>

<p>Menyerahkan bantuan beasiswa Peningkatan Prestasi Akademik (PPA) tahun <?php echo $tahun;?> kepada :</p>

<table class="tabel_1" width="700" align="center">
<tr><td width="150">Nama Lengkap</td><td>: <?php echo $detail_mahasiswa['nama_mahasiswa'];?></td></tr>
<tr><td>NIM</td><td>: <?php echo $detail_mahasiswa['no_induk_mahasiswa'];?></td></tr>
<tr><td>Program Studi </td><td>: <?php echo $detail_mahasiswa['program_studi'];?></td></tr>
</table>

<p>Demikian Berita Acara ini dibuat untuk digunakan seperlunya.</p>


<p>Kuningan, <?php echo date('d').' '.ucwords(bulan_indonesia(date('m'))).' '.date('Y');?><br/>
Rektor,</p>
<br/>
<br/>
<p><b>Dr. Iskandar,M.M.<br/>
NIP 18900 0909 08997</b></p>
<body>
</html>
