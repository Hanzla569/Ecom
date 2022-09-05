<?php

namespace Database\Seeders;
use  Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            "name"=>"Samsung Phone",
            "price"=>"10000",
            "description"=>"smartphone 4gb ram",
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80",
        ],
        [
            "name"=>"OOPO Phone",
            "price"=>"100000",
            "description"=>"smartphone 8gb ram",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/WG/ZM/TG/ANDROID-98089178/product-jpeg-500x500.jpg",
        ],
        [
            "name"=>"Iphone ",
            "price"=>"200000",
            "description"=>"128gb ram",
            "category"=>"mobile",
            "gallery"=>"https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-r1.jpg",
        ],
        [
            "name"=>"hawaii Phone",
            "price"=>"1000000",
            "description"=>"4gb ram",
            "category"=>"mobile",
            "gallery"=>"https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/accessories/mate-xs-2-stand-pu-case/imgs/huawei-mate-xs-2-stand-pu-case-kv.webp"
        ]
        ]); 
    }
}
