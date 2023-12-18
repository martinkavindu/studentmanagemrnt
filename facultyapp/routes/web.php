<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\ErollmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 //route to admiin group middleware

 Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

//teachers routes

    Route::controller(AdminController::class)->group(function(){

        Route::get('/all/teachers', 'AllTeachers')->name('all.teachers');

        Route::get('/add/teachers', 'AddTeacher')->name('add.teacher');

        Route::post('/store/teacher','StoreTeacher')->name('store.teacher');

        Route::get('/edit/teacher/{id}', 'EditTeacher')->name('edit.teacher');

        Route::post('/update/teacher/{id}', 'UpdateTeacher')->name('update.teacher');

         Route::get('/delete/teacher/{id}', 'DeleteTeacher')->name('delete.teacher');



//students routes
Route::get('/all/students', 'Allstudents')->name('all.students');
Route::get('/add/students', 'AddStudent')->name('add.student');
Route::post('/store/student','StoreStudent')->name('store.student');
Route::get('/edit/student/{id}', 'EditStudent')->name('edit.student');
Route::post('/update/student/{id}', 'UpdateStudent')->name('update.student');
Route::get('/delete/student/{id}', 'DeleteStudent')->name('delete.student');
    
        });

        //courses routes

        Route::controller(CoursesController::class)->group(function(){

            Route::get('/all/courses','AllCourses')->name('all.courses');
            Route::get('/add/course', 'AddCourse')->name('add.course');
            Route::post('/store/course','StoreCourse')->name('store.course');
            Route::get('/edit/course/{id}','EditCourse')->name('edit.course');
            Route::post('/update/course/{id}','UpdateCourse')->name('update.course');
            Route::get('/delete/course/{id}','DeleteCourse')->name('delete.course');

        });


        Route::controller(BatchController::class)->group(function(){

            Route::get('/all/batches','AllBatches')->name('all.batches');
            Route::get('/add/batch','Addbatch')->name('add.batch');
            Route::post('/store/batch','StoreBatch')->name('store.batch');
            Route::get('/edit/batch/{id}','EditBatch')->name('edit.batch');

            Route::post('/update/batch/{id}','UpdateBatch')->name('update.batch');
            Route::get('/delete/batch/{id}','DeleteBatch')->name('delete.batch');

        });

        Route::controller(ErollmentController::class)->group(function(){

            Route::get('/all/enrollments','AllEnrollments')->name('all.enrollments');

        });


 });





//route to teacher group middleware

Route::middleware(['auth','role:teacher'])->group(function(){

    Route::get('/teacher/dashboard', [TeacherController::class, 'TeacherDashboard'])->name('teacher.dashboard');

});

