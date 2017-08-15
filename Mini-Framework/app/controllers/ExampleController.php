<?php 

class ExampleController
{
	public function index()
	{
		$page = 'index';
		$title = 'Index View';
		view('index',compact('page','title'));
	}

	public function about()
	{
		$title = 'About View';
		$page = 'about';
		view('about',compact('page','title'));
	}

	public function contact()
	{
		$title = 'Contact View';
		$page = 'contact';
		view('contact',compact('page','title'));
	}
}


?>