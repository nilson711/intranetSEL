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

Route::get('/', function () {
    return view('welcome');
});


// ============================== ROTAS DO USUÁRIO EXTERNO ==============================//

Route::post('/sel/protocolo', function(){
    return view('protocolo');
});

Route::get('/sel/protocolo', function(){
    return view('protocolo');
});

Route::get('/sel/enviardocs', function(){
    return view('enviarDocumentos');
});

Route::get('/sel/msgconfirmacao', function(){
    return view('msgDocsEnviados');
});

Route::get('/sel/protocolo/user', function(){
    return view('login.loginUsuarioProtocolo');
});

Route::get('/sel/protocolo/userCad', function(){
    return view('login.cadUsuarioProtocolo');
});

Route::get('/sel/protocolo/newpassword', function(){
    return view('login.redefinirSenhaUsuarioProtocolo');
});

Route::post('/sel/protocolo/passwordsent', function(){
    return view('login.msgNewPassUsuarioProtocolo');
});

Route::post('/sel/protocolo/msgcadsucess', function(){
    return view('login.msgNewCadUsuarioProtocolo');
});

Route::get('/sel/protocolo/msgcadsucess', function(){
    return view('login.msgNewCadUsuarioProtocolo');
});

Route::get('/logout', function(){
    return view('login.loginUsuarioProtocolo');
});



// ============================== ROTAS DA INTRANET ==============================//

Route::get('/intranet', function(){
    return view('intranet.loginIntranet.intranetLoginUsuarioProtocolo');
});

Route::get('/intranet/inicio', function(){
    return view('intranet.intranetProtocolo');
});

Route::post('/intranet/inicio', function(){
    return view('intranet.intranetProtocolo');
});

Route::get('/intranet/usuarios', function(){
    return view('intranet.users.users');
});



