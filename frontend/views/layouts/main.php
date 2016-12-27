<?php
/* @var $this View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use lajax\languagepicker\widgets\LanguagePicker;
use modernkernel\bootstrapsocial\Button;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use common\components\languageSwitcher;

AppAsset::register($this);
?>
<?

/**
 * 
 * @param string $className - HTML element, which style will be set 
 * @param array $option - CSS class which will set (f.e. padding-left)
 * @param string $params - HTML style (f.e. padding-left) set for different screen sizes (f.e. ['0px','10px','20px','40px'])
 * @param $media string to set screen sizes (on default='@media only screen and (min-width:')
 * @return string - style string for $className
 */
function setBootstrap($className, $option, $params, $media = '@media only screen and (min-width:') {
    /**
     * @var $screenSize set of screen size (like in Bootstrap)
     */
    $screenSize = array('768px', '992px', '1200px');
    if (!(substr($className, 0, 1) === '.')) {
        $className = '.' . $className;
    }
    $numSize = 0;
    $result = '';

    foreach ($params as $param) {
        if ($result == '') {
            $result .= $className . '{' . $option . ': ' . $param . '}';
        } else {
            $result .= $media . $screenSize[$numSize] . '){' . $className . '{' . $option . ': ' . $param . '}';
            $numSize++;
        }
    }
    return $result;
}
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
        <div class="container" style="background-image: url(<?= Url::to('@web/images/backgound/7.jpg') ?>)">
            <div class="row" >

                <div class="col-md-3">
                    <?= Html::style(setBootstrap('imgn', 'padding-left', ['0px', '10px', '20px', '40px'])) ?>
                    <img  class="imgn img-responsive" src="<?= Url::to('@web/images/logo.png') ?>">
                </div>
                <?= Html::style(setBootstrap('imgn1', 'padding-left', ['5px', '15px', '25px', '30px'])) ?>
                <div class="col-md-3">
                    <h1 class="imgn1"><?= Yii::t('frontend', 'House</br>maintenance</br>company') ?></h1>
                </div>
                <?= Html::style(setBootstrap('imgn2', 'padding-left', ['40px', '45px', '35px', '100px'])) ?>
                <div class="col-md-3">
                    <div class="imgn2">
                        <div class="row">
                            <?=
                            Button::widget([
                                'button' => 'twitter', // Available buttons see https://github.com/lipis/bootstrap-social/
                                'iconOnly' => true, // set true if only want the icon 
                                'link' => '#your-url', // the button URL
                                'label' => '', // button label
                            ])
                            ?>
                            <?=
                            Button::widget([
                                'button' => 'facebook', // Available buttons see https://github.com/lipis/bootstrap-social/
                                'iconOnly' => true, // set true if only want the icon 
                                'link' => '#your-url', // the button URL
                                'label' => '', // button label
                            ])
                            ?>
                            <?=
                            Button::widget([
                                'button' => 'instagram', // Available buttons see https://github.com/lipis/bootstrap-social/
                                'iconOnly' => true, // set true if only want the icon 
                                'link' => '#your-url', // the button URL
                                'label' => '', // button label
                            ])
                            ?>
                            <?=
                            Button::widget([
                                'button' => 'odnoklassniki', // Available buttons see https://github.com/lipis/bootstrap-social/
                                'iconOnly' => true, // set true if only want the icon 
                                'link' => '#your-url', // the button URL
                                'label' => '', // button label
                            ])
                            ?>
                            <?=
                            Button::widget([
                                'button' => 'vk', // Available buttons see https://github.com/lipis/bootstrap-social/
                                'iconOnly' => true, // set true if only want the icon 
                                'link' => '#your-url', // the button URL
                                'label' => '', // button label
                                    //  'options' =>['style'=> 'padding-left : 70px'],
                            ])
                            ?>
                        </div>
                        <div class="row">
                            <h5 style="padding-left: 0px;">(4212) 75-32-75</br>WhatsApp: 8-914-770-21-27</br>Skype: upraw28</h5>
                        </div>    

                        <div class="row">
                            <div class="input-group" style="padding-left: 0px">  

                                <input type="text" class="form-control" placeholder="Поиск"  style="padding-left: 0px">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <?= Html::a('Russian',['site/language', 'language'=>'ru-Ru']);?></br>
                    <?= Html::a('English',['site/language', 'language' =>'en-En']);?></br>
                    <?= Html::a('中文',['site/language','language' => 'zh-Cn']);?></br>
                    <?= languageSwitcher::Widget() ?>
                    
                   
                </div>
            </div>
        </div>

        <div class="wrap">
            <?= Html::style(setBootstrap('.glyphicon', 'padding-right', ['0px', '3px', '7px', '10px'])) ?> 
            <?php
            NavBar::begin([
                'brandLabel' => false,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                    'style' => 'padding-bottom : 0px; 
                                background-color: rgba(34, 34, 34, 0.13);
                                border-color: #1e213a;'
                ],
            ]);
           
            $menuItems = [
                
                ['label' => '<span class="glyphicon glyphicon-home"></span>' . Yii::t('frontend', 'HOME'), 'url' => ['/site/index']],
                ['label' => '<span class="glyphicon glyphicon-file"></span>' . Yii::t('frontend', 'ABOUT'), 'url' => ['/site/about']],
                ['label' => '<span class="glyphicon glyphicon-info-sign"></span>' . Yii::t('frontend', 'INFO'), 'url' => ['/site/info']],
                ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', 'CONTACTS'), 'url' => ['/site/contact']],
                    //  ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', 'POLL'), 'url' => ['/polls-result/create']],
                    //  ['label' => '<span class="glyphicon glyphicon-envelope"></span>' . Yii::t('frontend', ' 2 ГИС'), 'url' => ['/site/2gis']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span>' . Yii::t('frontend', 'SIGN UP'), 'url' => ['/site/signup']];
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
                'options' => ['class' => 'nav-justified', 'style' => 'margin-bottom:0px'], //получается реально распределенное меню. но почему-то цвет поменялся
                'encodeLabels' => false, //для того, чтобы вывести иконки
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container" style="padding: 10px 15px 0px;">
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
