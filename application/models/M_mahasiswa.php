<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {


var $tabel_mahasiswa='tbl_mahasiswa';
var $tabel_provinsi='provinsi';
var $tabel_kabupaten='kabupaten';
var $tabel_kecamatan='kecamatan';
var $tabel_kelurahan='kelurahan';

	public function __construct(){
	parent::__construct();
	}
	
	
	
	public function tampil_data_mahasiswa() {
	$sql_query=$this->db->get($this->tabel_mahasiswa);	
			if($sql_query->num_rows()>0){
				return $sql_query->result_array();
			}
	}	
	
	public function detail_mahasiswa($nim) {
	$this->db->where('no_induk_mahasiswa',$nim);
	$sql_query=$this->db->get($this->tabel_mahasiswa);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	
	
	public function hapus($nim) {
	$this->db->where('no_induk_mahasiswa',$nim);	
	$this->db->delete($this->tabel_mahasiswa);	
	}
	
	public function update(){
	$data_mahasiswa=array(
	'nama_mahasiswa'=>$this->input->post('nama'),
	'jenis_kelamin'=>$this->input->post('jk'),
	'angkatan'=>$this->input->post('angkatan'),
	'program_studi'=>$this->input->post('program_studi'),
	'provinsi'=>$this->input->post('provinsi_id'),
	'kabupaten'=>$this->input->post('kabupaten_id'),
	'kecamatan'=>$this->input->post('kecamatan_id'),
	'kelurahan'=>$this->input->post('kelurahan_id'),
	'alamat'=>$this->input->post('alamat'),
	'tgl_berita_acara'=>$this->input->post('tgl_ba'),
	'no_berita_acara'=>$this->input->post('no_ba')
	);	
	$this->db->where('no_induk_mahasiswa',$this->input->post('nim'));
	$this->db->update($this->tabel_mahasiswa,$data_mahasiswa);	
	}	 	
	
	public function simpan(){
	$data_mahasiswa=array(
	'no_induk_mahasiswa'=>$this->input->post('nim'),
	'nama_mahasiswa'=>$this->input->post('nama'),
	'jenis_kelamin'=>$this->input->post('jk'),
	'angkatan'=>$this->input->post('angkatan'),
	'program_studi'=>$this->input->post('program_studi'),
	'provinsi'=>$this->input->post('provinsi_id'),
	'kabupaten'=>$this->input->post('kabupaten_id'),
	'kecamatan'=>$this->input->post('kecamatan_id'),
	'kelurahan'=>$this->input->post('kelurahan_id'),
	'alamat'=>$this->input->post('alamat'),
	'tgl_berita_acara'=>$this->input->post('tgl_ba'),
	'no_berita_acara'=>$this->input->post('no_ba')
	);	
	$this->db->insert($this->tabel_mahasiswa,$data_mahasiswa);	
	}	 	
	
	public function detail($no_induk) {
	$this->db->where('no_induk_mahasiswa',$no_induk);	
	$sql_query=$this->db->get($this->tabel_mahasiswa);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}
	
	public function ambil_provinsi() {
	$sql_prov=$this->db->get($this->tabel_provinsi);	
	if($sql_prov->num_rows()>0){
	foreach ($sql_prov->result_array() as $row)
	{
	$result['-']= '- Pilih Provinsi -';
		$result[$row['id_provinsi']]= 
		ucwords(strtolower($row['nama_provinsi']));
	}
			return $result;
	}
	}
	
	public function ambil_kabupaten($kode_prop){
	$this->db->where('id_provinsi',$kode_prop);
	$this->db->order_by('nama_kabupaten','asc');
	$sql_kabupaten=$this->db->get($this->tabel_kabupaten);
	if($sql_kabupaten->num_rows()>0){
	foreach ($sql_kabupaten->result_array() as $row)
    {
    $result[$row['id_kabupaten']]= 
		ucwords(strtolower($row['nama_kabupaten']));
    }
	} else {
	$result['-']= '- Belum Ada Kabupaten -';
	}
    return $result;
	}
	
	public function ambil_kecamatan($kode_kab){
	$this->db->where('id_kabupaten',$kode_kab);
	$this->db->order_by('nama_kecamatan','asc');
	$sql_kecamatan=$this->db->get($this->tabel_kecamatan);
	if($sql_kecamatan->num_rows()>0){

	foreach ($sql_kecamatan->result_array() as $row)
    {
		$result[$row['id_kecamatan']]= 
		ucwords(strtolower($row['nama_kecamatan']));
    }
	} else {
	$result['-']= '- Belum Ada Kecamatan -';
	}
    return $result;
	}

	public function ambil_kelurahan($kode_kec){
	$this->db->where('id_kecamatan',$kode_kec);
	$this->db->order_by('nama_kelurahan','asc');
	$sql_kelurahan=$this->db->get($this->tabel_kelurahan);
	if($sql_kelurahan->num_rows()>0){

		foreach ($sql_kelurahan->result_array() as $row)
        {
            $result[$row['id_kelurahan']]= 
			ucwords(strtolower($row['nama_kelurahan']));
        }
		} else {
		   $result['-']= '- Belum Ada Kelurahan -';
		}
        return $result;
	}

}
