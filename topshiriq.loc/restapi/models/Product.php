<?php

namespace restapi\models;

use Yii;

class Product extends \backend\models\Product
{
   public function fields()
	{
	    return [
	        'nomi',
	        'narxi',
	    ];
	}
}
