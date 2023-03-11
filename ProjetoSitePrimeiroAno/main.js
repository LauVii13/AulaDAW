function salvaPedido() {

	//Teste data e hora, obtendo as informações gerais
	var data = new Date();

	//Pegando a data e formatando para o formato brasileiro
	var hoje = data.toLocaleDateString();

	//Pegando a hora, minutos e segundos, formatando com uma string para o formato de um horário
	var horarioHORA = data.getHours();
	var horarioMINUTOS = data.getMinutes();
	var horarioSEGUNDOS = data.getSeconds();
	var horario = horarioHORA + ':' + horarioMINUTOS + ':' + horarioSEGUNDOS;

	//Criando o objeto com os dados email, cep e pedido para inserir com o botão na tabela
	var dadosPedido = {
		email: document.getElementById("inputEmail4").value,
		cep: document.getElementById("inputAddress").value,
		pedido: document.getElementById("pedidoCaixa").value,
		idade: document.getElementById("age").value,
	};


	var tabelaPedido = document.getElementById("salvaPedidos");


	//Verificando se todos os campos foram preenchidos 
	if((dadosPedido.email == "") || (dadosPedido.cep == "") || (dadosPedido.pedido == "") || (dadosPedido.idade == ""))
	{
		alert("Atenção! Há campos vazios e seu preenchimento é obrigatório!");
		esconder('liveToast1');
	}
	else
	{

		//Verificando se o usuário é maior ou menor de idade, executando as medidas necessárias de acordo com o resultado
		if(verificaIdade(dadosPedido.idade) == "Maior de Idade")
		{
			mostrar('liveToast1');
			var resultado = "Maior de Idade";
			tabelaPedido.innerHTML = tabelaPedido.innerHTML + "<td>" + dadosPedido.email + "</td>" + "<td>" + dadosPedido.cep + "</td>" + "<td>" + dadosPedido.pedido + "</td>" + "<td>" + hoje + "</td>" + "<td>" + horario + "</td>" + "<td style=\"background-color: lightgreen;\">" + resultado + "</td>";
		}
		else
		{
			esconder('liveToast1');
			var resultado = "Menor de Idade";
			tabelaPedido.innerHTML = tabelaPedido.innerHTML + "<td>" + dadosPedido.email + "</td>" + "<td>" + dadosPedido.cep + "</td>" + "<td>" + dadosPedido.pedido + "</td>" + "<td>" + hoje + "</td>" + "<td>" + horario + "</td>" + "<td style=\"background-color: #ff5b5b;\">" + resultado + "</td>";
		}

	}
	
}

//Função para verificação da idade
function verificaIdade(objeto) {

	if (objeto >= 18)
	{
		var x = 3 + "4";
		alert(x);
		x = x + 5;
		alert(x);
	}
	else
	{
		alert("Atenção! O campo idade será marcado pela cor vermelha porque você é menor de idade e, portanto, não podemos realizar o seu pedido. Avise ao seu responsável sobre a realização da compra!");
		return "Menor de Idade";
	}

}

//Função para esconder o toast
function esconder(id) {

	var display = document.getElementById(id).style.display;
    document.getElementById(id).style.display = 'none';

}


//Função para mostrar o toast
function mostrar(id) {

	var display = document.getElementById(id).style.display;
    document.getElementById(id).style.display = 'block';

}