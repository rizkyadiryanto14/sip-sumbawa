<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('date_indo'))
{
	function date_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('bulan'))
{
	function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

if ( ! function_exists('shortdate_indo'))
{
	function shortdate_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = short_bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.'/'.$bulan.'/'.$tahun;
	}
}

if ( ! function_exists('short_bulan'))
{
	function short_bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "01";
				break;
			case 2:
				return "02";
				break;
			case 3:
				return "03";
				break;
			case 4:
				return "04";
				break;
			case 5:
				return "05";
				break;
			case 6:
				return "06";
				break;
			case 7:
				return "07";
				break;
			case 8:
				return "08";
				break;
			case 9:
				return "09";
				break;
			case 10:
				return "10";
				break;
			case 11:
				return "11";
				break;
			case 12:
				return "12";
				break;
		}
	}
}

if ( ! function_exists('mediumdate_indo'))
{
	function mediumdate_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = medium_bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.'-'.$bulan.'-'.$tahun;
	}
}

if ( ! function_exists('medium_bulan'))
{
	function medium_bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Jan";
				break;
			case 2:
				return "Feb";
				break;
			case 3:
				return "Mar";
				break;
			case 4:
				return "Apr";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Jun";
				break;
			case 7:
				return "Jul";
				break;
			case 8:
				return "Ags";
				break;
			case 9:
				return "Sep";
				break;
			case 10:
				return "Okt";
				break;
			case 11:
				return "Nov";
				break;
			case 12:
				return "Des";
				break;
		}
	}
}

if ( ! function_exists('longdate_indo'))
{
	function longdate_indo($tanggal, $waktu = '')
	{
		$pecah = explode(" ", $tanggal); // Memisahkan tanggal dan waktu
		$tgl = $pecah[0]; // Mendapatkan tanggal
		$waktu = isset($pecah[1]) ? $pecah[1] : ''; // Mendapatkan waktu jika ada

		$pecah = explode("-", $tgl); // Memisahkan tahun, bulan, dan tanggal
		$tgl = $pecah[2]; // Mendapatkan tanggal
		$bln = $pecah[1]; // Mendapatkan bulan
		$thn = $pecah[0]; // Mendapatkan tahun
		$bulan = bulan($bln); // Mengonversi angka bulan menjadi nama bulan dalam bahasa Indonesia

		// Mendapatkan nama hari dari tanggal lengkap (tahun-bulan-hari)
		$nama = date("l", strtotime($thn.'-'.$bln.'-'.$tgl));
		$nama_hari = "";
		switch ($nama) {
			case "Sunday":
				$nama_hari = "Minggu";
				break;
			case "Monday":
				$nama_hari = "Senin";
				break;
			case "Tuesday":
				$nama_hari = "Selasa";
				break;
			case "Wednesday":
				$nama_hari = "Rabu";
				break;
			case "Thursday":
				$nama_hari = "Kamis";
				break;
			case "Friday":
				$nama_hari = "Jumat";
				break;
			case "Saturday":
				$nama_hari = "Sabtu";
				break;
		}

		// tanggal, bulan, tahun, dan waktu
		$hasil = $nama_hari.', '.$tgl.' '.$bulan.' '.$thn;
		if ($waktu != '') {
			$hasil .= ', '.$waktu;
		}

		return $hasil;
	}
}

