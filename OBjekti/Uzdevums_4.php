<?php
/*
The class Movie is started below. An instance of class Movie represents a film. This class has the following three class variables:

    title, which is a string representing the title of the movie
    studio, which is a string representing the studio that made the movie
    rating, which is a string representing the rating of the movie (i.e. PG­13, R, etc)

    Write a constructor for the class Movie, which takes the title of the movie, studio, and rating as its arguments,
and sets the respective class variables to these values.

Write a method GetPG, which takes an array of base type Movie as its argument,
 and returns a new array of only those movies in the input array with a rating of "PG".
 You may assume the input array is full of Movie instances. The returned array may be empty.
*/

class Movie
{
private string $title;
    private string $studio;
    private string $rating;
    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title=$title;
        $this->studio=$studio;
        $this->rating=$rating;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function setRating(string $rating): void
    {
        $this->rating = $rating;
    }

    public function setStudio(string $studio): void
    {
        $this->studio = $studio;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function GetPG($movies)
    {
        if($this->rating==='PG'){
            return $movies;
        }

    }
    public function printMovies():string
    {

        return "with the title  $this->title ,the studio  $this->studio ,and the rating $this->rating ";
    }
}
$movies=[
    new Movie('Casino Royale','Eon Productions','PG­13'),
new Movie('Glass','Buena Vista International','PG­13'),
    new Movie('Spider Man Into the Spider-Verse','Columbia Pictures','PG')
];
foreach ($movies as $movie){
    echo "{$movie->printMovies()}".PHP_EOL;
}
foreach ($movies as $movie){
    echo "{$movie->GetPG('PG')}".PHP_EOL;
}