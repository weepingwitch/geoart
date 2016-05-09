<?php
mt_srand(intval($_GET['s']));
$Width = 32   ;
$Height = 32;

$Image = imagecreatetruecolor($Width, $Height);
for($Row = 1; $Row <= $Height; $Row++) {
    for($Column = 1; $Column <= $Width; $Column++) {
        $Red = mt_rand(100,105);
        $Green = mt_rand(100,105);
        $Blue = mt_rand(200,255);
        $Colour = imagecolorallocate ($Image, $Red , $Green, $Blue);
        imagesetpixel($Image,$Column - 1 , $Row - 1, $Colour);
    }
}

//island paths branching from the center
for ($p=0; $p <= mt_rand(6,12); $p++){
    //start at the center
    $x = 16;
    $y = 16;
    //take a random number of "steps"
    for($c=0; $c <= mt_rand(45,95); $c++){
        //each step, randomly move from current square
        $x = $x - 2 + mt_rand(1,3);
        $y = $y - 2 + mt_rand(1,3);
        //turn new square into land
        $land = imagecolorallocate($Image,mt_rand(200,205),mt_rand(150,200),mt_rand(100,105));
        imagesetpixel($Image,$x,$y,$land);

    }
}
// ~random~ small island parts, doing the same thing but from random position
for ($p=0;$p<=mt_rand(2,5);$p++){
    $x = 16;
    $y = 16;
    for($c=0; $c <= mt_rand(45,95); $c++){
        $x = $x - 2 + mt_rand(1,3);
        $y = $y - 2 + mt_rand(1,3);
        $land = imagecolorallocate($Image,mt_rand(200,205),mt_rand(150,200),mt_rand(100,105));
        imagesetpixel($Image,$x,$y,$land);

    }
}





header('Content-type: image/png');
imagepng($Image);
?>
