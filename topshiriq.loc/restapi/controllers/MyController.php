<?php

namespace restapi\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;

class MyController extends ActiveController
{
	public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

	public function behaviors()
    {
        $behaviors = parent::behaviors();

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                'Origin' => ['https://test.uz', 'http://test.uz'],
                'Access-Control-Request-Method' => ['GET'],
            ],
        ];
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
        ];
        
        return $behaviors;
    }
}