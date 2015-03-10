<?php
/**
 * Created by PhpStorm.
 * User: Khalid_Mac
 * Date: 10/03/15
 * Time: 18:21
 */
/*
$compteur =0 ;

do {
 $nombre1 =rand(1,1000) ;
 $nombre2 =rand(1,1000) ;
 $nombre3 =rand(1,1000) ;
    $compteur++ ;
    echo $nombre1.' , '.$nombre2.' , '.$nombre3.'</br>';

}
while($nombre1%2==1 AND $nombre2%2==0 AND $nombre3%2==0);
echo $nombre1.' , '.$nombre2.' , '.$nombre3." au bout de ".$compteur.' coup';
*/
$compteur=0;
/*do
{
    $x=rand(1,100);
    $y=rand(1,100);
    $z=rand(1,100);
    $compteur++;

}
while( !($x%2==0) OR (!($y%2==1) AND ($y<$x) ) OR !($z%2==1) );
echo $x.",".$y. "," .$z." en ".$compteur.' fois';
echo'</br>';*/


do
{
    $x=rand(1,100);
    $y=rand(1,100);
    $z=rand(1,100);

    $compteur++;

}
while( (($x>$y) OR ($x%2==1) ) OR   (($y>$z) OR ($y%2==0) )  OR ($z%2==0)    ) ;
echo $x.' , '.$y.' , '.$z ;
echo'</br>';

?>
