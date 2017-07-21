<?php

namespace App\Http\Services;

use App\Http\Repositories\LeadsRepositories;
use DB;

class LeadsServices
{
    public function getEstatisticaLocalizacao() {
        return (new LeadsRepositories())->getEstatisticaLocalizacao();
    }

    public function getEstatisticaStacks() {
        return (new LeadsRepositories())->getEstatisticaStacks();
    }
}