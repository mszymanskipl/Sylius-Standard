<?php


namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('color', ChoiceType::class, [
            'required' => false,
            'choices'  => [
                'app.form.product.color.choices.red'   => Product::COLOR_RED,
                'app.form.product.color.choices.blue'  => Product::COLOR_BLUE,
                'app.form.product.color.choices.green' => Product::COLOR_GREEN,
            ],
            'label'    => 'app.form.product.color.label',
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class,];
    }
}
