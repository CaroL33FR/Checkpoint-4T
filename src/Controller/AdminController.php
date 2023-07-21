<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ResidentRepository;
use App\Entity\Resident;

#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(ResidentRepository $residentRepository): Response
    {
        $residents = $residentRepository->findAll();

        return $this->render(
            'admin/index.html.twig',
            ['residents' => $residents]
        );
/*
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            ]
        );*/

    }

    #[Route('/show/{id}', name: 'show')]
    public function show($id, ResidentRepository $residentRepository): Response
    {
        $resident = $residentRepository->findOneBy(['id'=> $id]);

        if (!$resident) {
            throw $this->createNotFoundException(
                'Ce résident .$id n\'est pas enregistré dans l\'établissement'
            );
        }

        return $this->render(
            'admin/show.html.twig',
            ['resident' => $resident]
        );
        /*
                return $this->render('admin/index.html.twig', [
                    'controller_name' => 'AdminController',
                    ]
                );*/

    }

}
