<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Interfaces\SystemRoleRepositoryInterface;
use Illuminate\Http\Request;

class SystemRoleController extends Controller
{
    private $systemRoleRepository;

    public function __construct(SystemRoleRepositoryInterface $systemRoleRepository)
    {
        $this->systemRoleRepository = $systemRoleRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = $this->systemRoleRepository->index();
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $response = $this->systemRoleRepository->store($request);
        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $roles = $this->systemRoleRepository->show();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = $this->systemRoleRepository->edit();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $roles = $this->systemRoleRepository->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoleRequest $request)
    {
        $response = $this->systemRoleRepository->destroy();
        return $response;
    }
}
