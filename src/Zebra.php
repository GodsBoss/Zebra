<?php

class Zebra{
	private $states = array();

	private $stateSets = array();

	private function createStates($sets){
		foreach($sets as $set){
			$this->states[] = $set[count($set)-1];}}

	private function createStateSet($set){
		$stateSet = array();
		for($i=0, $l=count($set); $i<$l; $i++){
			$stateSet[$set[$i]] = $set[($i+1)%$l];}
		$this->stateSets[] = $stateSet;}

	private function createStateSets($sets){
		foreach($sets as $set){
			$this->createStateSet($set);}}

	public function __construct(array $states = array('odd', 'even')){
		$sets = func_get_args();
		if (count($sets)==0){
			$sets = array($states);}
		$this->createStateSets($sets);
		$this->createStates($sets);}

	private function next(){
		foreach($this->states as $index => $value){
			$this->states[$index] = $this->stateSets[$index][$value];}}

	public function __toString(){
		$this->next();
		return implode(' ', $this->states);}}
