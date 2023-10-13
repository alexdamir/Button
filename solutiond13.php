<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}
//--------------------------------------------------------------------------------------------------------

class MyBook extends Book {
    private $price;
  
    function __construct($title, $author, $price) {
        parent::__construct(trim($title), trim($author));
        $this->price = trim($price);
    }
    

    function display() {
        printf("Title: %s\n", $this->title);
        printf("Author: %s\n", $this->author);
        printf("Price: %d\n", $this->price);
    }

}
//--------------------------------------------------------------------------------------------------------
$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>