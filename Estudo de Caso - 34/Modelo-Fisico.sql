CREATE TABLE IF NOT EXISTS users (
user_id int(11) NOT NULL AUTO_INCREMENT,
user_nome varchar(255) NOT NULL,
user_turma varchar(255) NOT NULL,
user_codigo_turma varchar(255) NOT NULL,
user_disciplina varchar(255) NOT NULL,
user_nome_aluno varchar(255) NOT NULL,
user_matricula_aluno varchar(255) NOT NULL,
user_date date NOT NULL,
active int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (user_id)
) ENGINE=INNODB DEFAULT CHARSET=latin1
AUTO_INCREMENT = 1;
