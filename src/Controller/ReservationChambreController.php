<?php

namespace App\Controller;

use App\Entity\ReservationChambre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReservationChambreRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class ReservationChambreController extends AbstractController
{
    /**
     * @Route("/api/post", name="app_reservation_get", methods={"GET"})
     */
    public function index(ReservationChambreRepository $reservationChambreRepo)
    {
        $reservation = $reservationChambreRepo->findAll();
        return $this->json($reservation, 200, [], ["groups" => "post:reserve"]);
    }

    /**
     * @Route("/api/post", name="api_reservation_post", methods={"POST"})
     */
    public function store(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $jsonRecu = $request->getContent(); // RECUPERATION DES DONNÉES JSON ENVOYÉ PAR L'USER 

        try {
            
            $post = $serializer->deserialize($jsonRecu, ReservationChambre::class, 'json');
            $post->setCreatedAt(new \DateTimeImmutable());
            $em->persist($post);
            $em->flush($post);

            return $this->json($post, 201, [], ["groups" => "post:reserve"]);
        } catch (NotEncodableValueException $e) {
            
            return $this->json([
                "status" => 400,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}