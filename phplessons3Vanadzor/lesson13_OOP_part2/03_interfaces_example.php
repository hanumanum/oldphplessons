<?php
	
interface ICompute {
	function compute();
	function storeData();
	function connect();
}

interface IShow{
	function show();
}

interface IImage{
	function takePhoto();
}


interface ITel{
	function call();
}

class phone implements ITel{
	function call($number){
		echo "զանգվում է $number";
	}
}


class smartPhone extends phone implements ICompute,IShow,Iimage{
	...
}

	
?>