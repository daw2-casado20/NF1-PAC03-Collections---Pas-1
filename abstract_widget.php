<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class BasicWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=5 bgcolor=#cccccc>
                        <b>Instrument Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $color = $this->internalData[3];
                $country =  $this->internalData[4];
                $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td><td>$color[$i]</td><td>$country[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=5 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td><td><b>color</b>
                </td><td><b>country</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $color = $this->internalData[3];
                $country =  $this->internalData[4];
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td><td>$color[$i]</td><td>$country[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

class AdriWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=2 width=430 height=200 bgcolor=#FF5733>";
         $html .= "<tr><td colspan=5 bgcolor=red border=2>
                        <b>Personas<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $color = $this->internalData[3];
                $country =  $this->internalData[4];
                $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td><td>$color[$i]</td><td>$country[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

class AdriWidget2 extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=green>
                <tr><td colspan=5 bgcolor=red>
                <b><span class=blue>Personas<span><b>
                </td></tr>
                <tr><td><b>nombre</b></td>
                <td><b>apellido</b></td><td><b>pais</b>
                </td><td><b>ciudad</b>
                </td><td><b>edad</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $color = $this->internalData[3];
                $country =  $this->internalData[4];
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td><td>$color[$i]</td><td>$country[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>
