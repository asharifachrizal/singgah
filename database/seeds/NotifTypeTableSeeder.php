<?php

use Illuminate\Database\Seeder;

class NotifTypeTableSeeder extends Seeder
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
        DB::table('notif_types')->insert([            
            'value' => 'General Info',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'General Warning',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'General Danger',                        
        ]);                      
        DB::table('notif_types')->insert([            
            'value' => 'Invoice Requested',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'Invoice to Pay',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'Invoice Canceled',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'Invoice Paid',                        
        ]);              
        DB::table('notif_types')->insert([            
            'value' => 'Order Finish',                        
        ]);              
        
    }
}
