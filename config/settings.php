<?php

/**
 * Defaults settings that should be added in database when project run first time
 */

return [

	'fixed_roles' => [
        'super_admin' => ['label'=>'Super Admin'],
        'seller' => ['label'=>'Seller'],
        'buyer' => ['label'=>'Buyer'],
        'corporate-seller' => ['label'=>'Corporate Seller'],
        'corporate-buyer' => ['label'=>'Corporate Buyer',],
    ],

    'role_types' => [
    	2 => 'Admin',
    	3 => 'User',
    ],

    'not_action_admin_roles' => ['super_admin','seller','buyer','corporate-seller','corporate-buyer'],

    'user_status' =>[
    	0 => 'Deactive',
    	1 => 'Active'
    ]
    
];