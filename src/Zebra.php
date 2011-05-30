<?php

class Zebra{
	private $states;

	private $sets;

	public function __construct(array $states = array('odd', 'even')){
		$sets = func_get_args();
		if (count($sets)==0){
			$sets = array($states);}
		$this->sets = $sets;
		$this->states = array_fill(0, count($sets), 0);}

	private function combine(){
		$states = array();
		foreach($this->states as $index => $state){
			$states[] = $this->sets[$index][$state];}
		return implode(' ', $states);}

	private function next(){
		foreach($this->states as $index => $state){
			$this->states[$index] = ($state+1)%count($this->sets[$index]);}}

	public function __toString(){
		$result = $this->combine();
		$this->next();
		return $result;}}
