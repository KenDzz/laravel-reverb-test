<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('channel-kendzz', function ($user) {
    return true;
});
