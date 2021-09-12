<?php

class Application

{

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        //todo
    }

    private function rent_video()
    {
        //todo
    }

    private function return_video()
    {
        //todo
    }

    private function list_inventory()
    {
       return VideoStore::getInventory();
    }
}

class VideoStore
{
    private string $inventory;


    public function __construct(string $inventory)
{

    $this->inventory = $inventory;
}

    public static function getInventory(): string
    {
        return Video::videos();

    }

    public function setInventory(string $inventory): void
    {
        $this->inventory =$inventory ;

    }

}


class Video
{


    private string $title;
    private string $flag;
    private float $raiting;

    public function __construct(string $title, string $flag, float $raiting)
{

    $this->title = $title;
    $this->flag = $flag;
    $this->raiting = $raiting;
}

    public function setFlag(string $flag): void  //vai iznjemtas
    {
        $this->flag = $flag;
    }

    public function getFlag(): string   /// vai atgrieztas
    {
        return $this->flag;
    }

    public function setRaiting(float $raiting): void   // iemochit reitingu
    {
        $this->raiting = $raiting;
    }
 public function videos()
 {$video=[
     new Video('The Matrix','+',7.8),
     new Video('Godfather II','+',4),
     new Video('Star Wars Episode IV: A New Hope','-',4),

 ];
     foreach ($video as $vide)
     {
         echo $vide->videos();
     }
     return "$this->title /$this->flag/$this->raiting";

 }

}


$app = new Application();
$app->run();