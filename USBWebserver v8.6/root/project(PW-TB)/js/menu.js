// Função de controle do loader
function hideLoader() {
    setTimeout(function() {
        $('#modal-loader').modal('hide')
    }, 1000)
}

// Inicia o menu, com os itens escondidos...
$(document).ready(function() {
    $('.item-menu').hide()

})

// Fazendo o botão do menu funcionar
$('#btn-menu').click(function(e) {
    e.preventDefault()
    $('#modal-loader').modal('show')
    $('.item-menu').Loggle('slide')
    hideLoader()
})