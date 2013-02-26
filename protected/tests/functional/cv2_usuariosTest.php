<?php

class cv2_usuariosTest extends WebTestCase
{
	public $fixtures=array(
		'cv2_usuarioses'=>'cv2_usuarios',
	);

	public function testShow()
	{
		$this->open('?r=cv2_usuarios/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cv2_usuarios/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cv2_usuarios/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cv2_usuarios/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cv2_usuarios/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cv2_usuarios/admin');
	}
}
