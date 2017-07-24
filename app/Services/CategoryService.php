<?php
namespace App\Services;

use App\User;
use App\Category;
use App\Repositories\CategoryRepository;

class CategoryService
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function store()
    {

    }
}