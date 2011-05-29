<?php

class ZebraTest extends PHPUnit_Framework_TestCase{
	public function test_instantiation(){
		$zebra = new Zebra();}

	public function test_default_striping(){
		$zebra = new Zebra();
		$this->assertEquals('odd even odd even odd', $zebra.' '.$zebra.' '.$zebra.' '.$zebra.' '.$zebra);}}
