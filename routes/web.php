<?php



// Page d'accueil
Route::get('/', function(){
    return view('welcome');
})->name('home');
// Affichage des évènements
Route::get('/event','EventController@index')->name('event');

// Gestion des évènements
Route::resource('events','EventController');

// Inscription d'un utilisateur de type musicien
Route::get('musiciens/inscription_musicien','MusicienController@create')->name('inscription_musicien');
Route::post('musiciens/inscription_musicien','MusicienController@store');

// Affichage des utilisateurs de type musicien
Route::get('musiciens/liste_musicien','MusicienController@liste')->name('liste_musicien');

// Login des utilisateurs de type musicien
Route::get('musiciens/connexion','ConnexionMusicienController@formulaire')->name('connexion_musicien');
Route::post('musiciens/connexion','ConnexionMusicienController@traitement');


// Accès au profil & déconnexion
Route::get('musiciens/mon_compte','CompteMusicienController@accueil');
Route::get('/deconnexion','CompteMusicienController@deconnexion')->name('deconnexion');

// Inscription d'un utilisateur de type organisateur
Route::get('orga/inscription_orga','OrganisateurController@create')->name('inscription_orga');
Route::post('orga/inscription_orga','OrganisateurController@store');

// Login des utilisateurs de type organisateur
Route::get('orga/connexion','ConnexionOrgaController@formulaire')->name('connexion_orga');
Route::post('orga/connexion','ConnexionOrgaController@traitement');

// Deconnexion organisateur
Route::get('/deconnexion_orga','CompteMusicienController@deconnexion')->name('deconnexion_orga');

// Regardez les infos d'un musicien en particulier + Formulaire de Contact
Route::get('musiciens/{musicien}','MusicienController@show')->name('infos_musicien');
Route::post('musiciens/{musicien}','MusicienController@form')->name('form_musicien');// LES MAILS SONT ENVOYES DANS LES LOGS dans storage/logs/
