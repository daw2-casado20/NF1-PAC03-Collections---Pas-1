<?php
require_once("observable.php");
require_once("abstract_widget.php");
require_once("class.collection.php");

class KeyInvalidException extends Exception{}

$dat = new DataSource();
$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat2 = new DataSource();
$widgetC = new AdriWidget();
$widgetE = new AdriWidget2();


$models = new Collection();
$models->addItem($dat,"d1");
$models->addItem($dat2,"d2");

$widgets = new Collection();
$widgets->addItem($widgetA, "w1");
$widgets->addItem($widgetB, "w2");
$widgets->addItem($widgetC, "w3");
$widgets->addItem($widgetE, "w4");

$m1=$models->getItem("d1");
$m1->addObserver($widgets->getItem("w1"));
$m1->addObserver($widgets->getItem("w2"));


$m2=$models->getItem("d2");
$m2->addObserver($widgets->getItem("w3"));
$m2->addObserver($widgets->getItem("w4"));


/*$widgetA->addObserver($widgets->getItem($widgetA, "w1"));
$widgetB->addObserver($widgets->getItem($widgetB, "w2"));
$widgetC->addObserver($widgets->getItem($widgetC, "w3"));
$widgetE->addObserver($widgets->getItem($widgetE, "w4"));*/

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

$dat->addRecord("drum", "$12.95", 1955, "red", "spain");
$dat->addRecord("guitar", "$13.95", 2003, "red", "spain");
$dat->addRecord("banjo", "$100.95", 1945, "red", "spain");
$dat->addRecord("piano", "$120.95", 1999, "red", "spain");

$widgetA->draw();
$widgetB->draw();

//



$dat2->addObserver($widgetC);
$dat2->addObserver($widgetE);

$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);


$widgetC->draw();
$widgetE->draw();

$obj1=$widgets->getItem("w1");
$obj2=$widgets->getItem("w2");
$obj3=$widgets->getItem("w3");
$obj4=$widgets->getItem("w4");

$obj1->draw();
$obj2->draw();
$obj3->draw();
$obj4->draw();
?>
