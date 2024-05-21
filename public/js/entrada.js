const itens = document.getElementById('itens');

function mudouTamanho() {
    if (window.innerWidth <= 570) {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'flex'
    }

}

function clickMenu() {
    if (itens.style.display == 'flex') {
        itens.style.display = 'none';
    } else {
        itens.style.display = 'flex';
    };
}


document.getElementById('quant-e').addEventListener('keydown', function (e) {
    if (e.key === '-' || e.key === 'Subtract') {
        e.preventDefault();
    }
});