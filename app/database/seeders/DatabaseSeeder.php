<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\User;
use App\Models\Temoignage;
use App\Models\Evenement;
use App\Models\Professional;
use App\Models\Urgence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $services = [
            'Educateur',
            'Médecin',
            'Chauffeur',
        ];

        foreach ($services as $service) {
            $serviceModel = Service::create([
                'nom' => $service,
            ]);

            $serviceModel->professionals()->createMany([
                [
                    'nom' => 'John Doe',
                    'age' => 30,
                    'available_time' => '10:00-12:00',
                    'image' => 'educateur.webp',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
                [
                    'nom' => 'Jane Smith',
                    'age' => 35,
                    'available_time' => '14:00-16:00',
                    'image' => 'medecin.jpg',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
                [
                    'nom' => 'Bob Johnson',
                    'age' => 40,
                    'available_time' => '18:00-20:00',
                    'image' => 'chauffeur-service.jpg',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
            ]);
        }
        Temoignage::create([
            'nom' => 'John Doe',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla semper enim, vel malesuada lectus pulvinar vitae.',
            'image' => 'educateur.webp'
        ]);
        $urgences = [
            [
                'titre' => 'Urgence médicale',
                'description' => 'Cette urgence concerne les frais médicaux d\'un enfant gravement malade qui nécessite une intervention chirurgicale d\'urgence.',
                'montant_demande' => 5000,
                'montant_actuel' => 0,
                'date_limite' => '2023-06-30',
            ],
            [
                'titre' => 'Urgence alimentaire',
                'description' => 'Cette urgence concerne l\'aide alimentaire d\'urgence pour une communauté touchée par une catastrophe naturelle.',
                'montant_demande' => 10000,
                'montant_actuel' => 5000,
                'date_limite' => '2023-05-31',
            ],
        ];

        foreach ($urgences as $urgence) {
            Urgence::create($urgence);
        }
        $user = new User();
        $user->nom = "Manal";
        $user->email = "manal@gmail.com";
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->nom = "Ahmed";
        $user->email = "ahmed@gmail.com";
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->nom = "hmido";
        $user->email = "hmido@gmail.com";
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->save();

        Evenement::create([
            'title' => 'Événement 1',
            'content' => 'Contenu de l\'événement 1',
            'photos' => 'WhatsApp-Image-2021-05-10-at-10.21.26.jpeg',
        ]);

        Evenement::create([
            'title' => 'Événement 2',
            'content' => 'Contenu de l\'événement 2',
            'photos' => 'thinkstockphotos-540095978.jpeg',
        ]);
    }
}
