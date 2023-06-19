<?php

namespace App\Http\Controllers;

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
    public function index(Request $request)
    {
            $roles = $this->systemRoleRepository->index($request);
            return response()->json(['roles' => $roles], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->systemRoleRepository->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = $this->systemRoleRepository->store();
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
    public function destroy(string $id)
    {
        $roles = $this->systemRoleRepository->destroy();
    }
}
