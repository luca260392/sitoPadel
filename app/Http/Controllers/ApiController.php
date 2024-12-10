<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    private function getRacchetteData()
    {
        return [
            "pagination" => [
                "last_visible_page" => 1,
                "has_next_page" => false,
                "current_page" => 1,
                "items" => [
                    "count" => 8,
                    "total" => 8,
                    "per_page" => 10
                ]
            ],
            "data" => [
                [
                    "mal_id" => 1,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/silverpadel-12k.jpg"
                        ]
                    ],
                    "title" => "SilverPadel 12K",
                    "type" => "Professional",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "100% in carbonio",
                        "faces" => "100% carbon 12K"
                    ],
                    "core" => [
                        "material" => "EVA Back Extra Soft",
                        "features" => [
                            "tocco morbido",
                            "colpi potenti",
                            "uscita palla ottimale"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Quicksand Futura System",
                            "description" => "Sistema antivibrazione che riduce circa l'80% delle vibrazioni nocive per le articolazioni"
                        ],
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Superficie con finitura opaca e rilievo ruvido per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "ALTO",
                    "playing_style" => [
                        "control" => 9,
                        "power" => 8,
                        "maneuverability" => 9,
                        "comfort" => 8
                    ],
                    "intended_use" => "Progettata per giocatori avanzati o professionisti"
                ],
                [
                    "mal_id" => 2,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/p-one.jpg"
                        ]
                    ],
                    "title" => "P-ONE",
                    "type" => "Intermediate",
                    "specifications" => [
                        "length_cm" => 46,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "100% in carbonio",
                        "faces" => "100% carbon 3K"
                    ],
                    "core" => [
                        "material" => "EVA Back Extra Soft",
                        "features" => [
                            "tocco morbido",
                            "colpi potenti",
                            "uscita palla ottimale"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Superficie con finitura opaca per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "MEDIO",
                    "playing_style" => [
                        "control" => 8,
                        "power" => 7,
                        "maneuverability" => 8,
                        "comfort" => 8
                    ],
                    "intended_use" => "Progettata per giocatori di medio livello"
                ],
                [
                    "mal_id" => 3,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/fight.jpg"
                        ]
                    ],
                    "title" => "Fight",
                    "type" => "Advanced",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "100% in carbonio",
                        "faces" => "100% carbon 18K"
                    ],
                    "core" => [
                        "material" => "EVA Back Extra Soft",
                        "features" => [
                            "tocco morbido",
                            "colpi potenti",
                            "uscita palla ottimale"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Superficie con finitura opaca per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "MEDIO/ALTO",
                    "playing_style" => [
                        "control" => 8,
                        "power" => 9,
                        "maneuverability" => 8,
                        "comfort" => 7
                    ],
                    "intended_use" => "Novità dell'anno, per giocatori di livello medio/alto"
                ],
                [
                    "mal_id" => 4,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/silverpadel-3k.jpg"
                        ]
                    ],
                    "title" => "SilverPadel 3K",
                    "type" => "Professional",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "100% in carbonio",
                        "faces" => "100% carbon 3K"
                    ],
                    "core" => [
                        "material" => "Super Soft Black EVA",
                        "features" => [
                            "velocità",
                            "maneggevolezza",
                            "precisione negli effetti"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Quicksand Futura System",
                            "description" => "Sistema antivibrazione che riduce circa l'80% delle vibrazioni"
                        ],
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Rilievo del piatto ruvido per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "ALTO",
                    "playing_style" => [
                        "control" => 9,
                        "power" => 8,
                        "maneuverability" => 9,
                        "comfort" => 9
                    ],
                    "intended_use" => "Progettata per giocatori avanzati"
                ],
                [
                    "mal_id" => 5,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/ready-2023.jpg"
                        ]
                    ],
                    "title" => "READY 2023",
                    "type" => "Intermediate",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "50% carbonio 50% fibra di vetro",
                        "faces" => "100% fibra di vetro"
                    ],
                    "core" => [
                        "material" => "Super Soft Black EVA",
                        "features" => [
                            "velocità",
                            "maneggevolezza",
                            "controllo"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Rilievo del piatto ruvido per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "MEDIO",
                    "playing_style" => [
                        "control" => 8,
                        "power" => 7,
                        "maneuverability" => 8,
                        "comfort" => 8
                    ],
                    "intended_use" => "Progettata per giocatori di medio livello"
                ],
                [
                    "mal_id" => 6,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/think-2023.jpg"
                        ]
                    ],
                    "title" => "THINK 2023",
                    "type" => "Amateur",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "30% carbonio 70% fibra di vetro",
                        "faces" => "100% fibra di vetro"
                    ],
                    "core" => [
                        "material" => "Super Soft Black EVA",
                        "features" => [
                            "controllo",
                            "precisione",
                            "tocco eccezionale"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Rilievo del piatto ruvido per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "MEDIO",
                    "playing_style" => [
                        "control" => 8,
                        "power" => 6,
                        "maneuverability" => 7,
                        "comfort" => 9
                    ],
                    "intended_use" => "Concepita per giocatori amatori e occasionali"
                ],
                [
                    "mal_id" => 7,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/q23.jpg"
                        ]
                    ],
                    "title" => "Q23",
                    "type" => "Beginner",
                    "specifications" => [
                        "length_cm" => 45.5,
                        "thickness_mm" => 38,
                        "weight_g" => "360/365",
                        "balance" => "medio",
                        "frame" => "100% fibra di vetro",
                        "faces" => "100% fibra di vetro"
                    ],
                    "core" => [
                        "material" => "Super Soft Black EVA",
                        "features" => [
                            "flessibilità",
                            "morbidezza",
                            "approccio semplice"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Full Plane Effect",
                            "description" => "Rilievo del piatto ruvido per maggiore precisione negli effetti"
                        ]
                    ],
                    "player_level" => "PRINCIPIANTE",
                    "playing_style" => [
                        "control" => 9,
                        "power" => 5,
                        "maneuverability" => 8,
                        "comfort" => 9
                    ],
                    "intended_use" => "Ideale per un approccio semplice e piacevole al padel"
                ],
                [
                    "mal_id" => 8,
                    "url" => [
                        "jpg" => [
                            "image_url" => "/media/listaRacchette/cuchilla-junior.jpg"
                        ]
                    ],
                    "title" => "Cuchilla Junior",
                    "type" => "Junior",
                    "specifications" => [
                        "length_cm" => 43.5,
                        "thickness_mm" => 33,
                        "weight_g" => "270/275",
                        "balance" => "medio",
                        "frame" => "100% fibra di vetro",
                        "faces" => "100% fibra di vetro"
                    ],
                    "core" => [
                        "material" => "Super Soft Black EVA",
                        "features" => [
                            "maneggevolezza",
                            "semplicità",
                            "leggerezza"
                        ]
                    ],
                    "technologies" => [
                        [
                            "name" => "Junior Design",
                            "description" => "Progettata specificamente per bambini da 6 a 12 anni"
                        ]
                    ],
                    "player_level" => "BAMBINO",
                    "playing_style" => [
                        "control" => 8,
                        "power" => 5,
                        "maneuverability" => 9,
                        "comfort" => 9
                    ],
                    "intended_use" => "Dedicata ai giovani principianti da 6 a 12 anni"
                ]
            ]
        ];
    }





    public function getRacchette(Request $request)
    {
        try {
            $data = $this->getRacchetteData();

            // Applica il filtro per livello se presente
            if ($request->has('level') && !empty($request->level)) {
                $level = $request->query('level');
                $filteredData = array_filter($data['data'], function($racchetta) use ($level) {
                    return $racchetta['player_level'] === $level;
                });

                $data['data'] = array_values($filteredData);
                $data['pagination']['items']['count'] = count($filteredData);
                $data['pagination']['items']['total'] = count($filteredData);
            }

            return response()->json($data);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Errore nel caricamento delle racchette: ' . $e->getMessage()
            ], 500);
        }
    }





    public function getRacchettaById($id)
    {
        try {
            $data = $this->getRacchetteData();

            // Cerca la racchetta con l'ID specificato
            $racchetta = collect($data['data'])->firstWhere('mal_id', (int)$id);

            if (!$racchetta) {
                return response()->json([
                    'error' => true,
                    'message' => 'Racchetta non trovata'
                ], 404);
            }

            return response()->json($racchetta);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Errore nel caricamento della racchetta: ' . $e->getMessage()
            ], 500);
        }
    }
}