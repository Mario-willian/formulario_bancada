drop database glpi;

create database glpi;

use glpi;

create table chamado(
    numero_chamado int not null auto_increment primary key,
    nome_cliente VARCHAR(100),
	email_cliente VARCHAR(60),
    status VARCHAR(20)
    );

    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'Suprema Glass', 'ti@supremaglass.com.br', 'fechado');
    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'Ecco Solucoes', 'ti@eccosolucoes.com.br', 'Em processo');
    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'IAS', 'ti@ias.ind.com.br', 'Em processo');
    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'All Control', 'ti@allcontrol.com.br', 'Pendente Tecnico');
    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'FJR', 'ti@construtorafjr.com.br', 'fechado');
    insert into chamado(numero_chamado, nome_cliente, email_cliente, status) VALUES (NULL, 'AIC', 'ti@aic.com.br', 'Pendente Cliente');
