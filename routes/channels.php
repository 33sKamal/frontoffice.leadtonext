<?php

use App\Broadcasting\BackOfficeChannels\Sourcing\NewSourcingMessageChannel;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('new-sourcing-message.{item}', NewSourcingMessageChannel::class);
