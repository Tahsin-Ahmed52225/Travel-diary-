<?php

namespace App\Repositories;

use App\Interfaces\SystemRoleRepositoryInterface;
use Illuminate\Http\Request;

class SystemRoleRepository implements SystemRoleRepositoryInterface
{
    public function index(Request $request)
    {
        dd("All the roles are available");
    }
    public function store()
    {
        dd("created");
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
