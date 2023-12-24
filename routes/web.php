<?php

use App\Http\Controllers\GrievanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryPage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Landing;
// use App\Http\Controllers\StudentController;

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
Route::middleware(['throttle:300,1'])->group(function () {
    Route::get('/', [Landing::class, 'index'])->name('index');
    Route::get('/index', [Landing::class, 'index'])->name('index');
    Route::get('/all-notices', [Landing::class, 'getAllNotices'])->name('allNotices');

    Route::prefix('pages')->group(function () {
        Route::get('/gallery', [GalleryPage::class, 'index'])->name('gallery');
        Route::get('/about-us', [Landing::class, 'aboutUs'])->name('aboutUs');
        Route::get('/grievance', [GrievanceController::class, 'grievancePage'])->name('grievance');
        Route::post('/grievance', [GrievanceController::class, 'createGrievance'])->name('grievance');

        Route::get(('/our-team'), [Landing::class, 'ourTeam'])->name('ourTeam');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/login', [AdminController::class, 'indexPage'])->name('admin.login');
        Route::post('/login', [AdminController::class, 'adminLogin'])->name('admin.login');
        Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    });

    Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->group(function () {
            
            Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
            
            Route::get('/post/notice', [AdminController::class, 'NoticePage'])->name('admin.noticePage');
            Route::post('/post/notice', [AdminController::class, 'NoticePost'])->name('admin.noticePost');
            Route::get('/all-notices', [AdminController::class, 'viewAllNotices'])->name('admin.allNotices');
            Route::delete('/notice/{id}', [AdminController::class, 'deleteNotice'])->name('admin.deleteNotice');
            Route::get('/notices/{id}/edit', [AdminController::class, 'editNotice'])->name('admin.editNotice');
            Route::put('/notices/{id}', [AdminController::class, 'updateNotice'])->name('admin.updateNotice');

            Route::get('/post/gallery-images', [AdminController::class, 'GalleryPage'])->name('admin.galleryPage');
            Route::post('/post/gallery-images', [AdminController::class, 'PostGalleryImage'])->name('admin.galleryPost');
            Route::get('/all-gallery-images', [AdminController::class, 'viewAllGalleryImages'])->name('admin.allGalleryImages');
            Route::delete('/gallery-images/{id}', [AdminController::class, 'deleteGalleryImage'])->name('admin.deleteGalleryImage');
            Route::get('/gallery-images/{id}/edit', [AdminController::class, 'editGalleryImage'])->name('admin.editGalleryImage');
            Route::put('/gallery-images/{id}', [AdminController::class, 'updateGalleryImage'])->name('admin.updateGalleryImage');

            Route::get('/view/grievances', [AdminController::class, 'grievancePage'])->name('admin.grievancePage');

            //These two are Pending to be implemented
            // Route::get('/add/student', [AdminController::class, 'AdmitNewStudentPage'])->name('admin.admitNewStudentPage');
            // Route::post('/add/student', [AdminController::class, 'AdmitNewStudentPage'])->name('admin.admitNewStudent');
        });

    });
    Route::prefix('uploads')->group(function () {
        Route::get('/notice/{file}', [AdminController::class, 'show'])->name('admin.show');
        Route::get('/gallery/{file}', [AdminController::class, 'showImage'])->name('admin.galleryShow');
    });
});

// Route::get('/student/login', [StudentController::class, 'indexPage'])->name('student.login');
// Route::post('/student/login', [StudentController::class, 'index'])->name('student.login');