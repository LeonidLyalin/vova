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
                </div>
            </div>
        </div>
        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            $menuItems = [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
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
                'options' => ['class' => 'navbar-nav navbar-right'],
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
