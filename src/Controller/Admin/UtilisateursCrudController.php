<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateurs;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UtilisateursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilisateurs::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('email'),
            TextField::new('password')->setFormType(PasswordType::class),
            ArrayField::new('roles'),
            AssociationField::new('est_inscrit'),
            AssociationField::new('peut_choisir'),
        ];
    }
    
}
