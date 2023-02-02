<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Visita</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <script>

   function mascaraData(){

   var data = document.getElementById('txtData').value;
   if(data.length==2){
    document.getElementById('txtData').value = data +'/';
     }
   else if (data.length==5){
    document.getElementById('txtData').value = data +'/';
   }
}

    function mascaraNip(){

    var rg= document.getElementById('txtNip').value;
    if(rg.length==2){
 document.getElementById('txtNip').value = rg +'.';
  }
else if (rg.length==4){
 document.getElementById('txtNip').value = rg +'.';
}
else if (rg.length==2){
 document.getElementById('txtNip').value = rg +'-';
}
}

   function mascaraRgCivil(){

   var rg= document.getElementById('txtRg').value;
   if(rg.length==2){
    document.getElementById('txtRg').value = rg +'.';
     }
   else if (rg.length==6){
    document.getElementById('txtRg').value = rg +'.';
   }
   else if (rg.length==9){
    document.getElementById('txtRg').value = rg +'-';
   }
}

function mascaraRgMil(){

var rgmil= document.getElementById('txtRgMil').value;
if(rgmil.length==2){
 document.getElementById('txtRgMil').value = rgmil +'.';
  }
else if (rgmil.length==6){
 document.getElementById('txtRgMil').value = rgmil +'.';
}
else if (rgmil.length==9){
 document.getElementById('txtRgMil').value = rgmil +'-';
}
}

   function mascaraTelefone(){

   var telefone= document.getElementById('txtTelefone').value;
   if(telefone.length==1){
    document.getElementById('txtTelefone').value ='(' + telefone;
     }
   else if (telefone.length==3){
    document.getElementById('txtTelefone').value = telefone +')';
   }

   else if (telefone.length==8){
    document.getElementById('txtTelefone').value = telefone +'-';
   }
}

   function mascaraCel(){

   var celular= document.getElementById('txtCel').value;
   if(celular.length==1){
    document.getElementById('txtCel').value ='(' + celular;
     }
   else if (celular.length==3){
    document.getElementById('txtCel').value = celular +')';
   }
   else if (celular.length==9){
    document.getElementById('txtCel').value = celular +'-';
   }
}

   function mascaraCpf(){
   var cpf = document.getElementById('txtCpf').value;
    if(cpf.length==3){
     document.getElementById('txtCpf').value = cpf +'.';
}
    else if(cpf.length==7){
     document.getElementById('txtCpf').value = cpf +'.';
}
    else if (cpf.length==11){
     document.getElementById('txtCpf').value = cpf +'-';
}    
}  

function checarEmail(){

   var email= document.getElementById('txtEmail').value;
   if(email==""||email.indexOf('@')==-1||email.indexOf('.')==-1){

    alert("Por favor Insira um E-mail valido");

}
}

function limpa_formulário_cep() {

            document.getElementById('txtRua').value=("");
            document.getElementById('txtBairro').value=("");
            document.getElementById('txtCidade').value=("");
            document.getElementById('txtUf').value=("");
    }
 function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('txtRua').value=(conteudo.logradouro);
            document.getElementById('txtBairro').value=(conteudo.bairro);
            document.getElementById('txtCidade').value=(conteudo.localidade);
            document.getElementById('txtUf').value=(conteudo.uf);

        } 
        else {

            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

 function mascaraCep(){
   var cep = document.getElementById('txtCep').value;
    if(cep.length==5){
     document.getElementById('txtCep').value = cep +'-';
}
}
 function pesquisacep(valor) {


        var cep = valor.replace(/\D/g, '');


        if (cep != "") {


            var validacep = /^[0-9]{8}$/;


            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('txtRua').value="...";
                document.getElementById('txtBairro').value="...";
                document.getElementById('txtCidade').value="...";
                document.getElementById('txtUf').value="...";



                var script = document.createElement('script');


                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';


                document.body.appendChild(script);

            } 
            else {

                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        }
        else {

            limpa_formulário_cep();
        }
    };
  </script>
</head>

<body>
	<!-- Informações para casdatro do sócio -->
    <div id="cadastro">
    	<form name="signup" method="post" action="cadastro.php">
    		<table id="tab_cadastro">


            	<tr>
                	<td>Nome Completo:</td>
                    <td><input type="text" name="nome" required placeholder="Digite aqui o nome completo" id="nome" class="txt" /></td>
                </tr>

                <tr>    
                    <td>CPF:</td>
                    <td><input type="text" name="cpf" onkeypress="mascaraCpf()" maxlength="11" required placeholder="CPF" id="cpf" class="txt" /></td>
                </tr> 

                <tr>    
                    <td>Identidade:</td>
                    <td><input type="text" name="id" required placeholder="Identidade" id="id" class="txt" /></td>
                </tr> 

                <tr>    
                    <td>Órgão emissor:</td>
                    <td><input type="text" name="emissor" required placeholder="Órgão emissor" id="emissor" class="txt" /></td>
                </tr>  

                <tr>    
                    <td>Telefone:</td>
                    <td><input type="text" name="tel" onkeypress="mascaraCel()" maxlength="11" required placeholder="Telefone" id="tel" class="txt" /></td>
                </tr> 

                <tr>    
                    <td>Visitado:</td>
                    <td>
                    <div id="divBusca">                    
                    <input type="text" id="txtBusca" onkeypress="mascaraNip()" maxlength="8" placeholder="Buscar..."/>
                    <button id="btnBusca">Buscar</button>
                    </div>
                    </td>
                </tr> 

                <tr>
                    <td></td>
                    <td><input type="text" name="nip" onkeypress="mascaraNip()" maxlength="8" required placeholder="" id="nip" class="txt" /></td>
                </tr>

                <tr>    
                    <td colspan="2"><input aling="center" type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>