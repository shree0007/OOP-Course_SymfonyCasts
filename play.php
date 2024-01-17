<?php

class Ship{
public $name;
public $weaponPower=0;
public $jediFactor=0;
public $strength=0;

public function sayHello(){
echo 'Hello';
}
public function getName(){
    return $this->name;
}

public function getNameAndSpace($useShortFormat){
    if($useShortFormat){
        return sprintf(
            '%s: %s/%s/%s',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength,
        );
    }else{
        return sprintf(
            '%s: w:%s,j:%s,s:%s',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength,
        );
    }
  
}

public function doesGivenShipHaveMoreStrength($givenShip){
    return $givenShip->strength > $this->strength;
}

}

function printShipSummary($someShip){
    echo "Ship name: ". $someShip->name;
echo '<hr/>';
$someShip->sayHello();
echo '<hr/>';
echo $someShip->getName();
echo '<hr/>';
var_dump($someShip->weaponPower);
echo '<hr/>';
echo $someShip->getNameAndSpace(false);
echo '<hr/>';
echo $someShip->getNameAndSpace(true);
}

$myship=new Ship();
$myship->name='Jedi Starship';
$myship->weaponPower=10;


$otherShip=new Ship();
$otherShip->name='Imperial Shuttle';
$otherShip->weaponPower=5;
$otherShip->strength=50;

printShipSummary($myship);
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if($myship->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name.' has more strength';
}else{
    echo $myship->name. ' has more strength';
}

