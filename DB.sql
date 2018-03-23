create database projeto_Trainee;
use projeto_Trainee;


create table Automoveis(
	idAutomovel int auto_increment not null primary key, 
	ano_fabricacao int not null,
    ano_modelo int not null,
    observacoes varchar(100),
    preco real not null, 
    kilometragem int not null,
    modelo int references Modelo(idModelo)
)

create table Modelo(
	idModelo int auto_increment not null primary key,
	descricao varchar(100) not null,
	potencia int not null,
	marca int references Marca (idMarca)
)

create table Marca(
	idMarca int auto_increment not null primary key,
	nome varchar(100) not null
)

create table Aluguel(
	idAluguel int auto_increment not null primary key,	
	cliente varchar(12) references Usuario(cpf),
	automovel int references Automoveis(id),
	valor real not null,
	dataAluguel dateTime not null,
	multa real null,
	dataDevolucao dateTime not null
)


create table Usuario(
	nome varchar(100) not null,
	cpf varchar(12) not null primary key,
	telefone varchar(10) not null,
	email varchar(100) not null,
	login varchar(20) not null,
	senha varchar(20) not null,
	isAdmin boolean not null
)

insert into Usuario	values ('admin', '012345678910', '000000', 'admin@sistemaaluguel.com', 'admin', 'admin', true);
insert into Marca values (1, 'Fiat');
insert into Marca values(null, 'VW'), (null, 'Ford');
insert into Modelo values (null, 'Palio 1.3', 200, 1);
insert into Automoveis values (null, 2016, 2015, 'obs', 45000, 10000, 1);
insert into Aluguel values (null, '012345678910', 1, 250, 2018-03-22, 0, 2018-04-22);

select mo.idModelo, mo.descricao, ma.nome from Marca as ma join Modelo as mo on(mo.marca = ma.idMarca);
select a.idAutomovel, a.ano_fabricacao, a.ano_modelo, a.observacoes, a.preco, a.kilometragem, m.descricao from Automoveis as a join Modelo as m on(a.modelo = m.idModelo);

select * from Usuario;
select * from Automoveis;
select * from Modelo;
select * from Marca;
select * from Aluguel;

