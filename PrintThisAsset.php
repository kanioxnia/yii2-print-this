<?php
namespace yii2assets\printthis;

use yii\web\AssetBundle;

class PrintThisAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2assets/yii2-print-html';

    public $js = [
        '//code.jquery.com/jquery-migrate-1.3.0.min.js',
		    'printThis.js',
	  ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
