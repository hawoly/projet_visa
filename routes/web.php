<?php
Route::get('/',"AccueilController@index");
Route::get('/country',"AccueilController@show");
Route::get('/contact',"AccueilController@contact");
////produit
Route::get('/produit',"ProduitController@index");
Route::get('/produit/create',"ProduitController@create");
Route::post('/produit/traitement',"ProduitController@store");
//categorie
Route::get('/index',"CategoriesController@index1");
Route::get('categorie/essai',"CategoriesController@essai")->name('essai');
Route::get('categorie/essayer',"CategoriesController@essayer")->name('essayer');
Route::get('/categorie/form',"CategoriesController@create")->name('create_categorie');
Route::post('/categorie/traitement',"CategoriesController@store");
Route::resource('categorie',"CategoriesController")->middleware('auth');
Route::get("/categorie/edit/{id}", "CategoriesController@edit")->name('editer_categorie');
Route::patch("/categorie/edit/{id}", "CategoriesController@update")->name('update_categorie');
//typelogement
Route::resource('logement', 'LogementController');
Route::post('logement/update', 'LogementController@update')->name('logement.update');
Route::get('logement/destroy/{id}', 'LogementController@destroy');
Route::get('logements', 'LogementController@index');
//ambassade
Route::resource('ambassade', 'AmbassadeController');
Route::post('ambassade/update', 'AmbassadeController@update')->name('ambassade.update');
Route::get('ambassade/destroy/{id}', 'AmbassadeController@destroy');
Route::get('ambassades', 'AmbassadeController@index');
//supadmin
Route::resource('supadmin', 'AdminsController');
Route::post('supadmins/update', 'AdminsController@update')->name('supadmin.update');
Route::get('supadmins/destroy/{id}', 'AdminsController@destroy');
Route::post('/admin/traitement', 'AdminsController@store');




Route::get('/essai',function(){
 return view('essai');
});
Route::resource('destination', 'DestinationController');
Route::post('destination/update', 'DestinationController@update')->name('destination.update');
Route::get('destination/destroy/{id}', 'DestinationController@destroy');
Route::get('destinations', 'DestinationController@index');


route::get('/creneau',"RecourController@creneau");
Route::resource('demandeur',"DemandeurController");
Route::get('demandeur/essai',"DemandeurController@essai");
///demande
//Route::resource('demande',"DemandeController")->middleware('auth');
Route::get('demande',"DemandeController@index");
Route::get('list',"DemandeController@list");
Route::get('reponse',"DemandeController@reponse");
Route::get('recours',"DemandeController@recour");
Route::get('/demander',"DemandeController@lister")->name('demander')->middleware('auth');
//Route::get('/demande/create',"DemandeController@create")->name('creation');
Route::post('/demande/traitement',"DemandeController@store");
Route::post('/recours/traitement',"RecourController@store");
Route::get('admin', 'AdminController@index');
Route::post('demande/reponse',"AdminController@store");
Route::post('/rv/traitement',"RvController@store");
Route::get('demande-list', 'AdminController@List'); 
Route::get('demande/rejet/{id}', 'AdminController@rejet');

Route::get('demande/rejett/{id}', 'AdminController@rejett');
Route::get('demande/accept/{id}', 'AdminController@accept');
//Route::get('essai',"DemandeController@essai");
Auth::routes();
//Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('demandeur', 'DemandeurController@index');
Route::get("/rv/confirm/{id}", "RvController@confirm")->name('confirm_rv');
