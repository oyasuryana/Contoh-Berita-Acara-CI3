<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * hari indonesia Helper
 *
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author	oyazhuryachna
 * @link	http://ozs.web.id
 */

if ( ! function_exists('hari_helper'))
{
	function nama_hari($bln,$tgl,$thn)
	{
		// menyiapkan array untuk menerjemahkan nama hari dari inggris
		// ke indonesia dimana 1 adalah mingg
		$hari = array(
		1=>'senin','selasa','rabu','kamis','jumat','sabtu','minggu');

		//mencari no hari berdasarkan tanggal
		$no_hari=date("N", mktime(0, 0, 0, $bln, $tgl, $thn));

		//menerjemahkan berdasarkan index pada array hari	
		return $hari[$no_hari];
	}
}
?>
