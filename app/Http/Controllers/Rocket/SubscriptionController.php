<?php
namespace App\Http\Controllers\Rocket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function get(Request $request)
    {
        return '{"update":[],"remove":[],"success":true}';
    }
}