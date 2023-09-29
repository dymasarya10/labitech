<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminTestimonialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Front
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aplikasi', [HomeController::class, 'aplikasi'])->name('aplikasi');
Route::get('/visi-misi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/certificate', [HomeController::class, 'certificate'])->name('certificate');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'details'])->name('blog_details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send-email', [ContactController::class, 'send_email'])->name('contact_send_email');
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');


// Route Admin
Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login_submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget_password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget_password_submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

//Route Group Admin
Route::group(['middleware' => ['admin:admin']], function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin_home');
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
    Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
    Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('admin_setting');
    Route::post('/admin/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update');

    Route::get('/admin/page/contact', [AdminPageController::class, 'contact'])->name('admin_page_contact');
    Route::post('/admin/page/contact/update', [AdminPageController::class, 'contact_update'])->name('admin_page_contact_update');

    Route::get('/admin/page/faq', [AdminPageController::class, 'faq'])->name('admin_page_faq');
    Route::post('/admin/page/faq/update', [AdminPageController::class, 'faq_update'])->name('admin_page_faq_update');

    Route::get('/admin/page/blog', [AdminPageController::class, 'blog'])->name('admin_page_blog');
    Route::post('/admin/page/blog/update', [AdminPageController::class, 'blog_update'])->name('admin_page_blog_update');

    Route::get('/admin/page/signup', [AdminPageController::class, 'signup'])->name('admin_page_signup');
    Route::post('/admin/page/signup/update', [AdminPageController::class, 'signup_update'])->name('admin_page_signup_update');

    Route::get('/admin/page/signin', [AdminPageController::class, 'signin'])->name('admin_page_signin');
    Route::post('/admin/page/signin/update', [AdminPageController::class, 'signin_update'])->name('admin_page_signin_update');


    // Admin Lupa Password
    Route::get('/admin/page/forget-password', [AdminPageController::class, 'forget_password'])->name('admin_page_forget_password');
    Route::post('/admin/page/forget-password/update', [AdminPageController::class, 'forget_password_update'])->name('admin_page_forget_password_update');
    Route::get('/admin/page/reset-password', [AdminPageController::class, 'reset_password'])->name('admin_page_reset_password');
    Route::post('/admin/page/reset-password/update', [AdminPageController::class, 'reset_password_update'])->name('admin_page_reset_password_update');

    // Admin Slide
    Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin_slide_view');
    Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin_slide_add');
    Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin_slide_store');
    Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin_slide_edit');
    Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin_slide_update');
    Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin_slide_delete');

    //Admin Testimonial
    Route::get('/admin/testimonial/view', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_view');
    Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add');
    Route::post('/admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_store');
    Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit');
    Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update');
    Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete');


    //Route Post Blog
    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin_post_view');
    Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin_post_add');
    Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin_post_store');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
    Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete');

    //Route Gallery

    Route::get('/admin/gallery/view', [AdminGalleryController::class, 'index'])->name('admin_gallery_view');
    Route::get('/admin/gallery/add', [AdminGalleryController::class, 'add'])->name('admin_gallery_add');
    Route::post('/admin/gallery/store', [AdminGalleryController::class, 'store'])->name('admin_gallery_store');
    Route::get('/admin/gallery/edit/{id}', [AdminGalleryController::class, 'edit'])->name('admin_gallery_edit');
    Route::post('/admin/gallery/update/{id}', [AdminGalleryController::class, 'update'])->name('admin_gallery_update');
    Route::get('/admin/gallery/delete/{id}', [AdminGalleryController::class, 'delete'])->name('admin_gallery_delete');

    //Route Faq

    Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin_faq_view');
    Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin_faq_add');
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit');
    Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
    Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete');
});
