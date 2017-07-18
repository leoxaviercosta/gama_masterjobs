<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Leads;
use App\Post;

class LeadsController extends Controller
{
    public function index() {
        $leads = \App\Leads::orderBy('created_at', 'desc')->paginate(50);
        return view('admin.leads.index', compact('leads'));
    }
}
