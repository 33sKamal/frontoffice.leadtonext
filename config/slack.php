<?php

return [
    'webhooks' => [
        'error' => env('SLACK_ALERT_WEBHOOK_ERROR'),
        'invoice' => env('SLACK_ALERT_WEBHOOK_INVOICE'),
    ],
];
