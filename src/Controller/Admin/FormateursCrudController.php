<?php

namespace App\Controller\Admin;

use App\Entity\Formateurs;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FormateursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formateurs::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('email'),
            TextField::new('tel'),
        ];
    }
    
}
