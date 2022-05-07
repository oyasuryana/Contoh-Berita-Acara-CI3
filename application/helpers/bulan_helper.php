<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Bulan Indonesia Helper
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author	oyazhuryachna
 * @link	http://ozs.web.id
 */
if ( ! function_exists('bulan_helper'))
{
	function bulan_indonesia($bulan)
	{
		$nama_bulan = array(
		'01'=>'januari',
		'02'=>'februari',
		'03'=>'maret',
		'04'=>'april',
		'05'=>'mei',
		'06'=>'juni',
		'07'=>'juli',
		'08'=>'agustus',
		'09'=>'september',
		'10'=>'oktober',
		'11'=>'nopember',
		'12'=>'desember'		
		);
		return $nama_bulan[$bulan];
	}
}
?>
