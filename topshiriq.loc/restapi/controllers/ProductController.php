<?php

namespace restapi\controllers;

use yii\data\ActiveDataProvider;
use restapi\models\Product;

class ProductController extends MyController
{
	public $modelClass = '\backend\models\Product';
	
	public function actions()
	{
		$actions = parent::actions();
		unset($actions['index']);
		unset($actions['create']);
		return $actions;
	}

	public function actionIndex()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => Product::find(),
			'pagination' =>[
				'pageSize' => 1,
			]
		]);
		return $dataProvider;

	}

}