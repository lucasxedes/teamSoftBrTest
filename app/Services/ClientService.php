<?php

namespace App\Services;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Address;
use App\Repositories\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientService
{

    public function __construct(protected ClientRepositoryInterface $repo)
    {

    }

    public function store(StoreClientRequest $request)
    {
        try{
            $client = $this->repo->store([
                'CNPJ' => $request->CNPJ,
                'corporate_name' => $request->corporate_name,
                'contact_name' => $request->contact_name,
                'telephone' => $request->telephone,
            ]);
            $adress = Address::query()->create([
                'client_address' => $client->id,
                'public_place' => $request->public_place,
                'number' => $request->number,
                'complement' => $request->complement,
                'district' => $request->district,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zip_code,
            ]);
            return response()->json([
                'message' => 'created successfully',
                'data' => $client, $adress
        ]);
        }catch(\Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ], 400);
            }
    }
    public function getList()
    {
        return $this->repo->all();
    }
    public function get($id)
    {
        try{
            $clientId = $this->repo->get($id);
            if (!$clientId)
            {
                throw new \Exception('not found', 404);
            }
            return $clientId;
        }catch(\Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ], 400);
        }
    }
    public function update(UpdateClientRequest $request, $id)
    {
        try{
            $clientId = $this->repo->get($id);
            if (!$clientId)
            {
                throw new \Exception('not found', 404);
            }
            return $this->repo->update([
                'CNPJ' => $request->CNPJ,
                'corporate_name' => $request->corporate_name,
                'contact_name' => $request->contact_name,
                'telephone' => $request->telephone,
            ], $id);
        }catch(\Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ], 400);
            }
    }
    public function destroy($id)
    {
        try{
            $clientId = $this->repo->get($id);
            if (!$clientId)
            {
                throw new \Exception('not found', 404);
            }
            return $this->repo->destroy($id);
        }catch(\Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
