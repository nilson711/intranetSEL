@extends('layouts.mainProtocolo')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/sel/protocolo">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Enviar Documentos</li>
        </ol>
        <hr>
    </nav>
    <h3>Enviar Documentos</h3>

<div class="widget-box">
{{--        <div class="widget-header">--}}
{{--            <h4 class="widget-title">Envio do Arquivo</h4>--}}

{{--            <div class="widget-toolbar">--}}
{{--                <a href="#" data-action="collapse">--}}
{{--                    <i class="ace-icon fa fa-chevron-up"></i>--}}
{{--                </a>--}}

{{--                <a href="#" data-action="close">--}}
{{--                    <i class="ace-icon fa fa-times"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}

    <form>
        {{-- CSRF--}}
        {{csrf_field()}}
        <div class="widget-body">
            <div class="widget-main">
                <div>
                    <label for="selecao-assunto">Assunto</label>
                    <select class="form-control" id="selecao-assunto" name="selecao-assunto">
                        <option value="0" selected disabled>Selecione o assunto</option>
                        <option value="1">Bolsa Atleta</option>
                        <option value="2">Espaço para Eventos</option>
                        <option value="2">Prestação de Contas</option>
                    </select>
                </div><br>

                <div>
                    <label for="form-field-11">Descrição</label>
                    <textarea id="txtSolicitacao" class="autosize-transition form-control" maxlength="300" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal" placeholder="Digite um resumo da sua solicitação"></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Selecionar"><span class="ace-file-name" data-title="Selecione o arquivo..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Selecionar"><span class="ace-file-name" data-title="Selecione o arquivo..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Selecionar"><span class="ace-file-name" data-title="Selecione o arquivo..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="ace-file-input ace-file-multiple"><input multiple="" type="file" id="id-input-file-3"><span class="ace-file-container" data-title="Solte os arquivos aqui ou clique em selecionar"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                    </div>
                </div>
                <div style="padding-left: 15px">
                        <small>*Somente arquivos PDF</small>
                </div>

                <a href="/sel/msgconfirmacao" class="btn btn-primary btn-block" role="button">Enviar</a>
            </div>
        </div>
    </form>
</div>


@endsection

//===29/06===//