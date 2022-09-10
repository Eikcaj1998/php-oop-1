<?php
   class movie 
   {
    public $id;
    public $title;
    public $sub_title;
    public $genre;
    public $author;
    public function  __construct($id,$title,$sub_title,$genre,$author)
    {
        $this->id = $id;
        $this->title = $title = 'Pirati Dei Caraibi';
        $this->sub_title = $sub_title;
        $this->genre  = 'azione,avventura';
        $this->author = 'Rob Kidd';
    }
   }
   $film1 = new movie('1',$title,'ai confini del mare',$genre,$author);
   $film2 = new movie('2',$title,'la maledizione di Salazar',$genre,$author);
   

?>