/*
 *  Fun��o para validar o formul�rio em index.html
 */
function ValidateOnSubmitForm() {
    // localizar os componentes do formul�rio
    var nome = document.forms["form"]["name"].value;
    var email = document.forms["form"]["email"].value;
    var data = document.forms["form"]["nasc"].value;
    
    //validar nome
    if (nome==null || nome=="") {
        //o nome � vazio
        alert("Informe o nome!");
        return false;
    }    
    //validar email
    var atPos = email.indexOf("@");
    var lastDotPos = email.lastIndexOf(".");
    if (atPos < 1 || lastDotPos < atPos+2 || lastDotPos+2 >= email.length) {
        //o endere�o est� errado
        alert("Informe corretamente o email, uma mensagem no seguinte formato: \
              \n example@email.com.br");
        return false;
    }
    
    //validar data nasc.
}