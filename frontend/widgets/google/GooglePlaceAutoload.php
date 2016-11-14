<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\widgets\google;

use frontend\widgets\google\GoogleAsset;
use yii\helpers\Html;
use yii\web\View;
use Yii;

/**
 * Description of Language
 *
 * @author aleksey
 */
class GooglePlaceAutoload extends \yii\bootstrap\Widget {

    public $model;
    public $attribute = 'google-map-input';
    public $location = [
        'lat' => '50.4501',
        'lng' => '30.5234',
    ];

    public function init() {
        parent::init();
        $view = Yii::$app->getView();
        $this->registerAssets();
        $view->registerJs($this->getJs());
    }

    public function run() {
        $content = Html::label('Google maps location');
        $text = isset($this->model) ? $this->model->{$this->attribute} : '';
        $content .= Html::input('text', $this->attribute, htmlspecialchars_decode($text), ['id' => 'pac-input', 'class' => 'controls', 'placeholder' => "Enter a location"]);
        $content .= Html::tag('div', null, ['id' => 'map-canvas']);
        $output = Html::tag('div', $content, ['id' => 'google_maps_div', 'style' => 'margin-bottom: 10px;']);
        return $output;
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets() {
        $view = $this->getView();
        GoogleAsset::register($view);
    }

    private function getJs() {
//Ваш js код должен быть здесь. 
//Это ваше домашнее задание.))
        $script = <<< JS

var mapOptions = {
zoom: 8,
 center: new google.maps.LatLng(40.417181, -3.700823),
 mapTypeId: google.maps.MapTypeId.ROADMAP,
 disableDefaultUI: true
};

var myMap = new google.maps.Map(document.getElementById('myMap'), mapOptions);

var marker = new MarkerWithLabel({
position: myMap.getCenter(),
 icon: {
path: google.maps.SymbolPath.CIRCLE,
 scale: 0, //tamaño 0
},
 map: myMap,
 draggable: true,
 labelAnchor: new google.maps.Point(10, 10),
 labelClass: "label", // the CSS class for the label
});
}
google.maps.event.addDomListener(window, 'load', init);

JS;
        return $script;
    }

}
