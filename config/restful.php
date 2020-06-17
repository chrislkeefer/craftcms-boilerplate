<?php

return [
    '*' => [
        'authMethods' => [
            \flipbox\craft\jwt\filters\JwtHttpBearerAuth::class
        ]
    ]
];