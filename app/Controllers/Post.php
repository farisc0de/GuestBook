<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Post as PostEntity;
use App\Models\PostModel;

class Post extends BaseController
{
	public function index()
	{
		$model = new PostModel();

		$posts = $model->orderBy("created_at", 'desc')->paginate(5);

		return view('Posts/index', [
			'posts' => $posts,
			'pages' => $model->pager
		]);
	}

	public function add()
	{
		return view("Posts/add");
	}

	public function create()
	{
		$request = \Config\Services::request();

		$post = $request->getPost();

		$post = new PostEntity($post);

		$model = new PostModel();

		if ($model->insert($post)) {
			return redirect()
				->to("/post")
				->with("info", "post has been added");
		} else {
			return redirect()
				->back()
				->with('errors', $model->errors())
				->with("warning", "Invalid Request")
				->withInput();
		}
	}
}
