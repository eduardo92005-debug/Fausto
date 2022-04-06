<?php

namespace App\Controller\Admin;

use App\Entity\EcoleFormation;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EcoleFormationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EcoleFormation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('adr'),
            TextField::new('email'),
            TextField::new('tel'),
            TextEditorField::new('description'),
            DateTimeField::new('updatedAt'),
            ImageField::new('imageName')
                ->setUploadedFileNamePattern("ecole_formation_[name].[extension]")
                ->setUploadDir('public\images\uploads\ecole_formation')
                ->setBasePath('images/uploads/ecole_formation')
                ,
        ];
    }
}
