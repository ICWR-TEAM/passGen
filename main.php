<?php
class Main
{
	private $lower;
	private $upper;
	private $num;
	private $symb;
	private $join;
	private $arr;
	function __construct()
	{
		// variable
		$this->lower = "abcdefghijklmnopqrstuvwxyz";
		$this->upper = strtoupper($this->lower);
		$this->num = 1234567890;
		$this->symb = "!@#$^&*_-+<>?";
		$this->join = $this->lower.$this->upper.$this->num.$this->symb;
		$this->arr = str_split($this->join);

		// exec
		echo "*********************************\n";
		echo "        Password Generator       \n";
		echo "*********************************\n";
		echo "How many characters: ";
		$count_char = (int) trim(fgets(STDIN));
		$this->proc($count_char);
	}
	public function proc($count_char)
	{
		if ($count_char) {
			$jumlah_char = $count_char;
			$char = "";
			for($i=0; $i<=$jumlah_char-1; $i++){
				$rand = rand(0,count($this->arr)-1);
				$char .= $this->arr[$rand];
			}
			echo "Result: ".$char."\n";
		}else {
			echo "Use numbers!\n";
		}
	}
}
new Main();
?>
