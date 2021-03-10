<?php

namespace restapi\controllers;

use yii\rest\ActiveController;

class UserController extends MyController
{
    public $modelClass = 'restapi\models\User';
}