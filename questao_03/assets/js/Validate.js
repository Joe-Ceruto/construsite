$(function(){


    $("#form").validate({
        rules: {
            nome: {
                required: true,
                minlength:3
            },
            tel: {
                required: true,
                minlength:11,
                maxlength:11
            },
            email: {
                required: true
            },
            mensagem: {
                required:true,
                maxlength: 200
            },
            titulo: {
                required: true
            }
        },
        messages: {
            nome: {
                required: "Por favor, informe o seu nome",
                minlength: "O nome deve ter no mínimo 3 caracteres"
            },
            tel: {
                required: "Por favor, informe o número do seu telefone",
                minlength: "O celular deve ter exatamente 11 digitos",
                maxlength: "O celular deve ter exatamente 11 digitos"
            },
            email: {
                required: "Por favor, informe o seu e-mail"
            },
            titulo: {
                required: "Por favor, insira o assunto do seu e-mail"
            },
            mensagem: {
                required: "Por favor, insira a sua mensagem",
                maxlength: "Você já atingiu o número máxmio de caracteres(200)"
            }
        }
    });
});
