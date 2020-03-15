<?php
  function indonesiandate($thedate) {
	  $day=substr($thedate,8,2);
	  $month=get_monthname(substr($thedate,5,2));
	  $year=substr($thedate,0,4);
	  $dateposted="$day $month $year";
	  return $dateposted;
  }
  function get_monthname($month) {
	  switch($month) {
		  case 1:
		  $monthname="Januari";
		  break;
		  case 2:
		  $monthname="Februari";
		  break;
		  case 3:
		  $monthname="Maret";
		  break;
		  case 4:
		  $monthname="April";
		  break;
		  case 5:
		  $monthname="Mei";
		  break;
		  case 6:
		  $monthname="Juni";
		  break;
		  case 7:
		  $monthname="Juli";
		  break;
		  case 8:
		  $monthname="Agustus";
		  break;
		  case 9:
		  $monthname="September";
		  break;
		  case 10:
		  $monthname="Oktober";
		  break;
		  case 11:
		  $monthname="November";
		  break;
		  case 12:
		  $monthname="Desember";
		  break;
	  }
	  return $monthname;
  }
?>