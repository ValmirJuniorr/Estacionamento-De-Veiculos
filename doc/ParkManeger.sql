CREATE TABLE Horario (
 idHorario CHAR(10) NOT NULL,
 data DATE,
 horaEntrada TIME(10),
 horaSaida TIME(10)
);

ALTER TABLE Horario ADD CONSTRAINT PK_Horario PRIMARY KEY (idHorario);


CREATE TABLE Usuario (
 idUsuario INT NOT NULL,
 nomeUsuario CHAR(20),
 cpf CHAR(20),
 rua CHAR(20),
 numero CHAR(10),
 indentidade CHAR(20),
 cidade CHAR(20),
 uf CHAR(10)
);

ALTER TABLE Usuario ADD CONSTRAINT PK_Usuario PRIMARY KEY (idUsuario);


CREATE TABLE Vaga (
 idVaga INT NOT NULL,
 valor INT NOT NULL,
 localizacaoHorizontal INT,
 localizacaoVertical INT,
 status CHAR(1)
);

ALTER TABLE Vaga ADD CONSTRAINT PK_Vaga PRIMARY KEY (idVaga);


CREATE TABLE Cliente (
 idCliente INT NOT NULL,
 status CHAR(1),
 totalGasto NUMERIC(10),
 numeroLocaCoes INT,
 idUsuario INT NOT NULL
);

ALTER TABLE Cliente ADD CONSTRAINT PK_Cliente PRIMARY KEY (idCliente);


CREATE TABLE Empregado (
 idEmpregado INT NOT NULL,
 tipo CHAR(10),
 senha CHAR(20),
 idUsuario INT NOT NULL
);

ALTER TABLE Empregado ADD CONSTRAINT PK_Empregado PRIMARY KEY (idEmpregado);


CREATE TABLE locacao (
 idLocacao CHAR(10) NOT NULL,
 idVaga INT NOT NULL,
 idHorario CHAR(10) NOT NULL,
 idCliente INT NOT NULL
);

ALTER TABLE locacao ADD CONSTRAINT PK_locacao PRIMARY KEY (idLocacao);


ALTER TABLE Cliente ADD CONSTRAINT FK_Cliente_0 FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);


ALTER TABLE Empregado ADD CONSTRAINT FK_Empregado_0 FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);


ALTER TABLE locacao ADD CONSTRAINT FK_locacao_0 FOREIGN KEY (idVaga) REFERENCES Vaga (idVaga);
ALTER TABLE locacao ADD CONSTRAINT FK_locacao_1 FOREIGN KEY (idHorario) REFERENCES Horario (idHorario);
ALTER TABLE locacao ADD CONSTRAINT FK_locacao_2 FOREIGN KEY (idCliente) REFERENCES Cliente (idCliente);


