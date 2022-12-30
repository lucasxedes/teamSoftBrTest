<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function store(array $data);
    public function all();
    public function get($id);
    public function update(array $data, $id);
    public function destroy($id);
}
