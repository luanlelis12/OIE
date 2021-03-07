function aparecerLogin() {
    var blockLogin1 = document.getElementById('block-login-1');   
    var blockLogin2 = document.getElementById('block-login-2');   
    var blockIdentificar1 = document.getElementById('block-identificar-1');
    var blockIdentificar2 = document.getElementById('block-identificar-2');

    blockLogin1.style.display = 'inline-block' ;
    blockLogin2.style.display = 'inline-block' ;
    blockIdentificar1.style.cssText = 'background-color: #ddd; border: 2px solid #167B1C;';
    blockIdentificar2.style.cssText = 'background-color: #fff; border: 2px solid #ccc;';

};

function sumirLogin() {
    var blockLogin1 = document.getElementById('block-login-1');   
    var blockLogin2 = document.getElementById('block-login-2');
    var blockIdentificar1 = document.getElementById('block-identificar-1');
    var blockIdentificar2 = document.getElementById('block-identificar-2');   

    blockLogin1.style.display = 'none' ;
    blockLogin2.style.display = 'none' ;
    blockIdentificar1.style.cssText = 'background-color: #fff; border: 2px solid #ccc;';
    blockIdentificar2.style.cssText = 'background-color: #ddd; border: 2px solid #167B1C;';
}

function enviarManifestacao() {
    alert('A Senha da sua manifestação é 123');
}