<?php
if(!(isset($_POST["criar-curriculo"]))){
	header('Location: /unipar/unipar-ar-fpi/index.php');
}

// Formatação do CEP
$cep = substr($_POST["cep"], 0, -3)."-". substr($_POST["cep"], -3);

// Formatação dos Telefones
$remover = array("-", "(", ")", " ", ",", ".", "*");
$fone = str_replace($remover, "", $_POST["telefone"]);

if(strlen($fone) == 11){
	$fone = "(". substr($fone, 0, -9).") ". substr($fone, 2, -4)."-". substr($fone, -4);// Celular
}else {
	$fone = "(". substr($fone, 0, -8).") ". substr($fone, 2, -4)."-". substr($fone, -4);// Fone Fixo
}

$foneRecadoCorreto = str_replace($remover, "", $_POST["telefoneRecado"]);

if($_POST["telefoneRecado"] == ""){
	$foneRecado = "";
}else {
	$foneRecado = "<p>Telefone Recado: ". $foneRecadoCorreto;
	if(strlen($foneRecadoCorreto) == 11){
		$foneRecado = "<p>Telefone Recado: ". "(". substr($foneRecadoCorreto, 0, -9).") ". substr($foneRecadoCorreto, 2, -4)."-". substr($foneRecadoCorreto, -4)."</p>";// Celular
	}else {
		$foneRecado = "<p>Telefone Recado: ". "(". substr($foneRecadoCorreto, 0, -8).") ". substr($foneRecadoCorreto, 2, -4)."-". substr($foneRecadoCorreto, -4)."</p>";// Fone Fixo
	}
}

// Redes Sociais
$redeSocial = $_POST["redes-sociais"];

// Carrega a Foto
$dirUploads = "upload";
$image = $_POST["input-foto-crop"];

if($image != ""){
	$source = 'src="'.$dirUploads. DIRECTORY_SEPARATOR . $image.'"';
}else{
	$source = "";
}

// Variáveis formação
$cursoFormacao = $_POST["cursoFormacao"];
$instituicao = $_POST["instituicao"];
$conclusao = $_POST["conclusao"];
$anoFormacao = $_POST["anoFormacao"];


// Variáveis experiência
if(!(isset($_POST["cbxPrimeiroEmprego"]))){
	$empresa = $_POST["empresa"];
	$cargo = $_POST["cargo"];
	$entradaMes = $_POST["entradaMes"];
	$entradaAno = $_POST["entradaAno"];
	$empregoAtual = $_POST["empregoAtual"];
	$saidaMes = $_POST["saidaMes"];
	$saidaAno = $_POST["saidaAno"];
	$atividades = $_POST["atividades"];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<title>Currículo <?= $_POST["nomeCompleto"]?></title>
	<link rel="stylesheet" href="css/curriculo.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
	<header class="cabecalho nao-imprime" id="cabecalho-curriculo">
		<p>Tudo pronto! Aqui está seu Currículo!</p>
		<p>Boa sorte em seu novo emprego!</p>
		<p>Clique no Botão abaixo para fazer a Impressão</p>
		<button class="btn-imprimir" type="button" onclick="window.print()">Imprimir</button>
	</header>

	<main class="container">
		<div class="dados-pessoais">
			<img <?=$source?>>
			<h1><?= $_POST["nomeCompleto"]?></h1>
			<p><?= $_POST["estadoCivil"]?>, <?= $_POST["nacionalidade"]?>, <?= $_POST["idade"]?> anos</p>
			<p>Sexo: <?= $_POST["sexo"]?>, Filhos: <?= $_POST["filhos"]?></p>
			<p><?= $_POST["rua"]?> - <?= $_POST["bairro"]?></p>
			<p>CEP: <?= $cep?> | <?= $_POST["cidade"]?> - <?= $_POST["uf"]?></p>
			<p>Telefone: <?= $fone?></p>
			<?= $foneRecado?>
			<p>E-mail: <?= $_POST["email"]?></p>
		</div>
		<div class="redes-sociais">
			<?php
				foreach($redeSocial as $key => $n){
					if($n != ""){
						echo "<div class='rede-social'><img src='images/$key.png'><p>".$n."</p></div>";
					}
					else{
						$redeSocial = "";
					}
				}
			?>
		</div>
		<hr>

		<div>
			<h2>Objetivo</h2>
			<p><?= $_POST["objetivo"]?></p>
		</div>

		<div class="paragrafo">
			<h2>Formação Acadêmica</h2>
			<?php
				foreach( $cursoFormacao as $key => $n ) {
					echo "<p>Curso: ".$n."<br>Istituição: ".$instituicao[$key]."<br>".$conclusao[$key]." ".$anoFormacao[$key]."</p>";
				}
			?>
		</div>

		<div class="paragrafo">
			<h2>Experiência Profissional</h2>
			<?php
				// Valida se o checkbox primeiro emprego está marcado e se os 3 primeiros inputs estão preenchidos
				if(isset($_POST['cbxPrimeiroEmprego']) || $empresa[0] == "" || $cargo[0] == "" || $entradaMes[0] == ""){
					echo ("<p>Estou a procura do primeiro emprego.</p>");
				}
				else {
					foreach( $empresa as $key => $n ) {
						echo "<p>Empresa: ".$n." | Cargo: ".$cargo[$key]."<br>Período de: ".$entradaMes[$key]."de ".$entradaAno[$key]."  a  ".$saidaMes[$key].$saidaAno[$key]."<br>Principais atividades: ".$atividades[$key]."</p>";
					}
				}
			?>
		</div>

		<div>
			<h2>Outros Cursos e Habilidades</h2>
			<?php
				foreach($_POST["maisCursos"] as $cursos){
					echo "<p>$cursos</p>";
				}
			?>
		</div>
	</main>
</body>
</html>