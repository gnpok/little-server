<?php
namespace App\Utility;

class TaskData{
	private $data;
	private $action;


	public function setData($data):void
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setAction(?string $action):void
	{
		$this->action = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

}