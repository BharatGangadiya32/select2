<?php
	Route::group(['namespace'=>'laravelselect2\select2\Controllers','prefix'=>'laravelselect2/select2'],function(){
	Route::get('/',['as'=>'select2_path','uses'=>'select2Controller@index']);
	});
?>
