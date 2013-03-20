<?php

class cv2_vendedoresTest extends WebTestCase
{
	public $fixtures=array(
		'cv2_vendedores'=>'cv2_vendedores',
	);

	public function testShow()
	{
		$this->open('?r=cv2_vendedores/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cv2_vendedores/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cv2_vendedores/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cv2_vendedores/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cv2_vendedores/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cv2_vendedores/admin');
	}
}
