-- Drop banco de dados
drop database projeto01;

-- Criação do banco de dados
create database projeto01;

-- Selecionar banco de dados
use projeto01;

-- Criação da tabela usuario
create table usuario (
	id_usuario int not null auto_increment,
    nome_usuario varchar(100) not null,
    email_usuario varchar(100) not null,
    telefone_usuario varchar(30) not null, -- no .php é fone_usuario
    primary key (id_usuario)
);

-- Ao final, clicar no "raiozinho" do laado direito do botão "salvar"
-- e clicar em "refresh", do lado superior direito do título "SCHEMAS"