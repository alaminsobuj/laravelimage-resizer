
Route::get('image-upload', [ App\Http\Controllers\ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ App\Http\Controllers\ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');