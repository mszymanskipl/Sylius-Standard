<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    public const COLOR_RED = 'red';
    public const COLOR_BLUE = 'blue';
    public const COLOR_GREEN = 'green';

    public const COLORS = [self::COLOR_RED, self::COLOR_BLUE, self::COLOR_GREEN];

    /** @var string */
    protected $color;

    public static function getColors() {
        return self::COLORS;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }


}
