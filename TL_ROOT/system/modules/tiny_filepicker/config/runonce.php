<?php

class tinyfilepickerRunonce extends Controller
{
	/**
	 * Initialize the object
	 */
	public function __construct()
	{
		parent::__construct();
	}


	public function run()
	{
		\Database::getInstance()->execute('INSERT INTO tl_filepicker (`id`) VALUES (0)');
	}

}

$objTinyfilepickerRunonce = new tinyfilepickerRunonce();
$objTinyfilepickerRunonce->run();