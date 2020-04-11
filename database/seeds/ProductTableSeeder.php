<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSampleProduct();
    }

    public function createSampleProduct()
    {
        DB::table('products')->insert([
            'category_id' => 1,     
            'value' => 'Booklet',            
            'slug' => 'booklet',    
        ]);
        DB::table('products')->insert([
            'category_id' => 1,      
            'value' => 'Brosur',            
            'slug' => 'brosur',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,           
            'value' => 'Poster',               
            'slug' => 'poster',
        ]);
        DB::table('products')->insert([
            'category_id' => 1,            
            'value' => 'Roll Banner / X-banner',              
            'slug' => 'roll-x-banner',
        ]);
        DB::table('products')->insert([
            'category_id' => 1,  
            'value' => 'Banner',                
            'slug' => 'banner',        
        ]);
        DB::table('products')->insert([
            'category_id' => 1,  
            'value' => 'Baliho',                        
            'slug' => 'baliho',
        ]);
        DB::table('products')->insert([
            'category_id' => 1,        
            'value' => 'Kartu Nama',                  
            'slug' => 'kartu-nama',
        ]);
        DB::table('products')->insert([
            'category_id' => 1,            
            'value' => 'Sampul Dokumen',              
            'slug' => 'sampul-dokumen',
        ]);
        DB::table('products')->insert([
            'category_id' => 1,  
            'value' => 'Presentasi',             
            'slug' => 'presentasi',           
        ]);
        DB::table('products')->insert([
            'category_id' => 1,        
            'value' => 'Iklan Koran',                  
            'slug' => 'iklan-koran',
        ]);
        DB::table('products')->insert([
            'category_id' => 2,   
            'value' => 'Konten Instagram - Feed',               
            'slug' => 'konten-instagram-feed',        
        ]);
        DB::table('products')->insert([
            'category_id' => 2,   
            'value' => 'Konten Instagram - Story',               
            'slug' => 'konten-instagram-story',        
        ]);
        DB::table('products')->insert([
            'category_id' => 2,  
            'value' => 'Infografis',               
            'slug' => 'infografis',         
        ]);
        DB::table('products')->insert([
            'category_id' => 2,           
            'value' => 'Konten Promosi',               
            'slug' => 'konten-promosi',
        ]);
        DB::table('products')->insert([
            'category_id' => 2,            
            'value' => 'Konten Broadcast',              
            'slug' => 'konten-broadcast',
        ]);
        DB::table('products')->insert([
            'category_id' => 3,  
            'value' => 'Short Bumper',              
            'slug' => 'short-bumper',          
        ]);
        DB::table('products')->insert([
            'category_id' => 3,  
            'value' => 'Long Bumper',              
            'slug' => 'long-bumper',          
        ]);
        DB::table('products')->insert([
            'category_id' => 3,  
            'value' => 'Editing Offline',               
            'slug' => 'editing-offline',         
        ]);
        DB::table('products')->insert([
            'category_id' => 3,  
            'value' => 'Motion Graphic',              
            'slug' => 'motion-graphic',          
        ]);
        DB::table('products')->insert([
            'category_id' => 3,  
            'value' => 'Animation',              
            'slug' => 'animation',          
        ]);
      

        
    }
}
