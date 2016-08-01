<?php

namespace backend\modules\rest;

/**
 * rest module definition class
 */
class Rest extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'backend\modules\rest\controllers';
    public $components =  [
        'enablePrettyUrl' => true,
        'enableStrictParsing' => true,
        'showScriptName' => false,
        'rules' => [
            ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
        ],
    ];
    /*public $request = [
        'parsers' => [
            'application/json' => 'yii\web\JsonParser',
        ]
    ];*/
    public $viewPath ='@app/views';
    public $layout = null;
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
