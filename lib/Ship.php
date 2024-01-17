<?php

class Ship{
private $name;
private $weaponPower=0;
private $jediFactor=0;
private $strength=0;

public function sayHello(){
echo 'Hello';
}
public function getName(){
    return $this->name;
}

public function getNameAndSpecs($useShortFormat = false){
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

//setter for strength
public function setStrength($strength){
    if(!is_numeric($strength)){
        throw new Exception('Invalid strength passed'.$strength);
    }
    $this->strength=$strength;
}
//getter for strength
public function getStrength(){
    return $this->strength;
}


/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}

/**
 * Get the value of weaponPower
 */ 
public function getWeaponPower()
{
return $this->weaponPower;
}

/**
 * Set the value of weaponPower
 *
 * @return  self
 */ 
public function setWeaponPower($weaponPower)
{
$this->weaponPower = $weaponPower;

return $this;
}

/**
 * Get the value of jediFactor
 */ 
public function getJediFactor()
{
return $this->jediFactor;
}

/**
 * Set the value of jediFactor
 *
 * @return  self
 */ 
public function setJediFactor($jediFactor)
{
$this->jediFactor = $jediFactor;

return $this;
}
}

