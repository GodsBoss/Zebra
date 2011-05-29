<?php

class Zebra{
	private $state = 'even';

	private static $states = array(
		'odd' => 'even',
		'even' => 'odd');

	public function __toString(){
		$this->state = self::$states[$this->state];
		return $this->state;}}
