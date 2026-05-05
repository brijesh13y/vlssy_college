<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{service}', [HomeController::class, 'service'])->name('service.detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/admission', [HomeController::class, 'admission'])->name('admission');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/examination', [HomeController::class, 'examination'])->name('examination');
Route::get('/our-staff', [HomeController::class, 'ourStaff'])->name('our-staff');
Route::get('/our-blog', [HomeController::class, 'ourBlog'])->name('our-blog');

// Admin Routes
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'loginPost'])->name('admin.login.post');

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Contact Queries
    Route::get('/queries', [AdminController::class, 'queriesIndex'])->name('queries.index');
    Route::get('/queries/{query}', [AdminController::class, 'queriesShow'])->name('queries.show');
    Route::delete('/queries/{query}', [AdminController::class, 'queriesDestroy'])->name('queries.destroy');

    // Staff
    Route::get('/staff', [AdminController::class, 'staffIndex'])->name('staff.index');
    Route::get('/staff/create', [AdminController::class, 'staffCreate'])->name('staff.create');
    Route::post('/staff', [AdminController::class, 'staffStore'])->name('staff.store');
    Route::get('/staff/{member}/edit', [AdminController::class, 'staffEdit'])->name('staff.edit');
    Route::put('/staff/{member}', [AdminController::class, 'staffUpdate'])->name('staff.update');
    Route::delete('/staff/{member}', [AdminController::class, 'staffDestroy'])->name('staff.destroy');

    // Testimonials
    Route::get('/testimonials', [AdminController::class, 'testimonialsIndex'])->name('testimonials.index');
    Route::get('/testimonials/create', [AdminController::class, 'testimonialsCreate'])->name('testimonials.create');
    Route::post('/testimonials', [AdminController::class, 'testimonialsStore'])->name('testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [AdminController::class, 'testimonialsEdit'])->name('testimonials.edit');
    Route::put('/testimonials/{testimonial}', [AdminController::class, 'testimonialsUpdate'])->name('testimonials.update');
    Route::delete('/testimonials/{testimonial}', [AdminController::class, 'testimonialsDestroy'])->name('testimonials.destroy');

    // Blogs
    Route::get('/blogs', [AdminController::class, 'blogsIndex'])->name('blogs.index');
    Route::get('/blogs/create', [AdminController::class, 'blogsCreate'])->name('blogs.create');
    Route::post('/blogs', [AdminController::class, 'blogsStore'])->name('blogs.store');
    Route::get('/blogs/{blog}/edit', [AdminController::class, 'blogsEdit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [AdminController::class, 'blogsUpdate'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [AdminController::class, 'blogsDestroy'])->name('blogs.destroy');

    // Gallery
    Route::get('/gallery-manage', [AdminController::class, 'galleryIndex'])->name('gallery.index');
    Route::get('/gallery-manage/create', [AdminController::class, 'galleryCreate'])->name('gallery.create');
    Route::post('/gallery-manage', [AdminController::class, 'galleryStore'])->name('gallery.store');
    Route::get('/gallery-manage/{gallery}/edit', [AdminController::class, 'galleryEdit'])->name('gallery.edit');
    Route::put('/gallery-manage/{gallery}', [AdminController::class, 'galleryUpdate'])->name('gallery.update');
    Route::delete('/gallery-manage/{gallery}', [AdminController::class, 'galleryDestroy'])->name('gallery.destroy');

    // Educational Phases
    Route::get('/phases', [AdminController::class, 'phasesIndex'])->name('phases.index');
    Route::get('/phases/create', [AdminController::class, 'phasesCreate'])->name('phases.create');
    Route::post('/phases', [AdminController::class, 'phasesStore'])->name('phases.store');
    Route::get('/phases/{phase}/edit', [AdminController::class, 'phasesEdit'])->name('phases.edit');
    Route::put('/phases/{phase}', [AdminController::class, 'phasesUpdate'])->name('phases.update');
    Route::delete('/phases/{phase}', [AdminController::class, 'phasesDestroy'])->name('phases.destroy');

    // Facilities
    Route::get('/facilities-manage', [AdminController::class, 'facilitiesIndex'])->name('facilities.index');
    Route::get('/facilities-manage/create', [AdminController::class, 'facilitiesCreate'])->name('facilities.create');
    Route::post('/facilities-manage', [AdminController::class, 'facilitiesStore'])->name('facilities.store');
    Route::get('/facilities-manage/{facility}/edit', [AdminController::class, 'facilitiesEdit'])->name('facilities.edit');
    Route::put('/facilities-manage/{facility}', [AdminController::class, 'facilitiesUpdate'])->name('facilities.update');
    Route::delete('/facilities-manage/{facility}', [AdminController::class, 'facilitiesDestroy'])->name('facilities.destroy');
});
