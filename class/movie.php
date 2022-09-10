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
   $film1 = new movie('1','Pirati Dei Caraibi','ai confini del mare','azione,avventura','Rob Kidd');
   $film2 = new movie('2','Pirati Dei Caraibi','la maledizione di Salazar','azione,avventura','Rob Kidd');
   
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