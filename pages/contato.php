<div class="contatobox">
    <div class="contato-div">

        <h1 class="h1s">CENTRAL DE ATENDIMENTO AO CLIENTE</h1>
        <p>(85) 99999-9999</p>
        <h1 class="h1s">E-MAIL</h1>
        <p>donarita@marmitas.com.br</p>
    </div>
    <div class="form-div">
        <h1 class="h1s">FORMULÁRIO DE CONTATO</h1>
        <div class="form">
           <form action="" id="formulario" method="POST" name="formulario">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Insira seu nome"/><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Insira seu e-mail" /><br>
            <label for="telefone">Telefone:</label>
            <input type="number" id="telefone" placeholder="Insira seu Telefone"/><br>
            <label for="Assunto">Assunto:</label>
            <input type="text" id="Assunto" placeholder="Insira o Assunto"/><br>
            <label for="conteudo">Mensagem:</label><br>
            <textarea  id="conteudo" name="conteudo" rows="5" cols="75" wrap="soft" placeholder="Mensagem"></textarea><br>
            <input type="button" class="botao" value="Enviar" onclick="validar()">
        </form>
    </div>
</div>    
</div>

<script>
    /* Função Validar */
    function validar() {
        // pegando o valor do nome pelos names
        var nome = document.getElementById("nome");
        var email = document.getElementById("email");
        var telefone = document.getElementById("telefone");
        var assunto = document.getElementById("Assunto");
        var conteudoconteudo = document.getElementById("conteudo");

        // verificar se o nome está vazio
        if (nome.value == "") {
            alert("Nome não informado");
            // Deixa o input com o focus
            nome.focus();
            exit()
        // retorna a função e não olha as outras linhas
        return;
    }
    if (email.value == "") {
        alert("E-mail não informado");
        email.focus();
        return;
    }
    if (telefone.value == "") {
        alert("Telefone não informado");
        telefone.focus();
        return;
    }
    if (Assunto.value == "") {
        alert("Assunto não informado");
        Assunto.focus();
        return;
    }

    if (conteudo.value == "") {
        alert("Mensagem não informado");
        conteudo.focus();
        return;
    }

    alert("Formulário enviado!");
      // envia o formulário
      //formulario.submit();
  }
</script>