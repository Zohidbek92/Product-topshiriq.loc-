<?php

namespace restapi\controllers;

use Yii;
use yii\rest\Controller;
use restapi\models\LoginForm;

class SiteController extends Controller
{
	public function actionLogin()
	{
		$model = new LoginForm();
		if($model->load(Yii::$app->request->post(), '') && ($token = $model->login()))
		{
			return ['token' => $token];
		}else
		{
			return $model;
		}
	}
}