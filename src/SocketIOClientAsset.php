<?php

namespace socketio\web;

use yii\web\AssetBundle;

class SocketIOClientAsset extends AssetBundle
{
    public $sourcePath = '@bower/socket.io-client/dist';

    public function init(){
        $this->js = YII_DEBUG ? [
            'socket.io.dev.js',
        ] : [
            'socket.io.js',
        ];
    }
}