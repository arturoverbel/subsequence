<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SubsequenceController extends Controller
{

	private $input = "";
	private $sequence = array();
	private $subsequences = array();
	private $lenght = 0;

	public function __construct() {
    }

	public function run( $input ){
		
		$this->input = $input;

		$lines = explode("\n", $this->input);

		$cases = $lines[0];

		$count = 1;
		$numLine = 0;

		$retorno = "";

		while ( true ) {
			

			$lenght = $lines[++$numLine];
			
			$s1 = explode( " ", $lines[++$numLine] );
			
			$s2 = explode( " ", $lines[++$numLine] );

			$sequence = array();
			for( $i = 0; $i < count($s1); $i++){
				$sequence[] = array( intval($s1[$i]), intval($s2[$i]) );
			}
			
			$this->sequence = $sequence;
			$this->lenght = count($this->sequence);

			$this->posibilites();

			$retorno .= $this->printSequence();

			$count++;
			if( $count > $cases ) break;
			
		}

		return $retorno;

	}

	private function posibilites( ){
		$subsequence[] = array(
				$this->sequence[0][0],
				$this->sequence[0][1],
				0
			);

		$this->addSubsequence( $subsequence );

		$this->recursiveBlock( $subsequence );

	}

	
	private function recursiveBlock( $array ){

		//print( "recursive: "); $this->printSeq( $array );

		for( $i = $array[count( $array )-1][2]; $i < $this->lenght; $i++ ){

			$subsequence = $this->nextNumberBlock( $array, $i );
			$result = $this->addSubsequence( $subsequence );

			if( $result ){
				//print( "PASS block: "); $this->printSeq( $subsequence ); print "\n";
			}else{
				//print( "NO block: "); $this->printSeq( $subsequence ); print "\n";
			}
			
			if( $subsequence !== false ){
				if( count( $subsequence )  ){
					$this->recursiveBlock( $subsequence );
				}
			}


		}
	}

	private function subsequenceBlock( $pos, $deny ){

		$sub = array();
		$sub[] = array(
				$this->sequence[$pos][0],
				$this->sequence[$pos][1],
				$pos
			);

		while( true ){
			$pos = $this->nextNumberBlock( $pos, $deny );

			if( $pos === false) break;

			$sub[] = array(
				$this->sequence[$pos][0],
				$this->sequence[$pos][1],
				$pos
			);
		}

		return $sub;

	}

	private function nextNumberBlock( $array, $since ){

		$lastNum = $array[  count($array) - 1 ];
		
		for( $i = $since; $i < $this->lenght; $i++ ){

			if( $this->sequence[ $i ][0] > $lastNum[0] ){
				$array[] = array(
						$this->sequence[$i][0],
						$this->sequence[$i][1],
						$i
					);
				return $array;
			}

		}

		return false;
	}

	private function printSeq( $array ){

		print " [ ";
		if( !empty($array)){
			foreach ($array as $key => $value) {
				print $value[0];

				if( $key != count($array) - 1 )
					print ", ";
			}
		}

		print( " ]\n");

	}

	private function printSequence( ){

		$sequence = $this->subsequences[ count( $this->subsequences ) - 1  ];
		return $this->calWeight( $sequence ) . "\n";

	}

	private	function addSubsequence( $sub ){

		$lenght = 0;

		foreach ($this->subsequences as $key => $sequence) {

			if( $this->calWeight( $sequence ) >= $this->calWeight($sub) ) return false;
			//if(  $sequence[0] == $sub[0] ) return false;


			if( count($sequence) > $lenght )
				$lenght = count($sequence);
		}

		$count = count($sub);

		if( $count >= $lenght){

			if( $count > $lenght)
				$lenght = $count;

			$this->subsequences[] = $sub;
		}else
			return false;

		
		return true;

	}

	private	function calWeight( $sub ){

		$weight = 0;

		if( empty($sub) ) return 0;

		foreach ($sub as $key => $value)
			$weight += $value[1];
		
		return $weight;

	}



}
