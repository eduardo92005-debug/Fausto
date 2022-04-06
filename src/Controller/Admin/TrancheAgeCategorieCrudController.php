<?php

namespace App\Controller\Admin;

use App\Entity\TrancheAgeCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TrancheAgeCategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TrancheAgeCategorie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom_tranche_age'),
            TextEditorField::new('description'),
            AssociationField::new('cours'),
        ];
    }
    
}
