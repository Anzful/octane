<?php
use App\Http\Controllers\NotificationController;

Route::post('/send-notification', [NotificationController::class, 'send']);
