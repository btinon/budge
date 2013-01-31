<?php



// get form counter vars
$c=$_POST['cnum'];
$x=$_POST['enum'];

// loop to get each form var
$credit=array();
$credamt=array();
for ($cc=0;$cc<$c; $cc++)
{
  $convert="credit" . $cc;
  $convert2="credamt" . $cc;
  $credit[$cc]=$_POST[$convert];
  $credamt[$cc]=$_POST[$convert2];
}


// display form vars (debugging only)
for ($d=0; $d<$c; $d++)
{
  echo $credit[$d] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $credamt[$d] . "<br />";
}

// add data to dbase

// confirm write

// return to form