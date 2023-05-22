<?php

namespace App\Interfaces;

interface SystemRoleRepositoryInterface
{
    public function index();
    public function create();
    public function update();
    public function delete();
}
