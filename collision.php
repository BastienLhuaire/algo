<?php
$rond= ['x'=>150,'y'=>150,'rayon'=>100];
$point = ["x"=>55,"y"=>105];

function is_colision_circle($xc,$yc,$xp,$yp,$rayon){
	$width=$xc-$yc;
	$height=$xp-$yp;
	$hypothenuse=sqrt($width*$width+$height*$height);
	if ($hypothenuse>$rayon) {
		return "non touché";
	}
	else{
		return "touché";
	}
}

echo is_colision_circle($rond["x"],$rond["y"],$point["x"],$point["y"],$rond["rayon"]);
?>
<html>
	<div id="wrap">
	    <svg width="900" height="900">
	        <circle cx=<?php echo $rond["x"]?> cy=<?php echo $rond["y"]?>  r=<?php echo $rond["rayon"]?>  fill="#86d8ef" />
	        <circle cx=<?php echo $point["x"]?> cy=<?php echo $point["y"]?>  r="3"  fill="#000" />
	    </svg>
	</div>
</html>