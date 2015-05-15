<?php
 
namespace app\models;
 
use yii\db\ActiveRecord;
 
class Country extends ActiveRecord
{
	public function scenarios()
    {
        return [
            'login' => ['username', 'password'],
            'register' => ['username', 'email', 'password'],
        ];
    }

	public function addOneCountry($countryList){
		
		$this->save();
	}

	public function CountryList(){
		$post = $this->findOne('HG');
		$list = [];
		if($post){
			$list = $post->attributes;
		}
		return $list;
	}
}