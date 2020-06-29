@extends('layouts.mainProtocolo')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/sel/protocolo">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Documentos enviados</li>
        </ol>
        <hr>
    </nav>

    <div class="jumbotron" style="padding: 10px; background-color: white; text-align: center">
        <img src="/sel_files/checked_green.gif" width="90px"></img>
        <h2 class="display-4"><span></span>Arquivos enviados com sucesso!</h2>
        <p class="lead">Você receberá por e-mail a confirmação deste protocolo.</p>
        <small>Secretaria de Estado de Esporte e Lazer.</small>
        <hr class="my-4">
        <a class="btn btn-primary btn-sm btn-block" href="/sel/protocolo" role="button">OK</a>
    </div>



@endsection

//===29/06===//