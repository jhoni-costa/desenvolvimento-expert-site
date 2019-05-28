CREATE TABLE IF NOT EXISTS usuario (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    hierarquia VARCHAR (255) NOT NULL,
    data_registro TIMESTAMP,
    data_atualizacao TIMESTAMP
);

insert into usuario (id, nome, email, senha, hierarquia) values (1, 'Jhoni Regis Souza da Costa', 'jhonirsc@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin');

CREATE TABLE IF NOT EXISTS postagem(
	id INT auto_increment primary key,
    titulo varchar(255) not null,
    caminho_foto varchar(255) not null,
    texto text not null,
    id_usuario int not null,
    reg_date timestamp);
    
alter table postagem add constraint fk_usuario foreign key(id_usuario) references usuario (id);