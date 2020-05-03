<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper;
use Core\Models\Customer;
use Core\Models\Merchant;
use Core\Models\Pricing;
use Core\Models\PushSubscription;
use Core\Models\Shop;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $active_qp = QuestionPaper::where('status',1)->count();
        $inactive_qp = QuestionPaper::where('status',0)->count();
        return view('admin.dashboard.index',compact('active_qp','inactive_qp'));
    }
}
