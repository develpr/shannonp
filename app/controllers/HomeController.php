<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	/**
	 * The homepage!
	 *
	 * Welcome home, Shannon!
	 *
	 * I hope you like your home, Shannon!
	 *
	 */
	public function home()
	{
		$this->layout->content = View::make('home');
	}

	public function showVintage()
	{
		$this->layout->content = View::make('home');
	}


	public function showCottage()
	{
		$this->layout->content = View::make('home');
	}


	public function showWhimsy()
	{
		$this->layout->content = View::make('home');
	}


	//Show the contact page
	public function showContact()
	{

	}

	public function postContact()
	{

	}

}