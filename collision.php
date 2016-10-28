<?php
$rond= ['x'=>150,'y'=>150,'rayon'=>100];
$point = ["x"=>rand(0,300),"y"=>rand(0,300)];

function is_colide_circle($xc,$yc,$xp,$yp,$rayon){
	$width=$xp-$xc;
	$height=$yp-$yc;
	$hypothenuse=sqrt($width*$width+$height*$height);
	if ($hypothenuse>$rayon) {
		echo "non touché";
		return false;
	}
	else{
		echo "touché";
		return true;
	}
}

echo is_colide_circle($rond["x"],$rond["y"],$point["x"],$point["y"],$rond["rayon"]);
?>
<html>
	<div id="wrap">
	    <svg width="900" height="900">
	        <circle cx=<?php echo $rond["x"]?> cy=<?php echo $rond["y"]?>  r=<?php echo $rond["rayon"]?>  fill="black" />
	        <circle cx=<?php echo $rond["x"]?> cy=<?php echo $rond["y"]?> r=<?php echo $rond["rayon"]/1.5?> fill="blue" />
	        <circle cx=<?php echo $rond["x"]?> cy=<?php echo $rond["y"]?> r=<?php echo $rond["rayon"]/3?> fill="red" />
	        <circle cx=<?php echo $rond["x"]?> cy=<?php echo $rond["y"]?> r=<?php echo $rond["rayon"]/7?> fill="yellow" />
	        <circle cx=<?php echo $point["x"]?> cy=<?php echo $point["y"]?>  r="3"  fill="#0f0" />
	    </svg>
	</div>
</html>