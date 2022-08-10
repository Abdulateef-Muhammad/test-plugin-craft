<?php
namespace onegraphics\test\services;

use yii\base\Component;

class TestService extends Component {

    public static function foo(): string {
        return 'this is a foo method inside the testService class';
    }
}