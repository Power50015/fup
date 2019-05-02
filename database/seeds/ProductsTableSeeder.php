<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Oppo A3S Dual SIM - 16GB, 2GB RAM, 4G LTE, Purple",
            'product_des' => "The Oppo A3S smartphone has the perfect blend of style and technology. This smartphone is set to take your viewing experience to the next level with the help of 6.2inch IPS HD+ screen that renders high-quality images. The perfect modern-day design sets it apart from the ordinary smartphones. This sleek, lightweight and stylish smartphone feel comfortable in your hand. The powerful ",
            'product_model_name' => "6944284629417",
            'product_model_number' => "A3S",
            'product_color' => "Purple",
            'product_in_box' => "headphone",
            'product_price' => 300,
            'product_quan' => 12,
            'product_img1' => 'item_XL_37627020_146475864.jpg',
            'product_img2' => 'item_XL_37627020_146475866.jpg',
            'product_img3' => 'item_XL_37627020_146475868.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Apple iPhone X with FaceTime - 64GB, 4G LTE, Space Grey",
            'product_des' => "Apple iPhone X is equipped with a 12MP rear camera. This iPhone X boasts a 5.8inch Super Retina display. The Apple iPhone X, with its smooth and efficient performance, brings the world to your fingertips. This Apple iPhone X has 4G LTE network support that allows you to enjoy blazing fast internet speeds on the go.  ",
            'product_model_name' => "4547597992623",
            'product_model_number' => "2724468347153",
            'product_color' => "Gray",
            'product_in_box' => "headphone",
            'product_price' => 200.5,
            'product_quan' => 60,
            'product_img1' => 'item_XL_24051426_102956405.jpg',
            'product_img2' => 'item_XL_24051426_102956407.jpg',
            'product_img3' => 'item_XL_24051426_102956423.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Lenovo A6010 Dual Sim - 16GB, 2GB, 4G LTE, White",
            'product_des' => "The Lenovo A6010 Dual SIM runs on Android 5.0 Lollipop operating system to give you maximum smartphone computing performance on the go while keeping the battery consumption to its minimum. The device supports 4G LTE band that doesn’t drop connections and ",
            'product_model_name' => "2724330426719",
            'product_model_number' => "A6010",
            'product_color' => "White",
            'product_in_box' => "",
            'product_price' => 600,
            'product_quan' => 0,
            'product_img1' => 'item_XL_10921627_14852437.jpg',
            'product_img2' => 'item_XL_10921627_14852441.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Huawei Y5 Prime 2018 Dual SIM - 16GB, 2GB RAM ,4G LTE",
            'product_des' => "The Huawei Y5 Prime 2018 Smartphone runs on the Android 8.1.0 operating system that gives you access to multiple applications and innovative features.  ",
            'product_model_name' => "6901443226498",
            'product_model_number' => "A3HG",
            'product_color' => "Blue",
            'product_in_box' => "headphone",
            'product_price' => 1600,
            'product_quan' => 3,
            'product_img1' => 'huawei-y5-prime-2018-how-to-reset-300x300.jpg',
            'product_img2' => 'Huawei-Y5-Prime-2018-2.jpg',
            'product_img3' => 'huawei-y5-prime-2018-pakistan-priceoye-n006f.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Samsung Galaxy S8+ Dual Sim - 64GB, 4G LTE, Midnight Black",
            'product_des' => "Samsung Galaxy S8 Plus features a large 6.2inch, boundaryless display. This Samsung Galaxy 4G mobile loads every app quicker with its 4GB RAM. The Samsung Galaxy S8 Plus is a highly innovative, smart, and genius creation. It is equipped with the world's first 10nm processor that responds to your searches and clicks and offers you a benchmark shattering performance. The 4GB RAM ",
            'product_model_name' => "8806088708621",
            'product_model_number' => "2724468347153",
            'product_color' => "Black",
            'product_in_box' => "",
            'product_price' => 1250,
            'product_quan' => 20,
            'product_img1' => '41yfVhlhZBL._SY300_QL70_.jpg',
            'product_img2' => 'Samsung-Galaxy-S8-2.jpg',
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "HTC Desire 828 Dual Sim - 32GB, 3GB RAM, 4G LTE, Pearl White",
            'product_des' => "If you are looking to buy exceptionally powerful smartphones online, then look no further. The HTC Desire 828 Dual SIM smartphone makes an excellent choice as it is equipped with a bunch of advanced components that enable blazing fast performance. The pearl white phone’s streamlined curves and gently beveled edges exude eye pleasing elegance. The brilliant 5.5inch touchscreen",
            'product_model_name' => "2724330426719",
            'product_model_number' => "A6010",
            'product_color' => "White",
            'product_in_box' => "Btrrey, Screen",
            'product_price' => 1100,
            'product_quan' => 0,
            'product_img1' => 'item_L_11801899_17237080.jpg',
            'product_img2' => 'item_L_23573013_33763493.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Motorola Moto C Plus Dual SIM - 16GB, 2GB RAM, 4G LTE, Starry Black",
            'product_des' => "Motorola Moto C Plus dual-SIM smartphone delivers stunning performance. This Motorola mobile sports a beautiful starry black finish.Motorola Moto C Plus Dual-SIM smartphone is an amalgamation of good looks and high-end functionality. It works on a 1.3GHz, Quad-Core MediaTek MT6737 processor that offers glitch-free operations. It has a 2GB RAM module that allows you to open a ",
            'product_model_name' => "2724330426719",
            'product_model_number' => "A6010",
            'product_color' => "Black",
            'product_in_box' => "Handset, Power adapter, USB Cable, SIM Eject tool, Warranty card, User guide, Clear soft case",
            'product_price' => 6000,
            'product_quan' => 20,
            'product_img1' => 'motorola-moto-c-plus-product-image.jpg',
            'product_img2' => 'black-c-plus-300x300.jpg',
            'product_img3' => 's-l300.jpg'
        ]);
        Product::create([
            'product_id' => str_random(11),
            'product_name' => "Honor 8X Dual SIM - 128GB, 4GB RAM, 4G LTE, Red",
            'product_des' => "This Honor 8X Dual-SIM smartphone helps you tackle your everyday mobile computing needs with ultimate ease. It flaunts a high-class design that gives it an impeccable look. This smartphone sports a large 6.5inch screen with Full view display that brings the pictures to life. It renders every picture at an incredible resolution of 2340 x 1080 pixels with 397ppi. It features a ",
            'product_model_name' => "2724330426719",
            'product_model_number' => "A6010",
            'product_color' => "Red",
            'product_in_box' => "Handset, Power adapter, USB Cable, SIM Eject tool, Warranty card, User guide, Clear soft case",
            'product_price' => 300,
            'product_quan' => 5,
            'product_img1' => 'Honor-8X-3.jpg',
            'product_img2' => 's-l300sf(1).jpg',
            'product_img3' => 's-l30s0.jpg'
        ]);
    }
}
