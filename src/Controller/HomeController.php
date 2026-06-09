<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\PropertyRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PropertyRepository $propertyRepository)
    {
        $logements = $propertyRepository->findAll();

        return $this->render('pages/home.html.twig', [
            'logements' => $logements,
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search()
    {
        return $this->render('pages/search-results.html.twig');
    }

    #[Route('/dashboard', name: 'user_dashboard')]
    public function dashboard(ReservationRepository $reservationRepository)
    {
        $reservations = $reservationRepository->findAll();

        return $this->render('pages/user-dashboard.html.twig', [
            'reservations' => $reservations
        ]);
    }

}
