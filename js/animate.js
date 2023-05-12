// Função para definir a distancia da box em relação ao topo do documento HTML.
function boxTop(idBox) {
    var boxOffset = $(idBox).offset();
    return boxOffset.top;
}

// A animação acontece aqui.
// Primeiro adicionamento a função .scroll ao documento, assim toda vez que o usuário utilizar o scroll a função é ativada.
$(document).scroll(function () {
    // Adiciona o valor total do Scroll a variável documentTop

    var documentTop = $(this).scrollTop();

    // Verifica se o documentTop é maior que o Topo da box ao menos Xpx. 
    // Esses Xpx é para que a função seja ativada um pouco antes da box chegar ao topo.
    // Se for maior ele adiciona a classe animar.
    // Caso contrário ele remove a classe animar.


    if (documentTop > boxTop('#titulo1') - 450) {
        $('#titulo1').addClass('animar');
    } else {
        $('#titulo1').removeClass('animar');
    }

    if (documentTop > boxTop('#texto1') - 250) {
        $('#texto1').addClass('animar');
    } else {
        $('#texto1').removeClass('animar');
    }

    if (documentTop > boxTop('#img1') - 250) {
        $('#img1').addClass('animar');
    } else {
        $('#img1').removeClass('animar');
    }

    if (documentTop > boxTop('#titulo2') - 350) {
        $('#titulo2').addClass('animar');
    } else {
        $('#titulo2').removeClass('animar');
    }

    if (documentTop > boxTop('#icon1') - 350) {
        $('#icon1').addClass('animar');
    } else {
        $('#icon1').removeClass('animar');
    }

    if (documentTop > boxTop('#icon2') - 350) {
        $('#icon2').addClass('animar');
    } else {
        $('#icon2').removeClass('animar');
    }
    
    if (documentTop > boxTop('#icon3') - 350) {
        $('#icon3').addClass('animar');
    } else {
        $('#icon3').removeClass('animar');
    }

    if (documentTop > boxTop('#textIcon1') - 350) {
        $('#textIcon1').addClass('animar');
    } else {
        $('#textIcon1').removeClass('animar');
    }

    if (documentTop > boxTop('#textIcon2') - 350) {
        $('#textIcon2').addClass('animar');
    } else {
        $('#textIcon2').removeClass('animar');
    }
    
    if (documentTop > boxTop('#textIcon3') - 350) {
        $('#textIcon3').addClass('animar');
    } else {
        $('#textIcon3').removeClass('animar');
    }

    if (documentTop > boxTop('#titulo3') - 350) {
        $('#titulo3').addClass('animar');
    } else {
        $('#titulo3').removeClass('animar');
    }

    if (documentTop > boxTop('#mapa') - 350) {
        $('#mapa').addClass('animar');
    } else {
        $('#mapa').removeClass('animar');
    }

});