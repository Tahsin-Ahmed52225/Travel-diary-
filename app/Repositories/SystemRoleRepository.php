<?php

namespace App\Repositories;

use App\Models\Role;
use App\Enums\SystemMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RoleRequest;
use App\Interfaces\SystemRoleRepositoryInterface;

class SystemRoleRepository implements SystemRoleRepositoryInterface
{
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => SystemMessage::SUCCESS ,
            'data' => Role::getAll() ,
        ], Response::HTTP_OK);
    }
    public function store(RoleRequest $request)
    {
        $role = Role::store($request);

        return response()->json(['message' => SystemMessage::SUCCESS ,
        'data' => [
           'role' => $role ,
           ]
        ], Response::HTTP_CREATED);
    }
    public function update()
    {
        dd("updated");
    }
    public function destroy()
    {
        dd("deleted");
    }
    public function show()
    {
        dd("showed");
    }
    public function edit()
    {
        dd("edited");
    }
}
