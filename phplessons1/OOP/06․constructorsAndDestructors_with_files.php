<?php

class FileOperations
{
	public $file;
	public $filePath;
	public function __construct($filePath)
	{
		echo "Բարև Աշխարհ";
		$this->filePath=$filePath;
		$this->file = fopen($filePath, "a");
	}

	public function __toString()
	{
		return __CLASS__." | file:".$this->filePath;
	}

	public function writeToFile($text)
	{
		fwrite($this->file, $text);
	}

	public function writeHeading($text,$level)
	{
		$h = "<h$level>".$text."</h$level>";
		fwrite($this->file, $h);
	}

	public function writePar($text)
	{
		$p = "<p>".$text."</p>";
		fwrite($this->file, $p);
	}

	public function __destruct()
	{
		echo "<br>Հաջողություն Աշխարհ";
		fclose($this->file);
	}

}

$fileOps = new FileOperations("text.txt");
$fileOps->writeHeading("Վերնագիր",1);
$fileOps->writePar("Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:");
$fileOps->writeHeading("ԵնթաՎերնագիր",2);
$fileOps->writePar("Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:");

echo "<br>".$fileOps;

//Եթե unset չլինի, օբյեկտը կազմաքանդվում է ծրագրի ավարտին
unset($fileOps);

echo "<br>Ծրագրի վերջը";
?>

