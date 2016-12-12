<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use voime\GoogleMaps\Map;

$this->title = Yii::t('frontend','POLL');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-vote">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is out vote
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'poll-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?=
            $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ])
            ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

        </div>
        <div class='ajax-poll' tclass='poll-background-image' style='width:420px;'></div>



        <?php
        echo Map::widget([
            'width' => '100%',
            'height' => '1000px',
            'mapType' => Map::MAP_TYPE_HYBRID,
            'markers' => [
                    ['position' => [48.477852, 135.163931], 'title' => 'ул.Горького 60а'],
                    ['position' => [48.478151, 135.163365], 'title' => 'ул.Горького 62а'],
                    ['position' => [48.479005, 135.164515], 'title' => 'ул.Горького 60б'],
                 ['position' => [48.478718, 135.163788], 'title' => 'ул.Горького 60в'],
                
                ['position' => [48.478475, 135.162787], 'title' => 'ул.Княжничная 1'],
                ['position' => [48.478921, 135.162674], 'title' => 'ул.Княжничная 3'],
                ['position' => [48.479722, 135.162566], 'title' => 'ул.Княжничная 5'],
                ['position' => [48.479524, 135.163545], 'title' => 'ул.Княжничная 5а'],
                
                  // ['position' => '', 'title' => 'ул.Горького 62','content' => 'InfoWindow content4', 'options' => ["icon" => "'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'"]],
//        ул.Горького 60 а	48.477852, 135.163931
//ул.Горького 62 а	48.478151, 135.163365
//ул.Горького 60 б	48.479005, 135.164515
//ул.Горького 60 в	48.478718, 135.163788
//ул.Горького 62	1 368, 90
//ул.Княжничная 1	48.478475, 135.162787
//ул.Княжничная 3	48.478921, 135.162674
//ул.Княжничная 5	48.479722, 135.162566
//ул.Княжничная 5 а 48.479524, 135.163545
            ],
            'markerFitBounds' => true
        ]);
        ?>

    </div>

</div>

