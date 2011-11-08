<?php
namespace BEAR\Framework\HelloWorld\Ro;

use BEAR\Resource\Object as Ro;

class Greeting implements Ro
{
    /**
     * @Template
     * @Cache(time=30)
     */
    public function onGet($lang)
    {
        if ($lang === 'en') {
            return 'Hello World';
        }
        return 'こんにちは世界';
    }
}
