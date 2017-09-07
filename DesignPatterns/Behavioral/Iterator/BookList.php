<?php
namespace DesignPatterns\Behavioral\Iterator;

class BookList implements \Countable, \Iterator {
    /**
     * @var Book[]
     */
    private $books = [];
    
    private $currentIndex = 0;
    
    public function addBook(Book $book) {
        $this->books[] = $book;
    }
    
    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }
    
    public function count(): int {
        return count($this->books);
    }
    
    public function current() {
        return $this->books[$this->currentIndex];
    }
    
    public function key(): int {
        return $this->currentIndex;
    }
    
    public function next() {
        $this->currentIndex++;
    }
    
    public function rewind() {
        $this->currentIndex = 0;
    }
    
    public function valid(): bool {
        return isset($this->books[$this->currentIndex]);
    }
}