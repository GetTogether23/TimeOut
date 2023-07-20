<?php

namespace App\Controller;


use App\Document\Events;
use App\Repository\EventRepository;
use App\Repository\CategoryRepository;
use App\Service\CallApiService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Document\User;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository, CallApiService $callApiService): Response
    {
        $title = "";
        $description = "";
        $city = "";
        $region = "";
        $adresse = "";
        $image = "";
        $region = "";

        $dataForJs = [];
        $dataTabForJs = [];


        $dataTags = $callApiService->getDataByTags();
        foreach ($dataTags['records'] as $data) {
            $dataFields = $data['fields'];

            $title = $dataFields['title_fr'];
            if (isset($dataFields['longdescription_fr'])) {
                $description = $dataFields['longdescription_fr'];
            } else {
                $description = $dataFields['description_fr'];
            }
            
            $city = $dataFields['location_city'];
            $region = $dataFields['location_region'];
            $adresse = $dataFields['location_address'];
            $image = $dataFields['image'];
            $eventId = $data['recordid'];
            // $beginDate = $dataFields['timings'].['begin'];
            // $endDate = $dataFields['timings'].['end'];

            $existingEvent = $eventRepository->findOneBy(['title' => $title]);

            if (!$existingEvent) {
                $event = new Events();
                $event->setTitle($title);
                $event->setDescription($description);
                $event->setCity($city);
                $event->setRegion($region);
                $event->setAdresse($adresse);
                $event->setPicture($image);
                $event->setEventId($eventId);

                $eventRepository->save($event);




            }

            $dataForJs = [
                'title' => $title,
                'description' => $description,
                'city' => $city,
                'region' => $region,
                'adresse' => $adresse,
                'image' => $image,
                'eventId' => $eventId,

            ];

            $dataTabForJs[] = $dataForJs; 

        }

            // Retourne les données dans le template requis 
            return $this->render('event/affichage.html.twig', [
                'jsonData' => $dataTabForJs,
            ]);
    }


    #[Route('/categories', name: 'app_event_categories')]
    public function categories(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('event/categories.html.twig', [
            'categories' => $categories,
        ]);
    }
}
