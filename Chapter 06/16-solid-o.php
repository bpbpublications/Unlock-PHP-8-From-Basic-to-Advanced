<?php 
interface BookFormat {
    public function format(Book $book) : string;
}

class JSONBookFormat implements BookFormat {
    public function format(Book $book) : string {
        return json_encode(['title' => $book->getTitle(), 'author' => $book->getAuthor()]);
    }
}

class XMLBookFormat implements BookFormat {
    public function format(Book $book) : string {
        return "<book><title>" . $book->getTitle() . "</title><author>" . $book->getAuthor() . "</author></book>";
    }
}