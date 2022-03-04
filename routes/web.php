<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Route::get("/",function(){
    return redirect()->route("frontOfficeHomePage");
});

Route::group(["prefix"=>"/","namespace"=>"FrontOffice"],function(){

    Route::get("/",[
        "as" => "frontOfficeHomePage",
        "uses" => "FrontOfficeController@index"
    ]);

    Route::get("/e-visa",[
        "as" => "frontOfficeEVisaPage",
        "uses" => "FrontOfficeController@evisa"
    ]);

    Route::get("/e-passeport",[
        "as" => "frontOfficeEPasseportPage",
        "uses" => "FrontOfficeController@epasseport"
    ]);

    Route::get("/equipe",[
        "as" => "frontOfficeEquipePage",
        "uses" => "FrontOfficeController@equipe"
    ]);

    Route::match(["get","post"],"/contact",[
        "as" => "frontOfficeContactsPage",
        "uses" => "FrontOfficeController@contacts"
    ]);

});

Route::group(["prefix"=>"auth","namespace"=>"Authentication"],function (){

    Route::match(["get","post"],"/login",[
        "as" => "login",
        "uses" => "AuthController@login"
    ]);

    Route::match(["get"],"/logout",[
        "as" => "logout",
        "uses" => "AuthController@logout"
    ]);


    Route::match(["get","post"],"/forgotten-pwd",[
        "as" => "forgottenPwd",
        "uses" => "AuthController@forgottenPwd"
    ]);


});

Route::group(["prefix"=>"back-office", "middleware" => "allowOnlyIfAuthenticated" ,"namespace"=>"BackOffice"],function(){

    Route::group(["namespace"=>"Home"],function(){

        Route::get("/",[
            "as" => "backOfficeHomePage",
            "uses" => "HomeController@index"
        ]);

    });

    Route::group(["namespace"=>"Validation"],function(){

    	Route::group(["prefix"=>"bin"],function(){

			Route::match(["get"] ,"/",[
				"as" => "pendingFiles",
				"uses" => "PendingFileController@files"
			]);

			Route::group(["middleware"=>"allowOnlyIfIsAdmin"],function(){
				Route::match(["get"] ,"/delete",[
					"as" => "deletePendingFiles",
					"uses" => "PendingFileController@delete"
				]);
			});



		});

        Route::group(["prefix"=>"validate"],function(){

            Route::match(["get","post"] ,"/word",[
                "as" => "validateWordFiles",
                "uses" => "FileValidationController@validateWordFiles"
            ]);

            Route::match(["get","post"] ,"/pdf",[
                "as" => "validatePdfFiles",
                "uses" => "FileValidationController@validatePdfFiles"
            ]);

            Route::match(["get","post"] ,"/excel",[
                "as" => "validateExcelFiles",
                "uses" => "FileValidationController@validateExcelFiles"
            ]);

        });

        Route::group(["prefix"=>"model"],function(){

            Route::match(["get","post"] ,"/create",[
                "as" => "createModel",
                "uses" => "MouleController@create"
            ]);

            Route::match(["get","post"] ,"/update/{idMoule}",[
                "as" => "updateModel",
                "uses" => "MouleController@update"
            ]);

            Route::match(["get"] ,"/show/{idMoule}",[
                "as" => "getModel",
                "uses" => "MouleController@moule"
            ]);

            Route::match(["get"] ,"/delete/{idMoule}",[
                "as" => "deleteModel",
                "uses" => "MouleController@delete"
            ]);

            Route::match(["get"] ,"/delete-attached-pdf/{idMoule}",[
                "as" => "deleteAttachedPDF",
                "uses" => "MouleController@deleteAttachedPDF"
            ]);

            Route::match(["get"] ,"/",[
                "as" => "getModels",
                "uses" => "MouleController@moules"
            ]);

        });

        Route::group(["prefix"=>"excel-configs"],function(){

            Route::match(["get","post"] ,"/create/{idMoule}",[
                "as" => "createExcelConfigs",
                "uses" => "ExcelConfigsController@create"
            ]);

            Route::match(["get","post"] ,"/delete/{idFE}",[
                "as" => "deleteExcelConfigs",
                "uses" => "ExcelConfigsController@delete"
            ]);

        });

        Route::group(["prefix"=>"pdf-configs"],function(){

            Route::match(["get","post"] ,"/create/{idMoule}",[
                "as" => "createPdfConfigs",
                "uses" => "PdfConfigsController@create"
            ]);

            Route::match(["get","post"] ,"/delete/{idPP}",[
                "as" => "deletePdfConfigs",
                "uses" => "PdfConfigsController@delete"
            ]);

        });

        Route::group(["prefix"=>"positioning"],function(){

            Route::match(["get","post"] ,"/{idMoule}/{positionnable}/{orientation?}",[
                "as" => "definePosition",
                "uses" => "PositionneurGraphiqueController@positionner"
            ]);

        });

    });




    Route::group(["namespace"=>"Societe", "middleware"=>"allowOnlyIfIsAdmin"],function (){

        Route::group(["prefix"=>"firm"],function(){
            Route::match(["get","post"] ,"/",[
                "as" => "updateFirm",
                "uses" => "SocieteController@update"
            ]);
        });

    });



    Route::group(["prefix"=>"user","namespace"=>"Personne"],function(){

        Route::group(["middleware"=>"allowOnlyIfIsAdmin"],function(){

            Route::match(["get","post"] ,"/create",[
                "as" => "createUser",
                "uses" => "PersonneController@create"
            ]);

            Route::match(["get"] ,"/",[
                "as" => "getUsers",
                "uses" => "PersonneController@personnes"
            ]);

            Route::match(["get"] ,"/deactivate/{idPers}",[
                "as" => "deactivateUser",
                "uses" => "PersonneController@deactivate"
            ]);

            Route::match(["get"] ,"/reactivate/{idPers}",[
                "as" => "reactivateUser",
                "uses" => "PersonneController@reactivate"
            ]);

            Route::match(["get","post"],"/update/{idPers}",[
                "as" => "updateUser",
                "uses" => "PersonneController@update"
            ]);

        });

        Route::match(["get","post"],"/update-credentials",[
            "as" => "updateCredentials",
            "uses" => "PersonneController@updateCredentials"
        ]);



    });


});
