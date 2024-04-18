<?php
class BeerDAO{
  private static $_db;
  
  static function initialize()
  {
    self::$_db = new PDOService("Beer");    
  }
  
  static function getBeers()
  {
     $sql = 'SELECT * FROM beer';
    
    self::$_db-> query($sql);
    self::$_db->execute();
    
    return self::$_db->resultset();
  }
}

