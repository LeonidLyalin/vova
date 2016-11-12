Yii2 Bootstrap Social
=====================
Bootstrap Social extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist modernkernel/yii2-bootstrapsocial "*"
```

or add

```
"modernkernel/yii2-bootstrapsocial": "*"
```

to the require section of your `composer.json` file.

Usage
-----
 
Once the extension is installed, simply use it in your code by :

```
<?= \modernkernel\bootstrapsocial\Button::widget([
    'button' => 'twitter', // Available buttons see https://github.com/lipis/bootstrap-social/
    'iconOnly' => false, // set true if only want the icon 
    'link' => '#your-url', // the button URL
    'label'=> 'Button label', // button label
]) ?>
```