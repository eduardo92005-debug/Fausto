<?php

namespace App\Controller\Admin;

use App\Entity\Salles;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SallesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Salles::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lieu'),
            IntegerField::new('capacite'),
            DateTimeField::new('updatedAt'),
            ImageField::new('imageName')
            ->setUploadedFileNamePattern("salles_[name].[extension]")
            ->setUploadDir('public\images\uploads\salles')
            ->setBasePath('images/uploads/salles'),
            AssociationField::new('est_dispense'),
        ];
    }
    
}
