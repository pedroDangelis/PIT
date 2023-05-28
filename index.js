function mudarCor(botao) {
    var btnLogin = document.getElementById('btnLogin');
    var btnCadastro = document.getElementById('btnCadastro');

    if (botao === 'btnLogin') {
      btnLogin.classList.add('botao-azul');
      btnLogin.classList.remove('botao-cinza');
      btnCadastro.classList.remove('botao-azul');
      btnCadastro.classList.add('botao-cinza');
    } else if (botao === 'btnCadastro') {
      btnLogin.classList.remove('botao-azul');
      btnLogin.classList.add('botao-cinza');
      btnCadastro.classList.add('botao-azul');
      btnCadastro.classList.remove('botao-cinza');
    }
  }