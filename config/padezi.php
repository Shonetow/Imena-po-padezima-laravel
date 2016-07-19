<?php

return [

    /**
     * Ovde možete promeniti vrednosti koje u vašoj aplikaciji definišu pol.
     *
     */
    'zensko' => 1,

    'musko' => 2,

    /**
     * Izuzeci imena za koje je nemoguće napisati
     * algoritam za vokativ, jer zavise od naglaska.
     */
    'izuzeci_zenskih' => [
        'Ceca', 'Maja', 'Zlata', 'Dana', 'Mira',
        'Sara', 'Neda', 'Nada', 'Maca', 'Mica',
        'Lepa', 'Janja', 'Brana', 'Stana', 'Maša',
        'Goca', 'Ljilja', 'Persa', 'Bilja', 'Anđa'
    ],

    'izuzeci_muskih' => [
        'Saša', 'Paša', 'Jakša', 'Vanja', 'Sanja'
    ]

];