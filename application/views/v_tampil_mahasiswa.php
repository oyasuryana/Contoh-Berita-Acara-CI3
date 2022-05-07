<!DOCTYPE html>
<html lang="en">
  <head>
<title>Daftar mahasiswa</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contoh berita acara dengaan codeigniter">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('dist/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
<div class="container">
<?php
// atribut popup
        $atts = array(
            'width' => '800',
            'height' => '550',
            'scrollbars' => 'yes',
			'status' => 'no',
            'resizable' => 'no',
            'screenx' => '100',
            'screeny' => '30'
			
        );

?>
		
	<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
<h4 style="color:#FFFFFF;font-weight:bold;"><span class="glyphicon glyphicon-fire"></span>&nbsp;Contoh Membuat Berita Acara dengan CodeIgniter V. 2.2.0</h4>
			</div>
		</div>
	</nav>


<div class="panel panel-primary">
	<div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span>&nbsp;<b>Daftar mahasiswa Penerima Beasiswa</b></div>
		<div class="panel-body">
        <p>Berikut daftar  mahasiswa penerima beasiswa klik icon disetiap baris untuk menampilkan berita acara  !</p>
		<div>
	</div>
</div>

<div class="table-responsive">
<?php
	$tampilan_tabel=array('table_open'=>'<table  id="example" class="table table-striped table-bordered table-condensed table-hover">',
	'heading_cell_start'=>'<th class="daftar">',
	'row_start'=>'<tr>');
	$this->table->set_template($tampilan_tabel);

$no=0;
$hal=$this->uri->segment(3);
$no=$no+$hal;


$this->table->set_heading('No.','No. Induk','Nama mahasiswa','No. Berita Acara','Tgl. Berita Acara','Program Studi');

if(isset($mahasiswa)){
	foreach($mahasiswa as $data_mahasiswa){
		$no++;
		$this->table->add_row(
		$no,
		$data_mahasiswa['no_induk_mahasiswa'],
		$data_mahasiswa['nama_mahasiswa'],
		$data_mahasiswa['no_berita_acara'],
		$data_mahasiswa['tgl_berita_acara'],
		$data_mahasiswa['program_studi'],
		'<div align="center">'.anchor_popup('popup/ba_beasiswa/'.$data_mahasiswa['no_induk_mahasiswa'], '<span class="glyphicon glyphicon-file"></span>', $atts).'</div>'
		);
	}
}
echo $this->table->generate();
?>
</div>
</div>
</body>
</html>
