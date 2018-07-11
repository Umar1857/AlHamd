<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index() {
        return view('admin.notification');
    }

    public function markasread() {
        Auth::user()->unreadNotifications->where('id',$_GET['id'])->markAsRead();

        echo true;
    }
}
