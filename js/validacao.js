$(document).ready(function(){
   $('#formCadastro').validate({
      rules:{        
			login:{
			   required: true,
			   minlength: 2
			},
			senha: {
			   required: true
			},
			confirmarSenha:{
				required: true,
				equalTo: "#senha"
			},
	  },
	messages: {
		login: {
			minlength: "O campo Nome deve conter no mínimo 3 caracteres."
		},
		senha: {
		   required: "O campo Senha é obrigatório."
		},
		confirmarSenha:{
		   required: "O campo Confirma Senha é obrigatório.",
		   equalTo: "O campo Confirma Senha deve ser idêntico ao campo Senha."
		},
	}
 
   });
});