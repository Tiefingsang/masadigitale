<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

/* Route::get('/', function () {
    return view('welcome');
});
 */



Route::get('/', [PageController::class, 'index'])->name('home.index');

Route::get('/about', [PageController::class, 'about'])->name('about.index');
Route::get('/services', [PageController::class, 'services'])->name('services.index');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs.index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact.index');
//contact
Route::post('/contact/store', [PageController::class, 'contactStore'])->name('contact.store');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.index');
Route::get('/team', [PageController::class, 'team'])->name('team.index');

Route::get('/about-detail', [PageController::class, 'aboutDetail'])->name('about-detail');
Route::get('/services-detail', [PageController::class, 'servicesDetail'])->name('services-detail');
Route::get('/blogs-detail', [PageController::class, 'blogsDetail'])->name('blogs-detail');
Route::get('/contact-detail', [PageController::class, 'contactDetail'])->name('contact-detail');
Route::get('/gallery-detail', [PageController::class, 'galleryDetail'])->name('gallery-detail');
Route::get('/team-datail', [PageController::class, 'teamDetail'])->name('team.detail');


/* Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin.index');
}); */


Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// list element routing  admin lists
/* Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('login');
Route::post('/admin/login-store', [AdminController::class, 'adminLoginStore'])->name('admin.login.store');
Route::post('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout'); */
Route::get('/register', [AdminController::class, 'adminRegister'])->name('admin.register');
Route::post('/register-store', [AdminController::class, 'adminRegisterStore'])->name('admin.register.store');
Route::get('/login', [AdminController::class, 'adminLogin'])->name('login');
Route::post('/login-store', [AdminController::class, 'adminLoginStore'])->name('admin.login.store');
Route::post('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::group(['prefix' => 'admin',
    'middleware' => ['auth'] ], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin.index');
    Route::get('/blog', [AdminController::class, 'adminBlog'])->name('admin.blog');
    Route::get('/blog-index', [AdminController::class, 'adminBlogIndex'])->name('admin.blog.index');
    Route::post('/blog-store', [AdminController::class, 'adminBlogStore'])->name('admin.blog.store');
    Route::get('/blog-details', [AdminController::class, 'adminBlogDetails'])->name('admin.blog.show');
    Route::get('/blog-edite', [AdminController::class, 'adminBlogEdite'])->name('admin.blog.edite');
    Route::delete('/blog-delete', [AdminController::class, 'adminBlogDelete'])->name('admin.blog.delete');

    Route::post('/blog-update', [AdminController::class, 'adminBlogUpdate'])->name('admin.blog.update');
    Route::get('/contact', [AdminController::class, 'adminContact'])->name('admin.contact');
    Route::get('/projects', [AdminController::class, 'adminProjects'])->name('admin.projects');
    Route::get('/projects-detaile', [AdminController::class, 'adminProjectDetail'])->name('admin.projects-detaile');
    Route::get('/newsletter', [AdminController::class, 'adminNewsLetter'])->name('admin.newsletter');
    Route::get('/comments', [AdminController::class, 'adminComments'])->name('admin.comments');
    Route::get('/comments/{id}', [AdminController::class, 'adminCommentsShow'])->name('admin.comments.show');
    Route::put('/comments/{id}', [AdminController::class, 'adminCommentsDelete'])->name('admin.comments.update');
    Route::delete('/comments/{id}', [AdminController::class, 'adminCommentsDestroy'])->name('admin.comments.destroy');

    Route::get('/profil', [AdminController::class, 'adminProfil'])->name('admin.profil.index');
    Route::post('/profil/update', [AdminController::class, 'adminProfilUpdate'])->name('admin.profil.update.index');


    Route::get('/about', [AdminController::class, 'adminAboutEdit'])->name('admin.about');
    Route::post('/about-store', [AdminController::class, 'adminUpdate'])->name('admin.about.store');

    Route::get('/service-add', [AdminController::class, 'adminServiceAdd'])->name('admin.service');
    Route::post('/service-store', [AdminController::class, 'adminServiceStore'])->name('admin.service.store');
    Route::get('/service-list', [AdminController::class, 'adminServiceList'])->name('admin.service.list');
    Route::get('/service-edit', [AdminController::class, 'adminServiceEdit'])->name('admin.service-edit');
    Route::post('/service-update', [AdminController::class, 'adminServiceUpdate'])->name('admin.service-update');
    Route::delete('/service-delete', [AdminController::class, 'adminServiceDelete'])->name('admin.service-delete');


    Route::get('/category-add', [AdminController::class, 'adminCategoryAdd'])->name('admin.add.categories');
    Route::post('/category-store', [AdminController::class, 'adminCategoryStore'])->name('admin.category.store');
    Route::get('/category-list', [AdminController::class, 'adminCategoryList'])->name('admin.category.list');
    Route::get('/category-edit', [AdminController::class, 'adminCategoryEdit'])->name('admin.category-edit');
    Route::post('/category-update', [AdminController::class, 'adminCategoryUpdate'])->name('admin.category-update');
    Route::delete('/category-delete', [AdminController::class, 'adminCategoryDelete'])->name('admin.category-delete');


    Route::get('/client-add', [AdminController::class, 'adminclientAdd'])->name('admin.add.client');
    Route::post('/client-store', [AdminController::class, 'adminclientStore'])->name('admin.client.store');
    Route::get('/client-list', [AdminController::class, 'adminclientList'])->name('admin.client.list');
    Route::get('/client-edit', [AdminController::class, 'adminclientEdit'])->name('admin.client-edit');
    Route::post('/client-update', [AdminController::class, 'adminclientUpdate'])->name('admin.client-update');
    Route::delete('/client-delete', [AdminController::class, 'adminclientDelete'])->name('admin.client-delete');


    Route::get('/partner-add', [AdminController::class, 'adminpartnerAdd'])->name('admin.add.partner');
    Route::post('/partner-store', [AdminController::class, 'adminpartnerStore'])->name('admin.partner.store');
    Route::get('/partner-list', [AdminController::class, 'adminpartnerList'])->name('admin.partner.list');
    Route::get('/partner-edit', [AdminController::class, 'adminpartnerEdit'])->name('admin.partner-edit');
    Route::post('/partner-update', [AdminController::class, 'adminpartnerUpdate'])->name('admin.partner-update');
    Route::delete('/partner-delete', [AdminController::class, 'adminpartnerDelete'])->name('admin.partner-delete');


    Route::get('/slider-add', [AdminController::class, 'adminSliderAdd'])->name('admin.add.slider');
    Route::post('/slider-store', [AdminController::class, 'adminSliderStore'])->name('admin.slider.store');
    Route::get('/slider-list', [AdminController::class, 'adminSliderList'])->name('admin.slider.list');
    Route::get('/slider-edit', [AdminController::class, 'adminSliderEdit'])->name('admin.slider-edit');
    Route::post('/slider-update', [AdminController::class, 'adminSliderUpdate'])->name('admin.slider-update');
    Route::delete('/slider-delete', [AdminController::class, 'adminSliderDelete'])->name('admin.slider-delete');

    //gallery
    Route::get('/gallery-add', [AdminController::class, 'adminGalleryAdd'])->name('admin.add.gallery');
    Route::post('/gallery-store', [AdminController::class, 'adminGalleryStore'])->name('admin.gallery.store');
    Route::get('/gallery-list', [AdminController::class, 'adminGalleryList'])->name('admin.gallery.list');
    Route::get('/gallery-edit', [AdminController::class, 'adminGalleryEdit'])->name('admin.gallery-edit');
    Route::post('/gallery-update', [AdminController::class, 'adminGalleryUpdate'])->name('admin.gallery-update');
    Route::delete('/gallery-delete', [AdminController::class, 'adminGalleryDelete'])->name('admin.gallery-delete');
    //contact
    Route::get('/contact-list', [AdminController::class, 'adminContactList'])->name('admin.contact.list');
    Route::delete('/contact-delete', [AdminController::class, 'adminContactDelete'])->name('admin.contact-delete');
    Route::get('/contact-edit', [AdminController::class, 'adminContactEdit'])->name('admin.contact-edit');
    Route::post('/contact-update', [AdminController::class, 'adminContactUpdate'])->name('admin.contact-update');






    

});
