<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Product;
use yii\helpers\Url;


/**
 * 
 */
class ProductController extends Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'add', 'edit', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

	public function actionIndex()
	{
		$m = Product::find()->all();

		return $this->render('index', ['mahsulotlar' => $m]);
	}
	public function actionAdd()
	{
		$m = new Product();
		
		if($m->load(Yii::$app->request->post())) {
			$m->save();
			return $this->goHome();
		}
		return $this->render('add', ['mahsulot' => $m]);
	}
	public function actionEdit($id)
	{
		$m = Product::findOne($id);
		
		if($m->load(Yii::$app->request->post())) {
			$m->save();
			return $this->redirect(Url::to(['product/index']));
		}
		return $this->render('edit', ['mahsulot' => $m]);
	}
	public function actionDelete($id)
	{
		$delete = Product::findOne($id);
		$delete->delete();

		$m = Product::find()->all();
		return $this->redirect(Url::to(['product/index']));
	}

}