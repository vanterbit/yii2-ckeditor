<?php
/**
 * Date: 18.01.14
 * Time: 22:16
 */

namespace vanterbit\widget;

use yii\web\AssetBundle;


class AssetsJQueryAdapter extends AssetBundle{

	public $sourcePath = '@vanterbit/ckeditor/editor/adapters';

    public $js = [
        'jquery.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'vanterbit\ckeditor\Assets'
    ];
}