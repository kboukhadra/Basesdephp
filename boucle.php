<?php
/**
 * Created by PhpStorm.
 * User: Khalid_Mac
 * Date: 11/03/15
 * Time: 07:37
 */
$nb = 184 ;
$compteur =0 ;
$x=rand(1,10000) ;

while($x%$nb!=0){
    $x=rand(1,10000);
    $compteur++ ;


}
echo " $x est muliple de $nb au bout de $compteur fois" ;
