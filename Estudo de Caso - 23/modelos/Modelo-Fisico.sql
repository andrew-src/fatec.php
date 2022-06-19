CREATE TABLE IF NOT EXISTS users (
user_id int(11) NOT NULL AUTO_INCREMENT,
user_num varchar(255) NOT NULL,
user_nome varchar(255) NOT NULL,
user_profissao varchar(255) NOT NULL,
user_date date NOT NULL,
user_endereco varchar(255) NOT NULL,
user_nomeEmpresaCL varchar(255) NOT NULL,
user_numContrato varchar(255) NOT NULL,
user_dateVigen date NOT NULL,
user_dateVenc date NOT NULL,
user_valorHr varchar(255) NOT NULL,
active int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (user_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1
AUTO_INCREMENT = 1;


