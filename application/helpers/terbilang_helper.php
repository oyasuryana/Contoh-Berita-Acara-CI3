<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Terbilang Helper
 *
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Gede Lumbung
 * @link		http://gedelumbung.com
 * recoded 		oyazhuryachna
 * @link		http://ozs.web.id
 */
if ( ! function_exists('terbilang_helper'))
{
function terbilang($number)
{
 $words = "";
 $arr_number = array(
 "",	"satu",	"dua",	"tiga",	"empat","lima",	"enam",	"tujuh", 
 "delapan",	"sembilan",	"sepuluh",	"sebelas");
 if($number<12)	{	$words = " ".$arr_number[$number];}
 else if($number<20)
 { 	$words = terbilang($number-10)." belas"; }
 else if($number<100)
 {	$words = terbilang($number/10)." puluh ".terbilang($number%10);	}
 else if($number<200)
 {	$words = "seratus ".terbilang($number-100);		}
 else if($number<1000)
 {	$words = terbilang($number/100)." ratus ".terbilang($number%100); }
 else if($number<2000)
 {	$words = "seribu ".terbilang($number-1000);	}
 else if($number<1000000)
 {	$words = terbilang($number/1000)." ribu ".terbilang($number%1000); }
 else if($number<1000000000)
 {	$words = terbilang($number/1000000)." juta ".terbilang($number%1000000);}
 else {	$words = "undefined"; }
	return trim($words); }
}
?>
