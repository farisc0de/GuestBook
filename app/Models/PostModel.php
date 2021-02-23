<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $table = "posts";

	protected $allowedFields = [
		'full_name',
		'email_address',
		'comment',
	];

	protected $validationRules = [
		'full_name' => 'required',
		'comment' => "required",
		'reCaptcha2' => 'required|reCaptcha2[]'
	];


	protected $returnType = 'App\Entities\Post';

	protected $useTimestamps = true;
}
