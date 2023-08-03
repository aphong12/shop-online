<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
     private $categoryRepository;

     public function __construct(CategoryRepository $categoryRepository)
     {
         $this->categoryRepository = $categoryRepository;
     }

    public function getAllCategories($page)
    {
         return $this->categoryRepository->getCategories($page);
    }

    public function getParentCategories()
    {
        return $this->categoryRepository->getParentCategories();
    }
}
