/*--------------------------------------------------------------
    Bruna Andrade Arquitetura e Design - scripts do site
--------------------------------------------------------------*/
(function ($) {

    "use strict";

    // Ano atual no rodapé
    $("#ano-atual").text(new Date().getFullYear());


    // Rolagem suave para links internos fora do menu (botões, CTA)
    $(document).on("click", "a.js-scroll[href^='#']", function (e) {
        var target = $(this.hash);
        if (!target.length) {
            return;
        }
        e.preventDefault();
        var offset = window.innerWidth >= 992 ? 90 : 70;
        $("html, body").animate({ scrollTop: target.offset().top - offset }, 1000, "easeInOutExpo");
    });


    // Máscara de celular: (12) 98142-8757
    function maskPhone(value) {
        var d = value.replace(/\D/g, "").slice(0, 11);
        if (d.length > 10) {
            return d.replace(/^(\d{2})(\d{5})(\d{0,4})$/, "($1) $2-$3");
        }
        if (d.length > 6) {
            return d.replace(/^(\d{2})(\d{4})(\d{0,4})$/, "($1) $2-$3");
        }
        if (d.length > 2) {
            return d.replace(/^(\d{2})(\d{0,5})$/, "($1) $2");
        }
        return d.length ? "(" + d : "";
    }

    $("#contact-form input[name='celular']").on("input", function () {
        this.value = maskPhone(this.value);
    });


    // Formulário de contato (envio via AJAX para enviar_email.php)
    var $form = $("#contact-form");
    var $status = $form.find(".form-status");
    var $button = $form.find("button[type='submit']");
    var buttonText = $button.text();

    function setStatus(message, type) {
        $status
            .removeClass("is-success is-error")
            .addClass(type ? "is-" + type : "")
            .text(message);
    }

    function validate() {
        var ok = true;
        $form.find("[required]").each(function () {
            var $field = $(this);
            var value = $.trim($field.val());
            var invalid = !value;

            if ($field.attr("type") === "email") {
                invalid = invalid || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
            }
            if ($field.attr("name") === "celular") {
                invalid = invalid || value.replace(/\D/g, "").length < 10;
            }

            $field.toggleClass("has-error", invalid);
            if (invalid && ok) {
                $field.trigger("focus");
            }
            ok = ok && !invalid;
        });
        return ok;
    }

    $form.on("input", ".has-error", function () {
        $(this).removeClass("has-error");
    });

    $form.on("submit", function (e) {
        e.preventDefault();

        if (!validate()) {
            setStatus("Por favor, preencha todos os campos corretamente.", "error");
            return;
        }

        $button.prop("disabled", true).text("Enviando...");
        setStatus("", null);

        $.ajax({
            url: $form.attr("action"),
            type: "POST",
            data: $form.serialize(),
            dataType: "json",
            headers: { "X-Requested-With": "XMLHttpRequest" }
        })
            .done(function (res) {
                if (res && res.ok) {
                    setStatus(res.message || "Mensagem enviada com sucesso! Em breve entrarei em contato.", "success");
                    $form[0].reset();
                } else {
                    setStatus((res && res.message) || "Não foi possível enviar a mensagem. Tente novamente.", "error");
                }
            })
            .fail(function (xhr) {
                var res = xhr.responseJSON;
                setStatus((res && res.message) || "Não foi possível enviar a mensagem. Tente pelo WhatsApp (12) 98142-8757.", "error");
            })
            .always(function () {
                $button.prop("disabled", false).text(buttonText);
            });
    });


    // Retorno do envio sem JavaScript (enviar_email.php redireciona com ?enviado=1 ou ?erro=1)
    var params = new URLSearchParams(window.location.search);
    if (params.has("enviado")) {
        setStatus("Mensagem enviada com sucesso! Em breve entrarei em contato.", "success");
    } else if (params.has("erro")) {
        setStatus("Não foi possível enviar a mensagem. Tente pelo WhatsApp (12) 98142-8757.", "error");
    }

})(window.jQuery);
