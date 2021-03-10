<?php
namespace restapi\models;

use Yii;

class User extends \common\models\User 
{
	public function fields()
	{
	    return [
	        'id',
	        'Email' => 'email',
	        'Name' => function ($model) {
	            return $model->username;
	        },
	    ];
	}
}