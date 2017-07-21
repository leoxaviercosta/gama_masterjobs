<?php

namespace App\Http\Controllers;

use App\Http\Services\LeadsServices;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Leads;
use App\Post;

class LeadsController extends Controller
{
    public function index() {
        $leads       = \App\Leads::orderBy('created_at', 'desc')->paginate(50);
        $localizacao = $this->getEstatisticaLocalizacao();
        $stacks      = $this->getEstatisticaStacks();

        $leads = array(
            'leads'       => $leads,
            'localizacao' => $localizacao,
            'stacks'      => $stacks
        );

        return view('admin.leads.index', compact('leads'));
    }

    public function getEstatisticaLocalizacao() {
        $localizacao = (new LeadsServices())->getEstatisticaLocalizacao();
        return $localizacao;
    }

    public function getEstatisticaStacks() {
        $stacks = (new LeadsServices())->getEstatisticaStacks();
        return $stacks;
    }
}
