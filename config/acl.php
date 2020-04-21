<?php

return [
    'roles' => ['root', 'admin', 'mentor', 'trainee'],

    'permissions' => [
        /*----------Home-------------*/
        'home' => ['admin', 'root', 'mentor', 'trainee'],
        /* web route */
        'admin.panels.profile.show' => ['admin'],
        'panels.admin.trainee.index' => ['admin'],
        'panels.admin.mentor.index' => ['admin'],
        'panels.admin.contact_us.index' => ['admin'],
        'panels.admin.forum.index' => ['admin'],

        'panels.mentor.index' => ['admin', 'mentor'],
        'panels.trainee.index' => ['admin', 'trainee']

    ]
];
