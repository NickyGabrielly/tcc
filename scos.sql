CREATE TABLE usuario(
	id_usuario
	nome
	email
	cpf
	nivel
	login
	senha
	ativo
	foto_usuario
);
	
CREATE TABLE equipamento(
	id_equipamento
	n_patrtimonio
	nome
	especificacao
	local_origem
	ativo
);

CREATE TABLE evento_os(
	id_os FOREIGN KEY (`id_os`)
	REFERENCES ordem_de_servico (`id_os`),
	id_usuario FOREIGN KEY (`id_usuario`)
	REFERENCES usuario (`id_usuario`),
	id_equipamento FOREIGN KEY (`id_equipamento`)
	REFERENCES equipamento (`id_equipamento`),
	evento varchar(255) not null,
	data_hora_inicio datetime not null,
	data_hora_termino datetime not null
);	





ALTER TABLE evento_os
ADD CONSTRAINT evento1 FOREIGN KEY (`id_os`)
REFERENCES ordem_de_servico (`id_os`),

ADD CONSTRAINT evento2 FOREIGN KEY (`id_usuario`)
REFERENCES usuario (`id_usuario`),

ADD CONSTRAINT evento3 FOREIGN KEY (`id_equipamento`)
REFERENCES equipamento (`id_equipamento`);