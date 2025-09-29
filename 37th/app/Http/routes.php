<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
  joe
 */
    Route::auth();

    Route::get('clear_config', ['as' => 'utility.clear.cache', 'uses' => 'UtilityController@clear_cache']);

   
    Route::get('phpmyinfo', function () {
        phpinfo(); 
    })->name('phpmyinfo');

    Route::get('/strategic-plan', ['as' => 'strat-plan.index', 'uses' => 'r4dController@strat']);
    
    Route::get('/r4d_conference', ['as' => 'r4d_conference.index', 'uses' => 'r4dController@index']);
    Route::get('/r4d_app', ['as' => 'r4d_conference.r4d', 'uses' => 'r4dController@r4d']);
    Route::get('/r4d_email', ['as' => 'r4d_conference.email', 'uses' => 'r4dController@r4demail']);


    Route::get('/list-of-participants', ['as' => 'r4d_conference.participants', 'uses' => 'r4dController@participants']);
    
    Route::get('/git-pull', ['as' => 'git-pull', 'uses' => 'pullerController@gitPull']);

        
    /*WEBSITE API*/ 
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@dashboard']);
    Route::group(['middleware' => ['auth']], function() {

    Route::get('/clear', 'emailController@functionGab');


    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
  
    Route::get('/email-view', ['as' => 'email.view', 'uses' => 'emailController@index']);
    Route::get('/email-box', ['as' => 'email.box', 'uses' => 'emailController@mailBox']);
    Route::post('/email-box/transactions', ['as' => 'getTransactionData', 'uses' => 'emailController@getTransactionData']);
    Route::post('/send-mail', ['as' => 'send-mail', 'uses' => 'emailController@send_Mail']);
    Route::post('/upload', 'emailController@uploadfile')->name('upload');
    Route::post('/getFile', 'emailController@getFile')->name('getFile');

    Route::get('/send-mail-test', ['as' => 'send-mail-test', 'uses' => 'emailController@send_MailTest']);
    Route::post('/send-mail-comments', ['as' => 'send-mail-comments', 'uses' => 'r4dController@send_MailComments']);

    Route::get('/export-view', ['as' => 'export.view', 'uses' => 'exportController@index']);
    Route::post('/export-view/presentations', ['as' => 'getPresentationData', 'uses' => 'exportController@getPresentationData']);
    Route::post('/getPresenterInfo', 'exportController@getPresenterInfo')->name('getPresenterInfo');
    Route::get('/exportParticipantsView', ['as' => 'exportParticipants.view', 'uses' => 'exportParticipantsController@index']);
    Route::post('/Participants', ['as' => 'getParticipantsData', 'uses' => 'exportParticipantsController@getParticipantsData']);

    Route::get('/exportParticipants', ['as' => 'exportParticipants', 'uses' => 'exportParticipantsController@exportParticipants']);


    Route::get('/getparticipant/{id}', 'exportParticipantsController@getParticipantsDataEdit')->name('getParticipantsDataEdit');

    Route::put('/submit-participant-update', 'exportParticipantsController@updateParticipant')->name('update.participant');
    Route::post('/deleteParticipant/{id}', 'exportParticipantsController@deleteParticipant')->name('deleteParticipant');







    Route::get('/exportPresenters', ['as' => 'exportPresenters', 'uses' => 'exportParticipantsController@exportPresenterProfile']);

    Route::get('/qr-generator', ['as' => 'qr-generator', 'uses' => 'exportParticipantsController@qrGenerator']);

    Route::get('/clear-logs', ['as' => 'qr-generator', 'uses' => 'emailController@clear_cache']);
    
    });


    Route::get('/generate-qr/{code}', ['as' => 'qr-generator', 'uses' => 'exportParticipantsController@gnerateqr']);



    Route::get('/registration-form/{invidationCode}', ['as' => 'registration', 'uses' => 'registrationController@index']);
    Route::post('/registration-form/saveParticipantProfile', ['as' => 'saveParticipantProfile', 'uses' => 'registrationController@saveParticipantProfile']);
    Route::post('/registration-form/saveParticipantProfile2', ['as' => 'saveParticipantProfile2', 'uses' => 'registrationController@send_MailComments']);
    
    Route::post('/registration-form/savePresenterProfile', ['as' => 'savePresenterProfile', 'uses' => 'registrationController@savePresenterProfile']);
    Route::post('/registration-form/savePresenterProfile1', ['as' => 'savePresenterProfile1', 'uses' => 'registrationController@savePresenterProfile1']);

    
    // web.php
    Route::post('/uploadd', 'registrationController@uploadfilee')->name('uploadd');
    Route::get('/pdf/view/{filename}', 'exportController@view')->name('pdf.view');




