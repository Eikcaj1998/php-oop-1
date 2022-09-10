<?php
   class movie 
   {
    public $id;
    public $title;
    public $sub_title;
    public $genre;
    public $author;
    public function  __construct($id,$title,$sub_title,$genre,$author)
   }
   $film1 = new movie();
   $film2 = new movie();
   
   $film1->id = '1';
   $film1->title = 'Pirati Dei Caraibi';
   $film1->sub_title = 'ai confini del mare';
   $film1->genre = 'azione,avventura';
   $film1->author = 'Rob Kidd';

   $film1->id = '2';
   $film1->title = 'Pirati Dei Caraibi';
   $film1->sub_title = 'la maledizione di Salazar';
   $film1->genre = 'azione,avventura';
   $film1->author = 'Rob Kidd';
?>