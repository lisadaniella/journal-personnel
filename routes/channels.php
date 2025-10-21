<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Ce fichier est utilisé pour définir les canaux d’événements en temps réel.
| Tu peux l’ignorer pour le moment si tu n’utilises pas les notifications ou Pusher.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
