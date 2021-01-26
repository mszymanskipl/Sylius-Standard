<?php

namespace spec\App\Entity\Product;

use App\Entity\Product\Product;
use PhpSpec\ObjectBehavior;

class ProductSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }
}
