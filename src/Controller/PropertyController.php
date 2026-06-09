<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Property;
use App\Entity\Reservation;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PropertyController extends AbstractController
{
    #[Route('/logement', name: 'logement_detail')]
    public function detail(): Response
    {
        return $this->render('pages/logement-detail.html.twig', [
            'logement' => null,
        ]);
    }

//    #[Route('/logement/booking/{id}/checkout', name: 'booking_checkout')]
//    public function bookingCheckout(string $id): Response
//    {
//        return $this->render('pages/booking-checkout.html.twig', [
//            'booking_id' => $id,
//        ]);
//    }
}


