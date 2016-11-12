<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
                    <img style="vertical-align: middle" src="logo.png">
                </div>
                <div class="col-md-3" style="vertical-align: middle">
                    <h3>Управляющая </br>компания</h3>
                </div>
                <div class="col-md-3" style="vertical-align: middle">
                    <?=
                    \modernkernel\bootstrapsocial\Button::widget([
                        'button' => 'twitter', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    \modernkernel\bootstrapsocial\Button::widget([
                        'button' => 'facebook', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    \modernkernel\bootstrapsocial\Button::widget([
                        'button' => 'instagram', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    \modernkernel\bootstrapsocial\Button::widget([
                        'button' => 'odnoklassniki', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <?=
                    \modernkernel\bootstrapsocial\Button::widget([
                        'button' => 'vk', // Available buttons see https://github.com/lipis/bootstrap-social/
                        'iconOnly' => true, // set true if only want the icon 
                        'link' => '#your-url', // the button URL
                        'label' => 'Button label', // button label
                    ])
                    ?>
                    <div class="row">
                        <a>(4212) 47-60-31, 47-60-32</br>
                            WhatsApp: 8-914-770-21-27</br>
                            Skype: upraw28</a>
                    </div>    


                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-search" id="basic-addon1"></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
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
                ],
            ]);
            $menuItems = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> ГЛАВНАЯ', 'url' => ['/site/index']],
                    ['label' => '<span class="glyphicon glyphicon-file"></span> О КОМПАНИИ', 'url' => ['/site/about']],
                    ['label' => '<span class="glyphicon glyphicon-info-sign"></span> ИНФОРМАЦИЯ', 'url' => ['/site/contact']],
                    ['label' => '<span class="glyphicon glyphicon-envelope"></span> КОНТАКТЫ', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span> РЕГИСТРАЦИЯ', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-log-in"></span> ВОЙТИ', 'url' => ['/site/login']];
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
                'options' => ['class' => 'navbar-nav'],
                'encodeLabels' => false, //для того, чтобы вывести иконки
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
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
