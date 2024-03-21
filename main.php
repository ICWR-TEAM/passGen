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

		if( php_sapi_name() == "cli" ){

			// parse
			$options = getopt("c:h", ["char::"]);
			$count_char = @$options["c"];
			$chare = @$options["char"] ? str_split( @$options["char"] ) : $this->arr;

			if( isset($options["h"])){
				echo "php main.php -n 'count-character' --char='character'\n";
				echo "   -c 'count-character' Default 12 Character\n";
				echo "   --char='character' Default 0-9a-Z and Symbols\n";
				exit();
			}

			if( isset($count_char) || !$count_char){
				echo "*********************************\n";
				echo "        Password Generator       \n";
				echo "*********************************\n";
                $this->proc_terminal($count_char ? $count_char : 12, $chare);
				exit();
			}

		}

	}
	public function proc_terminal($count_char, $chare)
	{
		if ($count_char) {
			$jumlah_char = $count_char;
			$res_char = "";
			for($i=0; $i<=(int)$jumlah_char-1; $i++){
				$rand = rand(0,count($chare)-1);
				$res_char .= $chare[$rand];
			}
			echo "How Many Characters: " . $count_char . "\n";
			echo "Result: " . $res_char . "\n";
		}else {
			echo "Use numbers!\n";
		}
	}

	function proc_website($char = false, $count = 12)
	{
		if(!is_numeric($count)){
			return "The number of characters must be a number";
			exit();
		}

		$character = $char ? str_split($char) : $this->arr;
		if($character && $count){
			$res_char = "";
			for ($i=0; $i < (int)$count; $i++) { 
				$rand = rand(0, count($character)-1);
				$res_char .= $character[$rand];
			}
			return $res_char;
		}
	}
}


if(php_sapi_name() == "cli")
{
	$call_main = new Main();
}
?>
