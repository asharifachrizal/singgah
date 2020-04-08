<?php

use Illuminate\Database\Seeder;

class ProductNameTableSeeder extends Seeder
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
        DB::table('product_names')->insert([
            'value' => 'Booklet',            
            'slug' => 'booklet',    
        ]);
        DB::table('product_names')->insert([
            'value' => 'Brosur',    
            'slug' => 'brosur',            
        ]);
        DB::table('product_names')->insert([
            'value' => 'Poster',            
            'slug' => 'poster',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Roll Banner / X-banner',            
            'slug' => 'roll-x-banner',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Banner',    
            'slug' => 'banner',        
        ]);
        DB::table('product_names')->insert([
            'value' => 'Baliho',            
            'slug' => 'baliho',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Kartu Nama',            
            'slug' => 'kartu-nama',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Sampul Dokumen',            
            'slug' => 'sampul-dokumen',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Presentasi', 
            'slug' => 'presentasi',           
        ]);
        DB::table('product_names')->insert([
            'value' => 'Iklan Koran',            
            'slug' => 'iklan-koran',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Konten Instagram',    
            'slug' => 'konten-instagram',        
        ]);
        DB::table('product_names')->insert([
            'value' => 'Infografis',   
            'slug' => 'infografis',         
        ]);
        DB::table('product_names')->insert([
            'value' => 'Konten Promosi',            
            'slug' => 'konten-promosi',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Konten Broadcast',            
            'slug' => 'konten-broadcast',
        ]);
        DB::table('product_names')->insert([
            'value' => 'Bumper',  
            'slug' => 'bumper',          
        ]);
        DB::table('product_names')->insert([
            'value' => 'Editing Offline',   
            'slug' => 'editing-offline',         
        ]);
        DB::table('product_names')->insert([
            'value' => 'Motion Graphic',  
            'slug' => 'motion-graphic',          
        ]);
        DB::table('product_names')->insert([
            'value' => 'Animation',  
            'slug' => 'animation',          
        ]);
      

        
    }
}
