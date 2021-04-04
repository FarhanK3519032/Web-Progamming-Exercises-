<?php
	function hitungDenda($tglHarusKembali, $tglKembali){

		$jatuhTempo = new DateTime($tglHarusKembali);
		$tglDikembalikan = new DateTime($tglKembali);
		$diff = date_diff($jatuhTempo, $tglDikembalikan);
		$terlambat = $diff->format("%a")*3000;

		return $terlambat;

	}
	echo "Besarnya denda adalah : Rp.".hitungDenda("2021-01-03", "2021-01-05");

?>