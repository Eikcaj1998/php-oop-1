<?php
   class Movie 
   {
    public $id;
    public $title;
    public $sub_title;
    public $genre;
    public $author;
    public function  __construct($id, $title, $sub_title, $genre, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->sub_title = $sub_title;
        $this->genre = $genre;
        $this->author = $author;
    }
   }
   $films = [];
   $films[]= new Movie('1', 'Pirati Dei Caraibi', 'ai confini del mare','azione,avventura','Rob Kidd');
   $films[] = new Movie('2', 'Pirati Dei Caraibi', 'la maledizione di Salazar','azione,avventura','Rob Kidd');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($films as $film) { ?>
            <li>
                <?php echo $film->title . " - " . $film->sub_title . " - " . $film->genre . " - " . $film->author ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>