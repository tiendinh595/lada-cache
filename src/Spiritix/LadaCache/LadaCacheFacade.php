<?php
/**
 * Created by PhpStorm.
 * User: dinhvt
 * Date: 2020-05-30
 * Time: 20:37
 */


namespace Spiritix\LadaCache;

use Illuminate\Support\Facades\Facade;

class LadaCacheFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'lada.handler';
    }

}