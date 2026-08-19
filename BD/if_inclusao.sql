-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/08/2026 às 19:26
-- Versão do servidor: 8.4.8
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if_inclusao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais`
--

CREATE TABLE `sinais` (
  `idSinal` int NOT NULL,
  `nomeSinal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fotoSinal` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `categoriaSinal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descricaoSinal` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sinais`
--

INSERT INTO `sinais` (`idSinal`, `nomeSinal`, `fotoSinal`, `categoriaSinal`, `descricaoSinal`) VALUES
(1, 'Computador', 'assets/img/informaticaBasica/computador.png', 'Informática Básica', 'Máquina usada para processar informações'),
(2, 'Gabinete', 'assets/img/informaticaBasica/gabinete.png', 'Informática Básica', 'é a estrutura física feita de metal, plástico e vidro que abriga, organiza e protege os componentes internos de um computador de mesa'),
(3, 'Programa', 'assets/img/informaticaBasica/programa.png', 'Informática Básica', 'Conjunto de instruções executadas pelo computador.'),
(4, 'Arquivo', 'assets/img/informaticaBasica/arquivo.png', 'Informática Básica', 'Conjunto de informações armazenadas pelo computador.'),
(5, 'Internet', 'assets/img/informaticaBasica/internet.png', 'Informática Básica', 'Rede mundial que conecta computadores e dispositivos.'),
(6, 'Lógica de Programação', 'assets/img/logicaProgramacao/logicaProgramacao.png', 'Lógica de Programação', 'Organização do raciocínio para criar programas.'),
(7, 'Condicional Simples', 'assets/img/estuturasControle/condicionalSimples.png', 'Estruturas de Controle', 'Comando de decisão que executa um bloco de código apenas se um teste lógico retornar o valor verdadeiro.'),
(8, 'Estruturas de Repetição', 'assets/img/logicaProgramacao/estuturasRepeticao.png', 'Lógica de Programação', 'Comandos usados na lógica de programação para executar um bloco de código várias vezes seguidas até que uma condição específica seja atendida.'),
(9, 'Sequência', 'assets/img/logicaProgramacao/sequencia.png', 'Lógica de Programação', 'Ordem em que as ações são executadas.'),
(10, 'Váriavel', 'assets/img/logicaProgramacao/variaveis.png', 'Lógica de Programação', 'Elemento que armazena um valor'),
(11, 'Igual a', 'assets/img/operadores/igualA.png', 'Operadores', 'Verifica se dois valores são iguais.'),
(12, 'Maior ou igual', 'assets/img/operadores/maiorOuIgual.png', 'Operadores', 'Operador que verifica se um valor é maior ou igual a outro'),
(13, 'Maior que', 'assets/img/operadores/maiorQue.png', 'Operadores', 'Verifica se um valor é maior que o outro.'),
(14, 'Condicional Composta', 'assets/img/estuturasControle/condicionalComposta.png', 'Estruturas de Controle', 'Comando que permite ao programa tomar uma decisão e executar caminhos diferentes dependendo se uma condição lógica é verdadeira ou falsa.'),
(15, 'Operador Lógico OU', 'assets/img/operadores/operadorLogicoOu.png', 'Operadores', 'Permite que uma das condições seja verdadeira.'),
(16, 'Menor ou Igual', 'assets/img/operadores/menorOuIgual.png', 'Operadores', 'Operador que verifica se um valor é menor igual a outro.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `opcaoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `opcaoUsuario`) VALUES
(1, 'alan', 'baixinhodesouzaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'SOU UMA PESSOA SURDA');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sinais`
--
ALTER TABLE `sinais`
  ADD PRIMARY KEY (`idSinal`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sinais`
--
ALTER TABLE `sinais`
  MODIFY `idSinal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
