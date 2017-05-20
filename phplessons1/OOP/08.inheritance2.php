<?php
class parallelogram
{
public $typename="զուգահեռագիծ";
 public $k1;
public $k2;
public $name;

public function __construct($name,$a,$b)
	{
		$this->name = $name;
		$this->k1 = $a;
		$this->k2 = $b;

		echo "<br>ստեղծված ".$this->name.$this->typename." տիպի է";
			}

public function perimeter()
{
if ($this->k1 == $this->k2)
		echo "<br>պարագիծը = ".( 4 * $this->k1 );
	else 
		echo "<br>պարագիծը = ".( 2*( $this->k1 + $this->k2 ));
}

}	

class rectangle extends parallelogram
{
	public $name;
	public $s1;
	public $s2;
	
	public function __construct($name,$s1,$s2)
	{
		$this->name=$name."ը  ";
		$this->s1=$s1;
		$this->s2=$s2;
		echo "<br>".$name." ստեղծվեց";
		parent::__construct($this->name,$this->s1,$this->s2);
	}
	
	public function square()
	{ 
		echo "<br>մակերեսը = ".$this->s1*$this->s2;
	}
	
	public function __destruct()
	{
		echo "<br>".$this->name."ոչնչացվեց";
	}
}

class square extends parallelogram
{
	public $name;
	public $s1;
	
	public function __construct($name,$s1)
	{
		$this->name=$name."ն  ";
		$this->s1=$s1;
		echo "<br>".$name." ստեղծվեց";
		parent::__construct($this->name,$s1,$s1);
	}
	
	public function square()
	{
	echo "<br>մակերեսը = ".$this->s1*$this->s1; 
	}
	
	public function __destruct()
	{
		echo "<br>".$this->name."ոչնչացվեց";
	}
}

class  rhombus extends parallelogram
{
	public $name;
	public $s1;
	public $s2;
	
	public function __construct($name,$s1,$s2,$d1,$d2)
	{
		$this->name=$name."ը  ";
		$this->d1=$d1;
		$this->d2=$d2;
		echo "<br>".$name." ստեղծվեց";
		parent::__construct($this->name,$s1,$s2);
	}
	
	public function square()
	{ 
		echo "<br>մակերեսը = ".($this->d1*$this->d2)/2;
	}
	
	public function __destruct()
	{
		echo "<br>".$this->name."ոչնչացվեց";
	}
}


$rect=new rectangle("ուղղանկյուն",10,15);
echo $rect->perimeter();
echo $rect->square();
echo "<br><br>";

$sqr=new square("քառակուսի",10);
echo $sqr->perimeter();
echo $sqr->square();
echo "<br><br>";

$romb=new rhombus("շեղանկյուն",10,15,20,25);
echo $romb->perimeter();
echo $romb->square();
echo "<br><br>";

?>