<?php
        Route::group(['prefix' => 'api-admin','namespace' =>'Admin'], function(){
            Route::get('/',function(){
                return view ('admin.index');
        });

        Route::group(['prefix' => 'category'],function(){
            Route::get('','AdminCategoryController@index')->name('admin.category.index');
            // thêm form
            Route::get('create','AdminCategoryController@create')->name('admin.category.create');
            // sử lý thêm mới
            Route::post('create','AdminCategoryController@store');

            // update
            Route::get('update{id}','AdminCategoryController@edit')->name('admin.category.update');
            Route::post('update{id}','AdminCategoryController@update');

            // xóa danh mục
            Route::get('delete{id}','AdminCategoryController@delete')->name('admin.category.delete');

            // xử lý hành động ẩn hiện danh mục
            Route::get('active{id}','AdminCategoryController@active')->name('admin.category.active');

            // xử lý sản phẩm có hot k
            Route::get('hot{id}','AdminCategoryController@hot')->name('admin.category.hot');


    });
});
