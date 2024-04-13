<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'customer')]
    public function index(): JsonResponse
    {
        $customers = $this->getDoctrine()->getRepository(Customer::class)->findAll();
        
        return $this->json($customers);
    }

    #[Route('/customer/create', name: 'create_customer')]
    public function create(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new CREATE controller!',
            'path' => 'src/Controller/CustomerController.php',
        ]);
    }
}
