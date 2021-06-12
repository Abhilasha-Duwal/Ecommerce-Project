<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
          [
            'name'=>'OPPO',
            'price'=>'300',
            'description'=>'smart phone with 4gb ram and much more',
            'category'=>'mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a53/navigation/A53-navigation-blue-v2.png'
          ],
          [
            'name'=>'LG tv',
            'price'=>'2000',
            'description'=>'smart tv with 4gb ram and much more',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/us/images/tvs/md06098476/gallery/desktop-01.jpg'
          ],
          [
            'name'=>'Vivo',
            'price'=>'500',
            'description'=>'smart phone with 4gb ram and much more',
            'category'=>'mobile',
            'gallery'=>'https://static.toiimg.com/thumb/msid-70806196,width-220,resizemode-4,imgv-6/Vivo-Z1x.jpg'
          ],
          [
            'name'=>'Panasonic TV',
            'price'=>'1000',
            'description'=>'smart tv with 4gb ram and much more',
            'category'=>'tv',
            'gallery'=>'https://www.sentinelassam.com/wp-content/uploads/2018/06/pannna-1.jpg'
          ],

        ]);
    }
}
