CREATE DATABASE teste_de_mercado;
USE teste_de_mercado;
CREATE TABLE operacoes(
	codgoMercadoria	 INTEGER NOT NULL,
	tipoMercadoria VARCHAR(30),
	nomeMercadoria VARCHAR(100),
	quantidade NUMERIC(15,2),
	preco NUMERIC(15,2),
	tipoNegociacao INTEGER);

	ALERT TABLE OPERACOES ADD CONSTRAINT PK_OPERACOES

	PRIMARY KEY (codigoMercadoria)
);