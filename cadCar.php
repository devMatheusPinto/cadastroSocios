<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Carro</title>
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
                    <td>Placa:</td>
                    <td><input type="text" name="nip" maxlength="7" required placeholder="Ex.: ABC1234 ou ABC1B34" id="nip" class="txt" /></td>
                </tr> 

                <tr>    
                    <td>Tipo:</td>
                    <td>
                    <select id="tp" name="tipo">
                    <option value="1">Carro</option>
                    <option value="2">Moto</option>
                    </td>
                </tr> 

                <tr>    
                    <td>Marca:</td>
                    <td>
                    <select id="mont" name="montadora">
                    <option selected="selected" value="0">Selecione a montadora</option>
                    <option value="7">Citroën</option>
                    <option value="5">Chevrolet</option>
                    <option value="13">Ford</option>
                    <option value="12">Fiat</option>
                    <option value="15">Honda</option>
                    <option value="16">Hyundai</option>
                    <option value="18">Jeep</option>
                    <option value="29">Peugeot</option>
                    <option value="32">Renault</option>
                    <option value="34">Ssangyong</option>
                    <option value="37">Toyota</option>
                    <option value="38">Troller</option>
                    <option value="39">Volkswagen</option>
                    <option value="-1">-----------------------------</option>
                    <option value="3">Audi</option>
                    <option value="4">BMW</option>
                    <option value="85">Caoa Chery</option>
                    <option value="58">Changan (Chana)</option>
                    <option value="6">Chrysler</option>
                    <option value="8">Daewoo</option>
                    <option value="9">Daihatsu</option>
                    <option value="10">Dodge</option>
                    <option value="79">Geely</option>
                    <option value="14">Gurgel</option>
                    <option value="76">Infiniti</option>
                    <option value="45">Isuzu</option>
                    <option value="56">Iveco</option>
                    <option value="72">JAC Motors</option>
                    <option value="17">Jaguar</option>
                    <option value="20">Kia</option>
                    <option value="74">KTM</option>
                    <option value="22">Land Rover</option>
                    <option value="23">Lexus</option>
                    <option value="67">Lifan</option>
                    <option value="47">Lincoln</option>
                    <option value="26">Mercedes-Benz</option>
                    <option value="48">Mini</option>
                    <option value="27">Mitsubishi</option>
                    <option value="28">Nissan</option>
                    <option value="49">Pontiac</option>
                    <option value="30">Porsche</option>
                    <option value="31">Puma</option>
                    <option value="77">Shineray</option>
                    <option value="50">Smart</option>
                    <option value="35">Subaru</option>
                    <option value="36">Suzuki</option>
                    <option value="84">TAC Motors</option>
                    <option value="40">Volvo</option>
                </tr> 

                <tr>    
                    <td>Modelo:</td>
                    <td><input type="text" name="tel" onkeypress="mascaraCel()" maxlength="11" required placeholder="Telefone" id="tel" class="txt" /></td>
                </tr> 

                <tr>    
                    <td>Cor:</td>
                    <td>
                    <select id="qd" name="quadro">
                    <option value="7">Amarelo</option>
                    <option value="1">Azul</option>
                    <option value="2">Branco</option>
                    <option value="3">Cinza</option>
                    <option value="8">Laranja</option>
                    <option value="4">Prata</option>
                    <option value="5">Preto</option>
                    <option value="6">Verde</option>
                    <option value="9">Vermelho</option>
                    </td>
                </tr> 

                <tr>    
                    <td colspan="2"><input aling="center" type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>