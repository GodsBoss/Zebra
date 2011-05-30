<?php

class ZebraTest extends PHPUnit_Framework_TestCase{
	public function test_instantiation(){
		$zebra = new Zebra();}

	public function test_default_striping(){
		$zebra = new Zebra();
		$this->assertEquals('odd even odd even odd', $zebra.' '.$zebra.' '.$zebra.' '.$zebra.' '.$zebra);}

	public function test_simple_custom_striping(){
		$zebra = new Zebra(array('one', 'two', 'three'));
		$this->assertEquals('one two three one', $zebra.' '.$zebra.' '.$zebra.' '.$zebra);}

	public function test_striping_with_several_value_sets_at_once(){
		$zebra = new Zebra(array('one', 'two', 'three'), array('odd', 'even'), array('1', '2', '3', '4'));
		$this->assertEquals('one odd 1', $zebra.'');
		$this->assertEquals('two even 2', $zebra.'');
		$this->assertEquals('three odd 3', $zebra.'');
		$this->assertEquals('one even 4', $zebra.'');
		$this->assertEquals('two odd 1', $zebra.'');}

	public function test_set_with_identical_values_inside(){
		$zebra = new Zebra(array('a', 'b', 'a', 'c'));
		$this->assertEquals('a', $zebra.'');
		$this->assertEquals('b', $zebra.'');
		$this->assertEquals('a', $zebra.'');
		$this->assertEquals('c', $zebra.'');
		$this->assertEquals('a', $zebra.'');}}
