<?php

function loop($input=[],$add=[],$pos=[])
{
  define('COUNT',count($add));
  function myfunction($v, $w)
  {
    return(COUNT*$v) + $w +1;


  }
  $map= array_map('myfunction',array_keys($pos),$pos);

for($i=0;$i<count($pos);$i++)
{
  if(!isset($combine))
  {
  $slice=array_slice($input,0,$map[$i]);
  $index=$pos[$i]+1;
  $combine=array_merge(array_merge($slice,$add), array_slice($input,$index));

}
else {

  $slice=array_slice($combine,0,$map[$i]);
  $index=$pos[$i]+1;
  $combine=array_merge(array_merge($slice,$add), array_slice($input,$index));
}
}

return $combine;
}

//demo
$input=[40,50,60,70,80,90,200];
$add=[1,2,3,7];
$pos=[array_search(40,$input),array_search(200,$input)];
print_r( loop($input,$add,$pos));
 ?>
