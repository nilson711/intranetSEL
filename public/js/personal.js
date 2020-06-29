$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#cpfProfissional').blur(function (e) {

    cpflimpo = $('#cpfProfissional').val().replace(/[^\d]+/g,'')

    $.getJSON('/api/getProfissional/cpf/'+cpflimpo, function (dados) {
        if(dados != null){
            $('#nomeProfissionalEntrada').empty()
            $('#nomeProfissionalEntrada').append('<h4>'+dados.nomeProfissional+'</h4>')
        }else{
            $('#nomeProfissionalEntrada').empty()
            $('#nomeProfissionalEntrada').append('<h4>Profissional não encontrado.</h4>')
        }


    })
})

$('#cpfProfissionalSaida').blur(function (e) {

    cpflimpo = $('#cpfProfissionalSaida').val().replace(/[^\d]+/g,'')

    $.getJSON('/api/getProfissional/cpf/'+cpflimpo, function (dados) {
        if(dados != null){
            $('#nomeProfissionalSaida').empty()
            $('#nomeProfissionalSaida').append('<h4>'+dados.nomeProfissional+'</h4>')
        }else{
            $('#nomeProfissionalSaida').empty()
            $('#nomeProfissionalSaida').append('<h4>Profissional não encontrado.</h4>')
        }


    })
})

//FUNÇÃO QUE AO MUDAR FILTRA A TABELA CONFORME A SELEÇÃO.

$('#filtrarProfisional').change(function () {

    tipo = $('#filtrarProfisional').val();  //VARIÁVEL 'tipo' RECEBE O VALUE DO id=#filtrarProfisional QUE ESTÁ NO FORMULÁRIO.

    $.getJSON('/api/buscaTipo/'+tipo, function (dados) {    //CONVERTE EM PADRÃO JSON OS DADOS DA ROTA.

        $('#dadosDaTabela').empty()      // LIMPA A VISUALIZAÇÃO DA TABELA.

        console.log(dados.length)

        var tbdados = '';  //CRIA A VARIÁVEL 'tbdados' PARA SER USADA NO $.each (for each)
        var qtdArray = dados;

        if(tipo==0){    //SE O VALUE DO TIPO SELECIONADO (TODOS) FOR 0(ZERO) ENTÃO ATUALIZA A PÁGINA PARA EXIBIR TODOS OS REGISTROS.
            window.location.reload()    //ATUALIZA A PÁGINA
        }

         $.each(dados, function (key, value){   //FOR EACH
            tbdados += '<tr>';
            tbdados += '<td>'+value.idProfissionais+'</td>';
            tbdados += '<td>'+value.nomeProfissional+'</td>';
            tbdados += '<td>'+value.nomeLocalidade+'</td>';
            tbdados += '<td>'+value.celProfissional+'</td>';
            tbdados += '<td>'+value.emailProfissional+'</td>';
            tbdados += `<td>${(value.tipoProfissional==1? "Estagiário" : "Professor")}</td>`;
            tbdados += '<td><button class="btn btn-primary btn-sm">Coordenar</button></td>';
            tbdados += '</tr>';
         })

        $('#tabelaInscritos').append(tbdados) //O MÉTODO APPEND INSERE O CONTEÚDO (values) DENTRO NOS ELEMENTOS <td></td>
    })

})


$('#filtrarLocalidade').change(function () {

    local = $('#filtrarLocalidade').val();  //VARIÁVEL 'tipo' RECEBE O VALUE DO id=#filtrarLocalidade QUE ESTÁ NO FORMULÁRIO.

    $.getJSON('/api/buscaLocal/' + local, function (dados) {    //CONVERTE EM PADRÃO JSON OS DADOS DA ROTA.

        $('#dadosDaTabela').empty()      // LIMPA A VISUALIZAÇÃO DA TABELA.

        // console.log(dados.length)

        var tbdados = '';  //CRIA A VARIÁVEL 'tbdados' PARA SER USADA NO $.each (for each)
        var qtdArray = dados;

        if (local == 0) {    //SE O VALUE DO LOCAL SELECIONADO (TODOS) FOR 0(ZERO) ENTÃO ATUALIZA A PÁGINA PARA EXIBIR TODOS OS REGISTROS.
            window.location.reload()    //ATUALIZA A PÁGINA
        }

        $.each(dados, function (key, value) {   //FOR EACH
            tbdados += '<tr>';
            tbdados += '<td>' + value.idProfissionais + '</td>';
            tbdados += '<td>' + value.nomeProfissional + '</td>';
            tbdados += '<td>' + value.nomeLocalidade + '</td>';
            tbdados += '<td>' + value.celProfissional + '</td>';
            tbdados += '<td>' + value.emailProfissional + '</td>';
            tbdados += `<td>${(value.tipoProfissional == 1 ? "Estagiário" : "Professor")}</td>`;
            tbdados += '<td><button class="btn btn-primary btn-sm">Coordenar</button></td>';
            tbdados += '</tr>';
        })

        $('#tabelaInscritos').append(tbdados) //O MÉTODO APPEND INSERE O CONTEÚDO (values) DENTRO NOS ELEMENTOS <td></td>
    })
})
