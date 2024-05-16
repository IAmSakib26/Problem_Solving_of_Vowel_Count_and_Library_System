<?php
class Book{
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
     }
     
    public function getTitle (){
        return $this->title;
    }
    
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    
    public function borrowBook(){
        if($this->availableCopies > 0){
            
            $this->availableCopies--;
            return "Successfully borrowed {$this->title}.";
        }else {
          return "There are no available copies of {$this->title}.";
        }
    }
    
    public function returnBook(){
        $this->availableCopies++;
        return "Successfully returned {$this->title}.";
    }
}

class Member{
    private $name;
    
     public function __construct($name) {
        $this->name = $name;
     }
     
     public function getName (){
        return $this->name;
     }
    
     public function borrowBook(Book $book) {
        return $book->borrowBook();
      }
    
      public function returnBook(Book $book) {
        return $book->returnBook();
      }
}
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$message1 = $member1->borrowBook($book1);
$message2 = $member2->borrowBook($book2);

echo "**Available Books:**\n";
echo "- {$book1->getTitle()}: {$book1->getAvailableCopies()} copies\n";
echo "- {$book2->getTitle()}: {$book2->getAvailableCopies()} copies\n";

echo "\n**Borrowing Messages:**\n";
echo "- {$member1->getName()}: {$message1}\n";
echo "- {$member2->getName()}: {$message2}\n";