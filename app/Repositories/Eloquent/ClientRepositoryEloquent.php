<?php

namespace App\Repositories\Eloquent;

use App\Models\Client;
use App\Repositories\ClientRepositoryInterface;

class ClientRepositoryEloquent extends BaseRepositoryEloquent implements ClientRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Client());
    }
}
