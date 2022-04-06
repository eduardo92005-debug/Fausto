<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        return [
            TextField::new('nom'),
            TextField::new('date'),
            TextField::new('tarif'),
            TextField::new('nombre_participant'),
            TextField::new('heure'),
            TextEditorField::new('description'),
            DateTimeField::new('updatedAt'),
            ImageField::new('imageName')
                ->setUploadedFileNamePattern("cours_[name].[extension]")
                ->setUploadDir('public\images\uploads\cours')
                ->setBasePath('images/uploads/cours')
                ,
            AssociationField::new('propose')
            ,
        ];
    }
    
}
