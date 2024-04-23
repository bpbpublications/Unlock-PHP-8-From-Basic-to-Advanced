<?php 
class Book {
    private string $title;
    private string $author;

    public function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function getAuthor() : string {
        return $this->author;
    }
}

class BookPrinter {
    public function print(Book $book) : string{
        return $book->getTitle() . " by " . $book->getAuthor();
    }
}
