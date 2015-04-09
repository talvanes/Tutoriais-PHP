/*
 *  Função para validar o formulário em index.html
 */
function ValidateOnSubmitForm() {
    // localizar os componentes do formulário
    var nome = document.forms["form"]["name"].value;
    var email = document.forms["form"]["email"].value;
    var data = document.forms["form"]["nasc"].value;
    
    //validar nome
    if (nome==null || nome=="") {
        //o nome é vazio
        alert("Informe o nome!");
        return false;
    }    
    //validar email
    var atPos = email.indexOf("@");
    var lastDotPos = email.lastIndexOf(".");
    if (atPos < 1 || lastDotPos < atPos+2 || lastDotPos+2 >= email.length) {
        //o endereço está errado
        alert("Informe corretamente o email, uma mensagem no seguinte formato: \
              \n example@email.com.br");
        return false;
    }
    
    //validar data nasc.
}