<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Cours;
use App\Entity\Salles;
use App\Entity\Planning;
use App\Entity\Formateurs;
use App\Entity\EcoleFormation;
use App\Entity\TrancheAgeCategorie;
use App\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ecoledart');
    }


    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Index', 'fa fa-home');
        yield MenuItem::linkToCrud('Cours', 'fas fa-book', Cours::class);
        yield MenuItem::linkToCrud('Ecole Formation', 'fas fa-school', EcoleFormation::class);
        yield MenuItem::linkToCrud('Salles', 'fas fa-list', Salles::class);
        yield MenuItem::linkToCrud('Formateus', 'fas fa-user', Formateurs::class);
        yield MenuItem::linkToCrud('Planning', 'fas fa-calendar', Planning::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', Utilisateurs::class);
        yield MenuItem::linkToCrud('Tranche Age Categorie', 'fas fa-list', TrancheAgeCategorie::class);
        yield MenuItem::linkToCrud('Contacts Message', 'fas fa-list', Contact::class);
    }
}
