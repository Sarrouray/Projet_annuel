<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // Si vous souhaitez également afficher d'autres champs de Product
        $fields = [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            AssociationField::new('category'),
            NumberField::new('price'),
            TextField::new('ref'),
            TextField::new('image'),
            TextField::new('colors'),
            TextField::new('taille'),
            TextField::new('material'),
            TextField::new('collection'),
            TextField::new('description'),
        ];

        return $fields;
    }
}
