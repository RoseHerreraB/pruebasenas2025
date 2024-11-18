<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Canal privado para un producto específico
Broadcast::channel('producto.{productoId}', function (User $user, $productoId) {
    // Buscar el producto por ID
    $producto = Producto::find($productoId);

    // Verificar si el producto existe y si el usuario tiene permiso para verlo
    return $producto && $user->can('view', $producto);
});
