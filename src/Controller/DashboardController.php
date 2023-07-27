<?php

namespace App\Controller;

use App\Document\Users;
use App\Repository\CategoryRepository;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    // Redirection vers le dashboard
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(SessionInterface $sessionInterface): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'user' => 'user',
        ]);
    }

    #[Route('/categories', name: 'app_dashboard_categories')]
    public function categories(CategoryRepository $categoryRepository, EventRepository $eventRepository, DocumentManager $dm): Response
    {
        // Récupère toutes les catégories depuis la base de données MongoDB.
        $categories = $categoryRepository->findAllCategories();

        // Récupérer tous les événements depuis la base de données MongoDB.
        $events = $eventRepository->findAll();

        // Récupérer le nom de l'utilisateur loggé depuis la bse de MongoDB.
        $firstName = "Maxime";


        // Rend la vue event/categories.html.twig avec les catégories et les événements récupérés
        return $this->render('dashboard/categories.html.twig', [
            'categories' => $categories,
            'events' => $events, // Passer les événements à la vue pour les afficher
            'firstName' => $firstName,
        ]);
    }

    #[Route('/mestags', name: 'app_dashboard_mestags')]
    public function mestags(SessionInterface $session, UserRepository $userRepo): Response
    {


        // Récupérer l'email de l'utilisateur connecté depuis la session
        $email = $session->get('email');

        // Récupérer l'utilisateur depuis la base de données en utilisant l'email
        $user = $userRepo->findOneBy(['email' => $email]);

        $tags = [];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('dashboard/mestags.html.twig', [
            'TagsData' => $tags,
        ]);
    }

    // Route pour "mesevents"
    #[Route('/mesevents', name: 'app_dashboard_mesevents')]
    public function mesevents(): Response
    {
        $events = [];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('dashboard/mesevents.html.twig', [
            'EventsData' => $events,
        ]);
    }


    #[Route('/mestags/save/{jsontags}', name: 'app_dashboard_mestags_save')]
    /**
     * Route de sauvegarde de la lsite des tags du user
     *
     * @param [type] $jsontags
     * @param UserRepository $userRepo
     * @return JsonResponse
     */
    public function saveTags($jsontags, UserRepository $userRepository, SessionInterface $sessionInterface): JsonResponse
    {

        // Récupérer l'email de l'utilisateur connecté depuis la session
        $email = $sessionInterface->get('email');

        // Récupérer l'utilisateur depuis la base de données en utilisant l'email
        $user = $userRepository->findOneBy(['email' => $email]);

        // récupère la liste complète des tags de l'utilisateur
        $tags = json_decode($jsontags);

        // Mettre à jour la propriété tagsByCategory de l'utilisateur avec les tags sélectionnés
        $user->setTagsByCategory($tags);
        $user->fill();

        // faire ici l'ajout à la bdd
        $userRepository->save($user);
        // renvoie la réponse
        return new JsonResponse(['ok']);
    }
}
