<?php
abstract class Observable {

  private $observers = array();

  public function addObserver(Observer $observer) {
         array_push($this->observers, $observer);
  }

  public function notifyObservers() {
         for ($i = 0; $i < count($this->observers); $i++) {
                 $widget = $this->observers[$i];
                 $widget->update($this);
         }
     }
}


class DataSource extends Observable {

  private $names;
  private $prices;
  private $years;
  private $color;
  private $country;

  function __construct() {
         $this->names = array();
         $this->prices = array();
         $this->years = array();
         $this->color = array();
         $this->country = array();
  }

  public function addRecord($name, $price, $year, $color, $country) {
         array_push($this->names, $name);
         array_push($this->prices, $price);
         array_push($this->years, $year);
         array_push($this->color, $color);
         array_push($this->country, $country);
         $this->notifyObservers();
  }

  public function getData() {
         return array($this->names, $this->prices, $this->years, $this->color, $this->country);
  }
}
?>
