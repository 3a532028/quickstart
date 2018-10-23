<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 2018/10/24
 * Time: 上午 01:16
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // 建立該任務...
});
