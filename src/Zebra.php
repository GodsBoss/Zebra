<?php

class Zebra{
	private $states = array();

	private $stateSets = array();

	public function __construct(array $states = array('odd', 'even')){
		$sets = func_get_args();
		if (count($sets)==0){
			$sets = array($states);}
		foreach($sets as $set){
			$stateSet = array();
			for($i=0, $l=count($set); $i<$l; $i++){
				$stateSet[$set[$i]] = $set[($i+1)%$l];}
			$this->stateSets[] = $stateSet;
			$this->states[] = $set[count($set)-1];}}

	public function __toString(){
		foreach($this->states as $index => $value){
			$this->states[$index] = $this->stateSets[$index][$value];}
		return implode(' ', $this->states);}}
