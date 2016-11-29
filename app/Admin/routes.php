<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);

Route::get('news', ['as' => 'admin.news', function () {
	$content = view('admin.news');
	return AdminSection::view($content, 'Новости');
}]);

Route::get('news/create', ['as' => 'admin.newscreate', function () {
	$content = view('admin.newscreate');
	return AdminSection::view($content, 'Создание новости');
}]);