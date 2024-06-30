function cpfMask(value) {
	const cpf = value
		.replace(/\D+/g, '') // Limpa a string removendo tudo que não for digito de forma global (em toda a string)
		/* A instrução regex é colada dentro de duas "/" */

		.replace(/(\d{3})(\d)/, '$1.$2')
		.replace(/(\d{3})(\d)/, '$1.$2')
		.replace(/(\d{3})(\d)/, '$1-$2')
		.replace(/(-\d{2})\d$/, '$1');
	console.log(value);
	return cpf;
}

document.getElementById('cpf').addEventListener('input', function(e) {
	e.target.value = cpfMask(e.target.value);
});
