<?php

    //SERVICOS
?>

            <p id="sucesso"></p>

            <h11><i class="fas fa-phone" aria-hidden="true"></i> Contato</h11>
            <div class="div_br"></div>
            <div class="div_br"></div>           

            <form method="POST" action="enviar_email.php">                

                <div class="form_contato">

                    <!--MENSAGENS-->
                    <?php
                    
                        include 'js/mensagens.php';

                    ?>

                    <!--NOME-->
                    <div class="div_br"> </div>                
                    <input type="text" placeholder="NOME" class="form-control" id="nome" name="nome" required>

                    <!--CELULAR-->
                    <div class="div_br"> </div>                
                    <input type="text" placeholder="(xx) xxxxx-xxxx"
                    oninput="mascara(this, 'celular')" minlength="15"
                    class="form-control" id="celular" name="celular" required>

                    <!--E-MAIL-->
                    <div class="div_br"> </div>                
                    <input type="email" placeholder="E-MAIL" class="form-control" id="email" name="email" required>

                    <!--MENSAGEM-->
                    <div class="div_br"> </div>       
                    <textarea rows="5" cols="50" placeholder="DIGITE SUA MENSAGEM" class="form-control" id="mensagem" name="mensagem" required></textarea>         

                    <!--ENVIAR-->
                    <div class="div_br"> </div> 
                    <button type="submit" class="botao_email" style="padding-top: 14px; padding-bottom: 14px;"> <i class="fas fa-paper-plane" aria-hidden="true"></i> Enviar</button>

                </div>

            </form>        

<script>

    //VALIDACOES DE CAMPO
    function mascara(i,t){

        var v = i.value;

        if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
        }

        if(t == "data"){
        i.setAttribute("maxlength", "10");
        if (v.length == 2 || v.length == 5) i.value += "/";
        }

        if(t == "rg"){
        i.setAttribute("maxlength", "12");
        if (v.length == 2 || v.length == 6) i.value += ".";
        if (v.length == 10) i.value += "-";
        }

        if(t == "cpf"){
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
        }

        if(t == "celular"){
        i.setAttribute("maxlength", "15");
        if (v.length == 1 ) i.value = "(" + i.value;
        if (v.length == 3 ) i.value += ") ";
        if (v.length == 10) i.value += "-";
        }

        if(t == "tel_opc"){
        i.setAttribute("maxlength", "15");
        if (v.length == 1 ) i.value = "(" + i.value;
        if (v.length == 3 ) i.value += ") ";
        }

        if(t == "cnpj"){
        i.setAttribute("maxlength", "18");
        if (v.length == 2 || v.length == 6) i.value += ".";
        if (v.length == 10) i.value += "/";
        if (v.length == 15) i.value += "-";
        }

    }

    function confirma_senha() {
        const password = document.querySelector('input[name=cad_senha]');
        const confirm = document.querySelector('input[name=cad_confirma_senha]');
        if (confirm.value === password.value) {
            confirm.setCustomValidity('');
        } else {
            confirm.setCustomValidity('As senhas não coincidem');
        }
    }

</script>