drop database experience;

CREATE DATABASE experience DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
use experience;

create table usuarios(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    unidade varchar(255),
    matricula varchar(255) COLLATE utf8_general_mysql500_ci,
    matricula_md5 varchar(255) COLLATE utf8_general_mysql500_ci,
    senha varchar(255) COLLATE utf8_general_mysql500_ci,
    senha_md5 varchar(255) COLLATE utf8_general_mysql500_ci,
    nome varchar(255) COLLATE utf8_general_mysql500_ci,
    email varchar(255),
    turma varchar(255),
    idade int(2)default '1',
    aula1 int(11) default '0',
    aula2 int(11) default '0',
    aula3 int(11) default '0',
    aula4 int(11) default '0',
    aula5 int(11) default '0',
    aula6 int(11) default '0',
    aula7 int(11) default '0',
    aula8 int(11) default '0',
    prova1 int(11) default '0',
    prova2 int(11) default '0',
    prova3 int(11) default '0',
    prova4 int(11) default '0',
    prova5 int(11) default '0',
    prova6 int(11) default '0',
    prova7 int(11) default '0',
    prova8 int(11) default '0',
    permissao int(11) DEFAULT 0 COMMENT '0 para alunos e 1 para prof 2 para adm',
    ativado int(1) default 0 comment '0 Para inativo, 1 para ativo'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

create table aulas(
    id int(11) not null primary key auto_increment,
    numero_aula int(1) not null,
    titulo_aula varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
    img_capa varchar(255) COLLATE utf8_general_mysql500_ci default 'img/default',
    img_docs varchar(255) COLLATE utf8_general_mysql500_ci default 'img/img00',
    link_apresentacao varchar(255) COLLATE utf8_general_mysql500_ci default '?',
    link_documento varchar(255) COLLATE utf8_general_mysql500_ci default '?'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


/**
Tabelas do banco de dados
**/

INSERT INTO `aulas` (`id`, `numero_aula`, `titulo_aula`, `img_capa`, `img_docs`, `link_apresentacao`, `link_documento`) VALUES
(1, 1, 'Cloud Computing', 'img/Aula1', 'img/img01', 'https://drive.google.com/open?id=0Bx4hVCOh5y-Xem92aXFaanJPcmM', 'https://drive.google.com/open?id=0B4tUvFXK86gKR2x2and1dTRxTkU'),
(2, 2, 'Vocabulary', 'img/Aula2', 'img/img02', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XWVNHNzI1ZW9lRnM', '...'),
(3, 3, 'Contrato de Trabalho', 'img/Aula3', 'img/img03', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XMjhyT1JPdFNreVE','https://drive.google.com/open?id=0B4tUvFXK86gKTEkzd1E1YVVDM1k'),
(4, 4, 'Identidade Visual', 'img/Aula4', 'img/img04', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XOGVMd0lOY3NHZjQ','...'),
(5, 5, 'Painel de Controle', 'img/Aula5', 'img/img05', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XRU45YngtVWxpUU0','https://drive.google.com/open?id=0B4tUvFXK86gKZFZNYnR0OFN6TFU'),
(6, 6, 'Chunks', 'img/Aula6', 'img/img06', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbFRheXZnbFBsRGs','https://drive.google.com/open?id=0B4tUvFXK86gKWFBBTmtObE1TemM'),
(7, 7, 'Empreendedorismo', 'img/Aula7', 'img/img07', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbnNfQ1VIYWRpOTA','https://drive.google.com/open?id=0B4tUvFXK86gKZDlJUFR3dGVkdFk'),
(8, 8, 'Formatação de Computadores', 'img/Aula8', 'img/img08', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XQkEyWlQwNU51M0U','https://drive.google.com/open?id=0Bx4hVCOh5y-XTEpmS0ZqdGtFSms');

INSERT INTO `usuarios` (`id`, `matricula`, `matricula_md5`, `senha`, `senha_md5`, `nome`, `idade`, `aula1`, `aula2`, `aula3`, `aula4`, `aula5`, `aula6`, `aula7`, `aula8`, `prova1`, `prova2`, `prova3`, `prova4`, `prova5`, `prova6`, `prova7`, `prova8`, `permissao`) VALUES (NULL, 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'experience', 'd6e047923b2b0f63a7a03c66074a0151', 'Administrador', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2');

CREATE table questoes_provas(
  id_prova int not null PRIMARY KEY AUTO_INCREMENT,
  modulo_prova int not null,
  pergunta_prova varchar(500) not null,
  FOREIGN KEY(modulo_prova) REFERENCES aulas(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `questoes_provas`(`id_prova`,`modulo_prova`,`pergunta_prova`,`id_resposta_correta`)VALUES (`1`,1,`Qual a funÃ§Ã£o do sistema de Cloud Computing?`,1);

CREATE TABLE respostas_provas(
  id int not null primary key auto_increment,
  id_pergunta int not null,
  modulo_pergunta int not null,
  resposta varchar(500),
  verdadeira int(1) default '1' comment '1: Verdadeira | 0: falsa',
  FOREIGN KEY(id_pergunta) REFERENCES questoes_provas(id_prova),
  FOREIGN KEY(modulo_pergunta) REFERENCES aulas(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Registros das respostas*/
INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '1', '1', 'Armazenar informaÃ§Ãµes de forma segura e eficiente usando a internet como meio de comunicaÃ§Ã£o', '1'), (NULL, '1', '1', 'Baixar Músicas da internet', '0'), (NULL, '1', '1', 'Baixar fotos da internet', '0'), (NULL, '1', '1', 'Baixar filmes da internet', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '2', '1', 'Google - 15GB, OneDrive - 5GB, Mega - AtÃ© 50GB, Dropbox - Inicialmente 2GB', '1'), (NULL, '2', '1', 'Google - 10GB, OneDrive - 5GB, Mega - 500GB, DropBox - Ilimitado', '0'), (NULL, '2', '1', 'Google - 100GB, OneDrive - 50GB, Mega - 30GB, DropBox - 30GB', '0'), (NULL, '2', '1', 'Google - 70GB, OneDrive - 50GB, Mega - 5GB, DropBox - 10GB', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '3', '1', 'UtlizaÃ§Ã£o independente do sistema, compartilhamento no ambiente corporativo simplificado', '1'), (NULL, '3', '1', 'Resposta errada 1', '0'), (NULL, '3', '1', 'Resposta errada 2', '0'), (NULL, '3', '1', 'Resposta errada 3', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '4', '1', 'Compartilhar arquivos, criaÃ§Ã£o de arquivos diretamente na nuvem, armazenamento dos dados dos seu Smartphone', '1'), (NULL, '4', '1', 'Resposta errada 1', '0'), (NULL, '4', '1', 'Resposta errada 2', '0'), (NULL, '4', '1', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '5', '1', 'Link de compartilhamento, autorizaÃ§Ã£o de usuÃ¡rio da nuvem', '1'), (NULL, '5', '1', 'Resposta errada 1', '0'), (NULL, '5', '1', 'Resposta errada 2', '0'), (NULL, '5', '1', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '6', '3', 'AutÃ´nomo', '1'), (NULL, '6', '3', 'Resposta errada 1', '0'), (NULL, '6', '3', 'Resposta errada 2', '0'), (NULL, '6', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '7', '3', 'Eventual', '1'), (NULL, '7', '3', 'Resposta errada 1', '0'), (NULL, '7', '3', 'Resposta errada 2', '0'), (NULL, '7', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '8', '3', 'TemporÃ¡rio', '1'), (NULL, '8', '3', 'Resposta errada 1', '0'), (NULL, '8', '3', 'Resposta errada 2', '0'), (NULL, '8', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '9', '3', 'TÃ¡cito', '1'), (NULL, '9', '3', 'Resposta errada 1', '0'), (NULL, '9', '3', 'Resposta errada 2', '0'), (NULL, '9', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '10', '3', '14 e 24 / empregador', '1'), (NULL, '10', '3', 'Resposta errada 1', '0'), (NULL, '10', '3', 'Resposta errada 2', '0'), (NULL, '10', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '11', '3', 'ExperiÃªncia', '1'), (NULL, '11', '3', 'Resposta errada 1', '0'), (NULL, '11', '3', 'Resposta errada 2', '0'), (NULL, '11', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '12', '3', 'Determinado', '1'), (NULL, '12', '3', 'Resposta errada 1', '0'), (NULL, '12', '3', 'Resposta errada 2', '0'), (NULL, '12', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '13', '3', 'Contrato Indeterminado', '1'), (NULL, '13', '3', 'Resposta errada 1', '0'), (NULL, '13', '3', 'Resposta errada 2', '0'), (NULL, '13', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '14', '3', 'Os horÃ¡rios forem compatÃ­veis e as empresas nÃ£o forem concorrentes', '1'), (NULL, '14', '3', 'Resposta errada 1', '0'), (NULL, '14', '3', 'Resposta errada 2', '0'), (NULL, '14', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '15', '3', 'Por sua vez a empresa declarar falÃªncia ou dissoluÃ§Ã£o da empresa inclusive concordata (Art. 449 - CLT).', '1'), (NULL, '15', '3', 'Resposta errada 1', '0'), (NULL, '15', '3', 'Resposta errada 2', '0'), (NULL, '15', '3', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '16', '5', 'Controlar as configuraÃ§Ãµes do computador, tais como data e hora, contas de usuÃ¡rios e demais recursos', '1'), (NULL, '16', '5', 'Resposta errada 1', '0'), (NULL, '16', '5', 'Resposta errada 2', '0'), (NULL, '16', '5', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '17', '5', 'Ã‰ uma barreira de proteÃ§Ã£o que controla o trÃ¡fego entre seu computador e a internet, evitando ataques de usuÃ¡rios maliciosos ao seu sistema operacional', '1'), (NULL, '17', '5', 'Resposta errada 1', '0'), (NULL, '17', '5', 'Resposta errada 2', '0'), (NULL, '17', '5', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '18', '5', 'Comum: autorizaÃ§Ã£o para usar o sistema e fazer modificaÃ§Ãµes que nÃ£o afetem o desempenho do sistema | Administrador: autorizaÃ§Ã£o para fazer quaisquer manipulaÃ§Ãµes no sistema operacional, inclusive instalar novos programas.', '1'), (NULL, '18', '5', 'Resposta errada 1', '0'), (NULL, '18', '5', 'Resposta errada 2', '0'), (NULL, '18', '5', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '19', '5', 'Ã‰ um grupo de computadores em uma rede domÃ©stica que podem compartilhar arquivos e impressoras. VocÃª pode configurar no painel de controle', '1'), (NULL, '19', '5', 'Resposta errada 1', '0'), (NULL, '19', '5', 'Resposta errada 2', '0'), (NULL, '19', '5', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '20', '5', 'Pendrive, Teclado, Mouse', '1'), (NULL, '20', '5', 'Resposta errada 1', '0'), (NULL, '20', '5', 'Resposta errada 2', '0'), (NULL, '20', '5', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '21', '6', 'Break a Leg', '1'), (NULL, '21', '6', 'Resposta errada 1', '0'), (NULL, '21', '6', 'Resposta errada 2', '0'), (NULL, '21', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '22', '6', 'speak of the devil', '1'), (NULL, '22', '6', 'Resposta errada 1', '0'), (NULL, '22', '6', 'Resposta errada 2', '0'), (NULL, '22', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '23', '6', 'piece of cake', '1'), (NULL, '23', '6', 'Resposta errada 1', '0'), (NULL, '23', '6', 'Resposta errada 2', '0'), (NULL, '23', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '24', '6', 'cut corners', '1'), (NULL, '24', '6', 'Resposta errada 1', '0'), (NULL, '24', '6', 'Resposta errada 2', '0'), (NULL, '24', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '25', '6', 'crush', '1'), (NULL, '25', '6', 'Resposta errada 1', '0'), (NULL, '25', '6', 'Resposta errada 2', '0'), (NULL, '25', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '26', '6', 'Right in the bull\'s eyes', '1'), (NULL, '26', '6', 'Resposta errada 1', '0'), (NULL, '26', '6', 'Resposta errada 2', '0'), (NULL, '26', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '27', '6', 'awesome', '1'), (NULL, '27', '6', 'Resposta errada 1', '0'), (NULL, '27', '6', 'Resposta errada 2', '0'), (NULL, '27', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '28', '6', 'chilling (out)', '1'), (NULL, '28', '6', 'Resposta errada 1', '0'), (NULL, '28', '6', 'Resposta errada 2', '0'), (NULL, '28', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '29', '6', 'dumped', '1'), (NULL, '29', '6', 'Resposta errada 1', '0'), (NULL, '29', '6', 'Resposta errada 2', '0'), (NULL, '29', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '30', '6', 'had a blast', '1'), (NULL, '30', '6', 'Resposta errada 1', '0'), (NULL, '30', '6', 'Resposta errada 2', '0'), (NULL, '30', '6', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '31', '8', 'Ã‰ o software mais importante de um computador, com ele podemos dar comandos ao nosso computador e fazer ele responder conforme a nossa necessidade', '1'), (NULL, '31', '8', 'Resposta errada 1', '0'), (NULL, '31', '8', 'Resposta errada 2', '0'), (NULL, '31', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '32', '8', 'Virtual Box', '1'), (NULL, '32', '8', 'Resposta errada 1', '0'), (NULL, '32', '8', 'Resposta errada 2', '0'), (NULL, '32', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '33', '8', 'Permite o teste do sistema operacional antes de utilizar a versÃ£o completa no computador', '1'), (NULL, '33', '8', 'Resposta errada 1', '0'), (NULL, '33', '8', 'Resposta errada 2', '0'), (NULL, '33', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '34', '8', 'Ã‰ uma divisÃ£o do disco rÃ­gido, permitindo instalaÃ§Ãµes de vÃ¡rios tipos de sistemas operacionais em um Ãºnico disco', '1'), (NULL, '34', '8', 'Resposta errada 1', '0'), (NULL, '34', '8', 'Resposta errada 2', '0'), (NULL, '34', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '35', '8', 'Processo que permite o correto esvaziamento de um disco rÃ­gido para poder reutilizÃ¡-lo depois. Normalmente, o processo de formataÃ§Ã£o Ã© realizado para reverter um sistema de arquivo que por alguma razÃ£o se tornou corrompido ou perigoso.', '1'), (NULL, '35', '8', 'Resposta errada 1', '0'), (NULL, '35', '8', 'Resposta errada 2', '0'), (NULL, '35', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '36', '8', 'SÃ£o softwares capazes de iniciar o processo de carregamento de sistemas operacionais em um computador.', '1'), (NULL, '36', '8', 'Resposta errada 1', '0'), (NULL, '36', '8', 'Resposta errada 2', '0'), (NULL, '36', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '37', '8', 'Backup Ã© um termo inglÃªs que tem o significado de cÃ³pia de seguranÃ§a. Ã‰ frequentemente utilizado em informÃ¡tica para indicar a existÃªncia de cÃ³pia de um ou mais arquivos guardados em diferentes dispositivos de armazenamento.', '1'), (NULL, '37', '8', 'Resposta errada 1', '0'), (NULL, '37', '8', 'Resposta errada 2', '0'), (NULL, '37', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '38', '8', 'SÃ£o programas responsÃ¡veis pela comunicaÃ§Ã£o entre o sistema operacional de computador e o hardware conectado a ele.', '1'), (NULL, '38', '8', 'Resposta errada 1', '0'), (NULL, '38', '8', 'Resposta errada 2', '0'), (NULL, '38', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '39', '8', 'Trata-se de um mecanismo responsÃ¡vel por algumas atividades consideradas corriqueiras em um computador, mas que sÃ£o de suma importÃ¢ncia para o correto funcionamento de uma mÃ¡quina. Se a BIOS para de funcionar, o PC tambÃ©m para.', '1'), (NULL, '39', '8', 'Resposta errada 1', '0'), (NULL, '39', '8', 'Resposta errada 2', '0'), (NULL, '39', '8', 'Resposta errada 4', '0');
INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES (NULL, '40', '8', 'Linux', '1'), (NULL, '40', '8', 'Resposta errada 1', '0'), (NULL, '40', '8', 'Resposta errada 2', '0'), (NULL, '40', '8', 'Resposta errada 4', '0');
