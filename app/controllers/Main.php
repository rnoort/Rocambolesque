<?php

class Main extends Controller
{
	public function __construct()
	{
		
	}

	public function index()
	{
		$this->view("index");
	}
}