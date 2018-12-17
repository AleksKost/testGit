<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.12.2018
 * Time: 21:50
 */

namespace App\Services;


final class GetAllCategoriesService
{
    public function getAllCategories(){
        return ['HTML', 'CSS', 'JavaScript'];
    }
}