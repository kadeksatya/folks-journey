<?php

use App\Http\Controllers\Frontend\GeneralController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require_once('admin.php');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(GeneralController::class)->name('frontend.')->group(function(){
    route::get('/', 'index')->name('index');
    route::get('/faq', 'pagefaq')->name('faq');
    route::get('/contact', 'pagecontact')->name('contact');
    route::get('/about', 'pageabout')->name('about');
});


// Route::get('/about', function () {
//     return view(
//         "about",
//         [
//             "nama" => "Benony Gabriel",
//             "prodi" => "Ilmu Komputer"
//         ]
//     );
// });

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Tutorial Minum Kopi yang Baik dan Benar",
            "slug" => "Tutorial-Minum-Kopi-yang-Baik-dan-Benar",
            "author" => "Taylor Otwel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ],
        [
            "title" => "Membuat Website Blog dengan Laravel 8",
            "slug" => "Membuat-Website-Blog-dengan-Laravel-8",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta?"
        ],
        [
            "title" => "Belajar Laravel 8",
            "slug" => "Belajar-Laravel-8",
            "author" => "Benony Gabriel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ]
    ];


    return view("posts", ["posts" => $blog_posts]);
});


// Halaman single post
Route::get("posts/{slug}", function ($slug) {
    $blog_posts = [
        [
            "title" => "Tutorial Minum Kopi yang Baik dan Benar",
            "slug" => "Tutorial-Minum-Kopi-yang-Baik-dan-Benar",
            "author" => "Taylor Otwel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ],
        [
            "title" => "Membuat Website Blog dengan Laravel 8",
            "slug" => "Membuat-Website-Blog-dengan-Laravel-8",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta?"
        ],
        [
            "title" => "Belajar Laravel 8",
            "slug" => "Belajar-Laravel-8",
            "author" => "Benony Gabriel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view("post", ["post" => $new_post]);
});
