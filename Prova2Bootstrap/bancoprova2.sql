-- Lana Akemi Ihara
-- BI3005771 - 3º INFO

-- 1. (Banco de Dados) Criar um banco de dados chamado Prova2, criar a tabela denominada
-- fluxo_caixa conforme script no exercício. 

-- Comando "drop" para deletar o banco de dados
-- drop database Prova2;

-- Criação do banco de dados
create database Prova2;

-- Selecionar banco de dados
use Prova2;

-- Comando abaixo para caso exista a tabela fluxo_caixa, deletar a tabela
drop table if exists fluxo_caixa;

-- Criação da tabela "fluxo_caixa"
create table fluxo_caixa (

-- nome coluna | tipo valor  | 	condição
	id		 	integer			not null auto_increment,
    data 		date			not null,
    tipo	 	varchar(10) 	not null,
    valor	 	decimal(10,2) 	not null,
    historico	varchar(150) 	not null,
    cheque 		varchar(3) 		not null,
    primary key (id) -- chave primária sendo o id
);