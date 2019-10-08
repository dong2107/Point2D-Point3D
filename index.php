<?php
include 'Point2D.php';
include 'Point3D.php';
$point2D = new Point2D(2, 3);
echo $point2D->toString() . '<br>';
$point3D = new Point3D(2, 3, 4);
echo $point3D->toString();
