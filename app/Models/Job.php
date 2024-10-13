<?php

namespace App\Models;

use Illuminate\Container\Attributes\Database;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}


// public static function all(): array
//     {
//         return     [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '40000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '90000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '30000'
//             ],
//         ];
//     }

//     /**
//      * find the specific job
//      */
//     public static function find(int $id)
//     {
//         // $job = Arr::first($jobs, function ($job) use ($id) {
//         //     return $job['id'] == $id;
//         // });

//          $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

//         // return Arr::first(static::all(), fn($job) => $job['id'] == $id) ?? abort('404');

//         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

//         if (! $job) {
//             abort('404');
//         }
//         return $job;
//     }