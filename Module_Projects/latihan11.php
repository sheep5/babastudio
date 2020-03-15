<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>When is Your Birthday?</title>
</head>

<body>
  <form id="birthday" name="birthday" method="post">
    <select id="day" name="day">
      <option value="">Day:</option>
      <?php for ($day=1;$day<=31;$day++) {?>
      <option value="<?php echo $day; ?>">
        <?php echo $day; ?>
      </option>
	  <?php } ?>
    </select> &nbsp; &nbsp;
    <select id="month" name="month">
      <option value="">Month:</option>
      <?php $monthname=array ("January","February","March","April","May","June","July","August","September","October","November","December")
	  ?>
      <?php for ($month=1;$month<=12;$month++) {?>
      <option value="<?php echo $month; ?>">
        <?php echo $monthname[$month-1]; ?>
      </option>
      <?php } ?>
    </select> &nbsp; &nbsp;
    <select id="year" name="year">
      <option value="">Year:</option>
      <?php for ($year=2003;$year>=1943;$year--) {?>
      <option value="<?php echo $year; ?>">
        <?php echo $year; ?>
      </option>
      <?php } ?>
    </select>
  </form>
</body>
</html>