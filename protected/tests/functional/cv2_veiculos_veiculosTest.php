<?php

class cv2_veiculos_veiculosTest extends WebTestCase
{
	public $fixtures=array(
		'cv2_veiculos_veiculoses'=>'cv2_veiculos_veiculos',
	);

	public function testShow()
	{
		$this->open('?r=cv2_veiculos_veiculos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cv2_veiculos_veiculos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cv2_veiculos_veiculos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cv2_veiculos_veiculos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cv2_veiculos_veiculos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cv2_veiculos_veiculos/admin');
	}
}
