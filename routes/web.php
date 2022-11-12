<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FooterController;
use App\Http\Controllers\backend\HomeSlideController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\frontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('backend.index');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/update/profile', 'updateProfile')->name('update.profile');
        Route::get('/admin/password', 'password')->name('admin.password');
        Route::post('/admin/change-password', 'changePassword')->name('change.password');
    });
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about/page', 'aboutPage')->name('aboutPage');
    Route::get('/home/slide', 'homeSlide')->name('home.slide');
    Route::get('/porfolto-deatils-page/{id}', 'portfolioDetails')->name('portfolioDetails');
    Route::get('/blog-details/{id}', 'blogDetails')->name('blog.details');
    Route::get('/blog-Category/{id}', 'blogCategory')->name('blog.cat');
    Route::get('/all-blogs', 'allBlogs')->name('all.blogs');
    Route::get('/service-deatils/{id}', 'serviceDetails')->name('service.details');
    Route::get('/all/portfolio', 'portfolio')->name('portfolio.all');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(HomeSlideController::class)->group(function () {
        Route::get('/home/slide', 'homeSlide')->name('home.slide');
        Route::PUT('/home/slideUpdate/{id}', 'homeSlideUpdate')->name('update.slide');
    });

    Route::controller(AboutController::class)->group(function () {
        Route::get('/About', 'about')->name('about');
        Route::put('/About/update', 'aboutUpdate')->name('about.update');
        Route::get('/About/multi', 'aboutMulti')->name('about.multi');
        Route::post('/About/multi/image', 'aboutMultiImage')->name('about.multi.image');
        Route::get('/About/all/images', 'aboutAllImages')->name('about.All.image');
        Route::get('/About/images/edit/{id}', 'aboutImageEdit')->name('about.image.edit');
        Route::PUT('/About/images/update/', 'aboutImageUpdate')->name('about.image.update');
        Route::delete('/About/images/delete/{id}', 'aboutImageDelete')->name('about.image.delete');
    });

    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/portfolio/add', 'addPortfolio')->name('add.portfolio');
        Route::post('/portfolio/store', 'storePortfolio')->name('portfolio.store');
        Route::get('/portfolio/edit/{id}', 'editPortfolio')->name('portfolio.edit');
        Route::put('/portfolio/update/{id}', 'updatePortfolio')->name('portfolio.update');
        Route::delete('/portfolio/delete/{id}', 'deletePortfolio')->name('portfolio.delete');
    });

    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/blog/category', 'AllBlogCategory')->name('blog.category');
        Route::get('/add/blog/category', 'addBlogCategory')->name('add.blog.category');
        Route::post('/insert/blog/category', 'insertBlogCategory')->name('insert.blog.category');
        Route::get('/edit/blog/category/{id}', 'editBlogCategory')->name('edit.blog.category');
        Route::put('/update/blog/category/{id}', 'updateBlogCategory')->name('update.blog.category');
        Route::delete('/delete/blog/category/{id}', 'deleteBlogCategory')->name('delete.blog.category');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'allBlogs')->name('all.blog');
        Route::get('/add/blog', 'addBlog')->name('add.blog');
        Route::post('/store/blog', 'storeBlog')->name('blog.store');
        Route::get('/edit/blog/{id}', 'editBlog')->name('edit.blog');
        Route::put('/update/blog/{id}', 'updateBlog')->name('update.blog');
        Route::delete('/delete/blog/{id}', 'deleteBlog')->name('delete.blog');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/service', 'index')->name('add.service');
        Route::post('/service/store', 'serviceStore')->name('service.store');
        Route::get('/all/service', 'allService')->name('service.show');
        Route::get('/edit/service/{id}', 'editService')->name('service.edit');
        Route::put('/update/service/{id}', 'updateService')->name('service.update');
        Route::delete('/delete/service/{id}', 'deleteService')->name('service.delete');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact/all', 'showContact')->name('show.contact');
        Route::delete('/contact/delete/{id}', 'deleteContact')->name('delete.contact');
    });

    Route::controller(FooterController::class)->group(function () {
        Route::get('/Footer/all', 'footer')->name('show.Footer');
        Route::put('/Footer/store', 'storeFooter')->name('footer.store');
    });
});
require __DIR__ . '/auth.php';
