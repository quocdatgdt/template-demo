<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
    }
}

class ProductTableSeeder extends Seeder{
	public function run(){
		DB::table('product')->insert([
        		array('name'=>'Quan dai','gia'=>50000,'cate_id'=>2),
        		array('name'=>'Quan the thao','gia'=>50000,'cate_id'=>2),
        		array('name'=>'Quan lung','gia'=>50000,'cate_id'=>2),
        		array('name'=>'Quan rean','gia'=>50000,'cate_id'=>2),
        		array('name'=>'Quan tay','gia'=>50000,'cate_id'=>2)
        	]);
	}
}