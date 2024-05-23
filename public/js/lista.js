const itens = document.getElementById('itens');

function mudouTamanho() {
    if (window.innerWidth <= 850) {
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