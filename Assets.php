<?php
/**
 * Date: 17.01.14
 * Time: 1:06
 */

namespace vanterbit\ckeditor;

use yii\web\AssetBundle;

class Assets extends AssetBundle{
	public $sourcePath = '@vanterbit/ckeditor/editor';

    public $js = [
        'ckeditor.js',
		'js.js',
        'plugins/youtube/plugin.js',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}