<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert([
      [
        'name' => 'गाई पालन',
        'slug' => 'गाई पालन',
        'description' => 'गाई पालनको सुबिधा लिन लाई कम्तिमा ५० वटा गाई पालेको हुनु पर्छ र गाई राख्नन उतिकै ठाउँ पनि हुन पर्छ!',
        'amount' => '१०,०००',
        'created_at' => '2022-10-20 10:11:20',
        'updated_at' => '2022-10-20 10:11:20',
      ],
      [
        'name' => 'मौरी पालन',
        'slug' => 'मौरी पालन',
        'description' => 'तपाईंको मौरी फार्म सञ्चालन लागतको लागि लगभग ३०,००० बजेट गर्न सुरक्षित छ। मौरी फार्म सुरु गर्ने लागत तपाईंको प्राथमिकता र छनौटहरूमा आधारित हुन्छ।',
        'amount' => '२५,००० ',
        'created_at' => '2022-10-20 11:01:50',
        'updated_at' => '2022-10-20 11:01:50',
      ]
    ]);
  }
}
