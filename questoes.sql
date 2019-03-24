-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Mar-2019 às 06:31
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulador_quiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `idQuestao` int(5) NOT NULL,
  `questao` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `altA` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `altB` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `altC` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `altD` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `altCorreta` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`idQuestao`, `questao`, `altA`, `altB`, `altC`, `altD`, `altCorreta`) VALUES
(1, 'Qual a idade que uma pessoa deve ter para se habilitar nas categorias (D) e (E)?', 'vinte e um anos', 'dezessete anos', 'dezoito anos', 'dezenove anos', 'a'),
(2, 'Em relação ao novo modelo de Carteira de Habilitação,', 'Tem validade de acordo com o exame de sanidade física e mental.', 'Pode o motorista portar em copia autenticada.', 'Deve ser renovada a cada dez anos.', 'Deve ser renovada a cada ano.', 'a'),
(3, 'Qual a categoria da CNH utilizada para dirigir veículos de passageiros com capacidade acima de oito lugares sem contar o condutor?', 'A', 'B', 'C', 'D', 'd'),
(4, 'São documentos exigidos para fazer a transferência do veículo:', 'CRV, RG e comprovante de residência', 'CRV e CNH', 'Seguro obrigatório e DUT', 'Carteira de Habilitação e autorização do proprietário do veiculo', 'a'),
(5, 'Quando no trânsito existe uma placa de regulamentação permitindo o estacionamento, você entende que é permitido estacionar:', 'Dentro do espaço permitido em até cinqüenta centímetros distante do passeio', 'A dez metros da placa', 'A mais de oito metros do alinhamento da via transversal', 'Antes da placa', 'a'),
(6, 'Conforme o Código de trânsito, como se classificam as vias rurais:', 'Arterial e Rápida e Rodovias', 'Vias de Trânsito Rápido, Arteriais, Coletoras e Locais', 'Rodovias e Estradas', 'Vicinais Expressas e Preferenciais', 'c'),
(7, 'Qual a velocidade que um ônibus pode desenvolver em uma rodovia sem sinalização?', '70kmh', '80kmh', '90kmh', '100kmh', 'c'),
(8, 'Uma placa de Sinalização de trânsito com o formato circular e cores vermelha, branca e preta são de:', 'Regulamentação', 'Advertência', 'Indicação', 'Educativa', 'a'),
(9, 'Quando o condutor desobedece a uma placa de regulamentação no trânsito, estará cometendo?', 'Multa', 'Infração de trânsito', 'Notificação', 'Penalidade', 'b'),
(10, 'Quando o Proprietário do veículo empresta seu carro a alguém e, este condutor comete uma infração de trânsito. Qual é o prazo mínimo que o proprietário tem para informar ao Detran quem estava na direção do veículo?', 'cinco dias', '10dias', '15 dias', '30 dias', 'c'),
(11, 'Após a aquisição de um veiculo usado, qual é o prazo para efetuar a transferência do referido veículo?', 'até o fim do ano vigente', 'um mês', 'trinta dias', 'um ano', 'c'),
(12, 'Se um veículo ao transitar nas vias públicas produzir ruídos excedentes, devido a instalação de silenciadores inadequados, estará sujeito a:', 'multa', 'multa e remoção do veiculo', 'multa e retenção do veiculo', 'multa e suspensão do direto de dirigir', 'c'),
(13, 'Quais as principais fontes de emissão de poluentes nas grandes cidades?', 'Extração do Petróleo', 'Queima de combustíveis fósseis', 'Os veículos e as indústrias', 'Mineração', 'c'),
(14, 'Qual é o programa instituído pelo CONAMA que regulamenta os níveis de poluição produzida por veículos automotores?', 'Projeto JARI', 'Eco 92', 'PROCONVE', 'Carta da Terra', 'c'),
(15, 'Dirigir defensivamente significa evitar acidentes apesar das situações adversas. Quando ocorre um acidente as estatísticas mostram que a maior parte da culpa recai sobre:', 'o veículo', 'o condutor', 'situações adversas', 'as vias', 'b'),
(16, 'As estatísticas mostram que uma das principais causas ou principal causa de acidentes é o uso de bebidas alcoólicas, ao dirigir de acordo com a nova lei que regulamenta este assunto, se o condutor fizer uso de álcool ao dirigir está sujeito a:', 'Multa, Suspensão do direito de dirigir, recolhimento da CNH e sujeito prisão do condutor', 'Multa e Retenção do veiculo apenas', 'Multa', 'Multa e Prisão do Condutor apenas', 'a'),
(17, 'Até quantos anos de idade uma criança deve andar no banco traseiro?', 'cinco anos', 'dez anos', 'seis anos', 'sete anos', 'b'),
(18, 'A suspensão do direito de dirigir ocorre quando:', 'Quando cometer qualquer infração gravíssima', 'Quando atingir 20 pontos por infração em doze meses', 'Somente quando beber ao dirigir', 'Quando a carteira for cassada', 'b'),
(19, 'Quando alguém deseja interromper a via pública depende de:', 'Autorização do Prefeito Municipal', 'Autorização do DETRAN', 'Autorização do DER', 'Prévia autorização da autoridade de trânsito', 'd'),
(20, 'De acordo com a sinalização horizontal, uma linha divisória de faixa de trânsito pintada na cor Branca:', 'Separa fluxos de trânsito de vários sentidos', 'Separa fluxos de trânsito de sentidos duplo', 'Separa fluxos de trânsito de sentidos a esquerda', 'Separa fluxos de trânsito de mesmo sentido', 'd'),
(21, 'De acordo com o Código de Trânsito Brasileiro, uma linha amarela pintada junto a calçada significa:', 'permitido estacionar', 'proibido estacionar', ' o estacionamento é oblíquo', 'o estacionamento é paralelo', 'b'),
(22, 'Qual é a posição correta para estacionar uma motocicleta em relação a calçada?', 'perpendicular ao alinhamento da calçada', 'paralelo a guia da calçada', 'a mais de 50 cm da guia da calçada', 'de oblíquo', 'a'),
(23, 'É comum existir aglomeração (filas) de veículos em frente as escolas devido à imprudência dos motoristas (pais dos alunos) que param os seus veículos em fila dupla para o embarque e desembarque dos alunos. Esta ação causa risco e atraso no trânsito. Esta atitude deve ser?', 'imitada, pois todos fazem assim', 'ironizada, pois eles não sabem o que fazem', 'evitada por ser uma infração de trânsito', 'considerada normal', 'c'),
(24, 'Bons exemplos devem ser seguidos; no trânsito quem deve dar bons exemplos?', 'os motoristas', 'os pedestres', 'os ciclistas', 'todos os usuários das vias', 'd'),
(25, 'É comum ocorrerem acidentes de trânsito com vitimas. Diante dessa situação qual é a nossa obrigação legal em relação a prestação de socorro as vitimas de acidentes?', 'é obrigação de todos prestarem socorro às vitimas', 'é obrigação de todos prestarem socorro somente aos pedestres', 'é obrigação de todos prestarem socorro às vitimas, desde que não haja riscos para quem socorre', 'A obrigação é somente dos órgãos de Trânsito', 'c'),
(26, 'Ao atender uma vitima de acidente com parada cardiorespiratória, qual a seqüência correta das ações?', 'Fazer duas respirações seguidas de trinta massagens cardíacas, por cinco sessões completas', 'Fazer duas respirações seguidas de quinze massagens cardíacas, por quatro sessões completas', 'Fazer uma respiração seguida de trinta massagens cardíacas, por cinco sessões completas', 'Fazer cinco respirações seguidas de dez massagens cardíacas, por dez sessões completas', 'a'),
(27, 'Qual é a ordem ideal dos procedimentos, no local dos acidentes?', 'primeiro atender as vítimas depois sinalizar o local', 'primeiro atender as vítimas depois sinalizar o local e após chamar o resgate', 'primeiro atender as vítimas depois sinalizar o local, e depois se evadir do local', 'primeiro sinalizar o local, acionar o socorro e socorrer as vítimas', 'd'),
(28, 'Quando uma vitima apresentar fraturas expostas com sangramentos deve-se:', 'estancar a hemorragia e imobilizar a parte fraturada com algo rígido enfaixando junto ao membro', 'imobilizar a parte fraturada, depois estancar a hemorragia', 'colocar gelo na fratura', 'colocar o osso quebrado no lugar imediatamente', 'a'),
(29, 'Após chegar ao local de um acidente a policia constatou que um veículo havia se partido ao meio e também teria derrubado um poste da rede elétrica. No local havia uma placa R-19 regulamentando a velocidade máxima em quarenta km por hora, nesse caso pode se concluir que a causa do acidente foi?', 'imprudência e atenção', 'imprudência e o excesso de velocidade', 'negligência e imperícia', 'andar em velocidade abaixo da permitida', 'b'),
(30, 'Como todos podem ajudar a evitar novos acidentes no local que já existe acidente trânsito?', 'Sinalizando corretamente o local, colocando o triangulo a uma distancia de no mínimo trinta metros antes do local do local', 'ceder sempre seu direito para os outros', 'fazer aulas de direção para reforçar os reflexos no trânsito', 'deixar para que as autoridades decidam o que fazer', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`idQuestao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `idQuestao` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
