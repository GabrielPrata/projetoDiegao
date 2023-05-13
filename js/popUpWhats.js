function tamanhoTela() {
    var width = screen.width;
    if (width >= 993) {
        window.open('https://web.whatsapp.com/send?phone=5519982870034', '_blank');
    } else {
        window.open('https://api.whatsapp.com/send?phone=5519982870034', '_blank');
    }
}