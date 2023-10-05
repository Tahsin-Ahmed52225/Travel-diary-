<?php

namespace App\Interfaces;

use App\Http\Requests\RoleRequest;

interface SystemRoleRepositoryInterface
{
    public function index();
    public function store(RoleRequest $request);
    public function update();
    public function edit();
    public function show();
    public function destroy();

}
