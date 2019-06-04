<?php

namespace app\controllers\api;

use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;

class BaseApiController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function checkAccess($action, $model = null, $params = [])
    {
        return true;
    }

    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formatParam' => 'format',
                'formats' => [
                    'application/xml' => \yii\web\Response::FORMAT_XML,
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
    }
}