<?php

namespace App\Http\Repositories;

use DB;

class LeadsRepositories
{
    public function getEstatisticaLocalizacao() {
        $sql = "SELECT COUNT, IF (LOCATION = '', '<b>Não Localizado</b>', LOCATION) AS LOCATION
                  FROM (
                    SELECT COUNT(1) AS COUNT, SUBSTRING_INDEX(IP_LOCATION, '-', -1) AS LOCATION
                      FROM LEADS
                     GROUP BY SUBSTRING_INDEX(IP_LOCATION, '-', -1)
                     ORDER BY COUNT DESC
                ) LOCATION";

        $result = DB::select($sql);
        return $result;
    }

    public function getEstatisticaStacks() {
        $sql = "SELECT COUNT, IF (STACK = '', '<b>NÃO INFORMADO</b>', STACK) AS STACK
                  FROM (
                    SELECT COUNT(1) AS COUNT, STACK
                      FROM LEADS
                     GROUP BY STACK
                     ORDER BY COUNT DESC
                ) STACKS";

        $result = DB::select($sql);
        return $result;
    }
}