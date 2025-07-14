<?php

use App\Http\Controllers\DtrController;

Route::middleware('auth')->group(function () {
    Route::get('/dtr', [DtrController::class, 'index'])->name('dtr.index');
    Route::post('/dtr/time-in', [DtrController::class, 'timeIn'])->name('dtr.timein');
    Route::post('/dtr/time-out', [DtrController::class, 'timeOut'])->name('dtr.timeout');
});
