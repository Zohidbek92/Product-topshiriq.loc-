<?php

namespace backend\models;


class Product extends \yii\db\ActiveRecord
{
	
	public function attributeLabels()
	{
		return [
			'nomi' => 'Mahsulot nomi',
			'narxi' => 'Mahsulot narxi',
			'category' => 'Mahsulot kategoriyasi',
			'reyting' => 'Mahsulot reytingi',
		];
	}

	public function rules()
	{
		return [
			['nomi', 'string',],
			[['nomi', 'narxi', 'category', 'reyting'], 'required',],
			['narxi', 'integer', 'min' => 999],
		];
	}
}

