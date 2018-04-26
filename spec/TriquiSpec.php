<?php

namespace spec;

use Triqui;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TriquiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Triqui::class);
    }
}
