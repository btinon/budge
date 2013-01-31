<?php

// remove empties from post var
$c=0;
$x=0;
$_POST=array_filter($_POST);
foreach($_POST as $key=>$value)
{
  if (substr($key,0,-1) == "credit")
  {
    $c++;
  }
  elseif (substr($key,0,-1) == "expense")
  {
    $x++;
  }
}

echo "<br /><br />";
echo "<br /><br />";
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

$expense=array();
$expamt=array();
for ($xc=0;$xc<$x;$xc++)
{
  $convert="expense" . $xc;
  $convert2="expamt" . $xc;
  $expense[$xc]=$_POST[$convert];
  $expamt[$xc]=$_POST[$convert2];
}

// display form vars (debugging only)
for ($d=0; $d<$c; $d++)
{
  echo $credit[$d] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $credamt[$d] . "<br />";
}

echo "<br /><br />";
for ($de=0;$de<$x;$de++)
{
  echo $expense[$de] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $expamt[$de] . "<br />";
}

// add data to dbase

// confirm write

// return to form