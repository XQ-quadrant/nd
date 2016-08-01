<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yt',
            'username' => 'kc',
            'password' => 'Naga',
            'charset' => 'utf8',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => true,
            'useFileTransport' => false,    //这里一定要改成false，不然邮件不会发送
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.163.com',
                'username' => 'quadrantone@163.com',
                'password' => 'zxqdhd666',        //如果是163邮箱，此处要填授权码
                'port' => '25',
                'encryption' => 'tls',
            ],
            /*'messageConfig'=>[
                'charset'=>'UTF-8',
                'from'=>['quadrantone@163.com'=>'admin']
            ],*/
        ],
    ],
];
