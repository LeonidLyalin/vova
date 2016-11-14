<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets\google;
use yii\web\AssetBundle;
class GoogleAsset extends AssetBundle
{
    
    
	public $sourcePath = '@frontend/widgets/google/assets';
	public $css = [
		'css/google.maps.css'
	];
	
	public $js = [
    	'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}