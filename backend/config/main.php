<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
		'urlManager' => [
            'class' => 'yii\web\UrlManager',
			
            'showScriptName' => false,
            'enablePrettyUrl' => true,
			'rules'=>[
				
				// INDEX
				'profile'=>'aboutus/index',				
				'layanan'=>'layanan/index',
				'kategori'=>'produk-kategori/index',
				'produk'=>'produk/index',
				'logo'=>'logo/index',
				'slider'=>'slider/index',
				'karir'=>'karir/index',
				'blog'=>'blog/index',
				'faq'=>'faq/index',
                'kontak'=>'kontak/index',
                'klien' => 'client/index',
				

				// CREATE
                'profile-add'=>'aboutus/create',		
                'layanan-add'=>'layanan/create',		
                'kategori-add'=>'produk-kategori/create',		
                'produk-add'=>'produk/create',		
                'logo-add'=>'logo/create',		
                'slider-add'=>'slider/create',		
                'karir-add'=>'karir/create',		
                'blog-add'=>'blog/create',		
                'faq-add'=>'faq/create',		
                'kontak-add'=>'kontak/create',
                'klien-add' => 'client/create',               	
                



                // VIEW
                'profile-list-<id>'=>'aboutus/view',
                'layanan-list-<id>'=>'layanan/view',
                'kategori-list-<id>'=>'produk-kategori/view',
                'produk-list-<id>'=>'produk/view',
                'logo-list-<id>'=>'logo/view',
                'slider-list-<id>'=>'slider/view',
                'karir-list-<id>'=>'karir/view',
                'blog-list-<id>'=>'blog/view',
                'faq-list-<id>'=>'faq/view',
                'kontak-list-<id>'=>'kontak/view',
                'klien-list-<id>'=>'client/view',




                // DELETE
                'profile-delete-<id>'=>'aboutus/delete',
                'layanan-delete-<id>'=>'layanan/delete',
                'kategori-delete-<id>'=>'produk-kategori/delete',
                'produk-delete-<id>'=>'produk/delete',
                'logo-delete-<id>'=>'logo/delete',
                'slider-delete-<id>'=>'slider/delete',
                'karir-delete-<id>'=>'karir/delete',
                'blog-delete-<id>'=>'blog/delete',
                'faq-delete-<id>'=>'faq/delete',
                'kontak-delete-<id>'=>'kontak/delete',
                'klien-delete-<id>'=>'client/delete',
               
               
                // UPDATE
                'profile-update-<id>'=>'aboutus/update',
                'layanan-update-<id>'=>'layanan/update',
                'kategori-update-<id>'=>'produk-kategori/update',
                'produk-update-<id>'=>'produk/update',
                'logo-update-<id>'=>'logo/update',
                'slider-update-<id>'=>'slider/update',
                'karir-update-<id>'=>'karir/update',
                'blog-update-<id>'=>'blog/update',
                'faq-update-<id>'=>'faq/update',
                'kontak-update-<id>'=>'kontak/update',
                'klien-update-<id>'=>'client/update',

                // LOGIN
                'login'=>'site/login',

			],
		],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],        
              
    ],
    'params' => $params,
];
