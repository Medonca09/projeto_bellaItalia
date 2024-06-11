document.getElementById('tipo_dados').addEventListener('change', function() {
    var tipo = this.value;
    document.getElementById('campos_cliente').style.display = 'none';
    document.getElementById('campos_destino').style.display = 'none';
    document.getElementById('campos_hotel').style.display = 'none';

    if (tipo === 'cliente') {
        document.getElementById('campos_cliente').style.display = 'block';
    } else if (tipo === 'destino') {
        document.getElementById('campos_destino').style.display = 'block';
    } else if (tipo === 'hotel') {
        document.getElementById('campos_hotel').style.display = 'block';
    }
});