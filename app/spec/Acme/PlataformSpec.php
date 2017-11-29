<?php

namespace spec\Acme;

use Acme\Plataform;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlataformSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Plataform::class);
    }
}
