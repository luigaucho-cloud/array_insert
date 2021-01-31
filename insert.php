<?php

function myfunction($v, $w,$count )
{
  return($count*$v) + $w +1;

}
function loop($input=[],$add=[],$pos=[])
{
  for($w=0;$w<count($pos);$w++)
  {
  $count[]=count($add);
}
  $map= array_map('myfunction',array_keys($pos),$pos,$count);

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

//first demo 
$input=[40,50,60,70,80,90,200];
$add=[1,2,3,7];
$pos=[array_search(40,$input),array_search(200,$input)];
print_r( loop($input,$add,$pos));
echo'<br>';
//second demo
$input=[40,50,60,70,80,90,200];
$add=[1,2,3,7];
$pos=[array_search(50,$input),array_search(60,$input),array_search(200,$input)];
print_r( loop($input,$add,$pos));
 ?>
