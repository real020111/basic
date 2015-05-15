<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Country;

class IndexController extends Controller
{
	public function actionIndex()
	{
		$country = new Country();
		$country->scenario = 'login';
		$list = $country->CountryList();
		return $this->render('index');
	}
}