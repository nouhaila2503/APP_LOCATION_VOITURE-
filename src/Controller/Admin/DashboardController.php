<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Car;
use App\Entity\Reservation;
use Container7OjUVbi\getUserCrudControllerService;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

    // **Option 1: Redirect to User CRUD Controller (Recommended):**
  $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
  return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());






       // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

   public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('My Project');
    }


    /*public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('User', 'fas fa-list', User::class);
    }*/

    public function configureMenuItems(): iterable
    {
    yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
    yield MenuItem::linkToCrud('User', 'fas fa-list', User::class);
    yield MenuItem::linkToCrud('Car', 'fas fa-list', Car::class);
    yield MenuItem::linkToCrud('Reservation', 'fas fa-list', Reservation::class);


    // Debugging code
    //dump($this->configureMenuItems());

    return []; // Return an empty array to prevent rendering any menus
}
}
