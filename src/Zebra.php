<?php

class Zebra{
	private $state;

	private $states = array();

	public function __construct(array $states = array('odd', 'even')){
		for($i=0, $l=count($states); $i<$l; $i++){
			$this->states[$states[$i]] = $states[($i+1)%$l];}
		$this->state = $states[count($states)-1];}

	public function __toString(){
		$this->state = $this->states[$this->state];
		return $this->state;}}
