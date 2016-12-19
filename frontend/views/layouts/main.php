<?php
/* @var $this View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use modernkernel\bootstrapsocial\Button;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="container">
            <div class="row" >
                <div class="col-md-3">

                    <img src="<?= Url::to('@web/images/logo.png') ?>">
                </div>
                <div class="col-md-3">
                    <h3>Управляющая </br>компания</h3>
                </div>
                <div class="col-md-3" style="vertical-align: middle">
                    <?=
                    Button::widget([
                        'button' => 'twitter', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    Button::widget([
                        'button' => 'facebook', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    Button::widget([
                        'button' => 'instagram', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    Button::widget([
                        'button' => 'odnoklassniki', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    Button::widget([
                        'button' => 'vk', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <div class="row">
                        <h5 class="pull-right">(4212) 47-60-31, 47-60-32</br>WhatsApp: 8-914-770-21-27</br>Skype: upraw28</h5>
                    </div>    


                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-search" id="basic-addon1"></span>
                        <input type="text" class="form-control" placeholder="Поиск" aria-describedby="basic-addon1">
                    </div>

                </div>
            </div>
        </div>
        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => false,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                    'style' => 'padding-bottom : 0'
                ],
            ]);
            $menuItems = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span>' . Yii::t('frontend', 'HOME'), 'url' => ['/site/index']],
                    ['label' => '<span class="glyphicon glyphicon-file"></span>' . Yii::t('frontend', 'ABOUT'), 'url' => ['/site/about']],
                    ['label' => '<span class="glyphicon glyphicon-info-sign"></span>' . Yii::t('frontend', 'INFO'), 'url' => ['/site/contact']],
                    ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', 'CONTACT'), 'url' => ['/site/contact']],
                  //  ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', 'POLL'), 'url' => ['/polls-result/create']],
                  //  ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', ' 2 ГИС'), 'url' => ['/site/2gis']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span>' . Yii::t('frontend', ' SIGN UP'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-log-in"></span>' . Yii::t('frontend', 'LOG IN'), 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'nav-justified'], //получается реально распределенное меню. но почему-то цвет поменялся
                'encodeLabels' => false, //для того, чтобы вывести иконки
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container" style="padding-bottom: 0">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; LSL-soft <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
