<?php
 class Beer{
    private int $BeerId;
    private string $name;
    private string $type;
    //   private string $city;
    //   private string $state ;
    //   private string $date;
    private float $totalP;
    private float $price = 59;
    private float $num;

    // getters and setters
    function getBeerId()
    {
        return $this->BeerId;
    }
    function getName()
    {
        return $this->name;
    }
    function getType()
    {
        return $this->type;
    }
    function getTotalP()
    {
        return $this->totalP;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getNum()
    {
        return $this->num;
    }

    //setters
    function setBeerId($n)
    {
        $this->BeerId = $n;
    }
    function setName($n)
    {
        $this->name = $n;
    }
    function setType($n)
    {
        $this->type = $n;
    }
     function setTotalP(){
      $this->totalP=  $this->num * $this->price;
     }
    function setNum($n)
    {
        $this->num = $n;
    }
}
