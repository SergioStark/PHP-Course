<?php 

Class TaskController
{
	public function show()
	{
		$page = 'task';
		$title = 'Task View';


		$tasks = App::get('db')->SelectAll('task');

		view('task', compact('page','title','tasks'));
	}

	public function store()
	{
		$data = array(
			'description' => $_POST['description'],
			'completed' => 1
			);
		App::get('db')->insert('task',$data);
		redirect('task');
	}
}


?>