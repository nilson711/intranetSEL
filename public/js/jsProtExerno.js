$('#formLoginJuridica').hide()
$('#formLoginFisica').hide()


$('#TipoUsuarioFisica').click(function () {
    $('#formLoginJuridica').hide()
    $('#formLoginFisica').show()
    $('#loginFisica').val('')
    $('#senhaFisica').val('')
    $('#loginJuridica').val('')
    $('#senhaJuridica').val('')
})
$('#TipoUsuarioJuridica').click(function () {
    $('#formLoginJuridica').show()
    $('#formLoginFisica').hide()
    $('#loginFisica').val('')
    $('#senhaFisica').val('')
    $('#loginJuridica').val('')
    $('#senhaJuridica').val('')
})