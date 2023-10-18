<?php

namespace App\Http\Module\Domain\Service\Repository;

use App\Http\Module\Domain\Models\Biodata;

interface BiodataRepositoryInterface
{
    public function persist(Biodata $biodata);
    public function getById(int $Biodata_id): ?Biodata;

}