<?php
class Point{

    private  int $x;
    private int $y;

    public function __construct(int $x,int $y)
    {
      $this->x=$x;
      $this->y=$y;

    }

    public function getX():int
    {
        return $this->x;
    }
    public function getY():int
    {
        return $this->y;
    }
    public function setX($x)
    {
        $this->x=$x;
    }
    public function setY($y)
    {
        $this->y=$y;
    }




}
class Points
{
    private Point $first;
    private Point $second;

    public function __construct(Point $first,Point $second)
    {

        $this->first=$first;
        $this->second=$second;
    }
    public function swap()
    {
        $X=$this->first->getX();
        $Y=$this->first->getY();
        $this->first->setX($this->second->getX());
        $this->first->setY($this->second->getY());
        $this->second->setX($X);
        $this->second->setY($Y);

    }


}

$x = new Point(5, 2);
$y = new Point(-3, 6);


$points =new Points($x,$y);
$points->swap();
echo "({$x->getX()},{$x->getY()})".PHP_EOL;
echo "({$y->getX()},{$y->getY()})".PHP_EOL;