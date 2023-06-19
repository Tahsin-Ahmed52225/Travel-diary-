<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface SystemRoleRepositoryInterface
{
    public function index(Request $request);
    public function store();
    public function update();
    public function edit();
    public function show();
    public function destroy();

}
