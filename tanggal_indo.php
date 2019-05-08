<?php

$input = "2019-10-23";


function tanggal_indo($input="",$delimeter="-")
{
	if (empty($input)) 
	{
		return "";
	}
	else
	{
		if ($delimeter=="-") 
		{
			$input_date = explode("-", $input);
		}
		elseif ($delimeter=="/")
		{
			$input_date = explode("/", $input);
		}
		$tahun = $input_date[0];
		$bulan = $input_date[1];
		$tanggal = $input_date[2];

		$array_bulan["1"] = "Januari";
		$array_bulan["01"] = "Januari";
		$array_bulan["2"] = "Februari";
		$array_bulan["02"] = "Februari";
		$array_bulan["3"] = "Maret";
		$array_bulan["03"] = "Maret";
		$array_bulan["4"] = "April";
		$array_bulan["04"] = "April";
		$array_bulan["5"] = "Mei";
		$array_bulan["05"] = "Mei";
		$array_bulan["6"] = "Juni";
		$array_bulan["06"] = "Juni";
		$array_bulan["7"] = "Juli";
		$array_bulan["07"] = "Juli";
		$array_bulan["8"] = "Agustus";
		$array_bulan["08"] = "Agustus";
		$array_bulan["9"] = "September";
		$array_bulan["09"] = "September";
		$array_bulan["10"] = "Oktober";
		$array_bulan["11"] = "November";
		$array_bulan["12"] = "Desember";

		return $tanggal.$delimeter.$array_bulan[$bulan].$delimeter.$tahun;

	}
}

echo tanggal_indo("2010-3-10","-");

?>