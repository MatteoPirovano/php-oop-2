<?php
  class Book {
    public $name; 
    public $author; 

    public function __construct($name="", $author="") {
      $this->name = $name;
      $this->author= $author;
    }
  }
  
  class IsbnBook extends Book {
    public $isbn; 
    public function __construct($name="", $author="", $isbn="") {
      $this->isbn = $isbn;
    }
  }
  class TextBook extends IsbnBook {
    public $sconto;
    public $year; 
    function __construct($isbn="", $sconto=0, $year="") {
      $this->sconto= $sconto;
      $this->year = $year;
    }
    public  function setSconto($year)
    {
      if ($year > 1900) {
        $this->sconto = 30;
      }
    }
    public function getSconto()
    {
      $this->sconto;
    }
  }

$nameBook = "donne";
$authorBook = "Charles Bukowski";

$secondBook = new TextBook($nameBook, $authorBook, 1978, 8877467614);
$secondBook->name = "Donne";
$secondBook->author = "Charles Bukowski";
$secondBook->year = "1978";
$secondBook->isbn = "8877467614";
$secondBook ->setSconto($secondBook ->year);
$sconto= $secondBook->getSconto();

var_dump($secondBook);


