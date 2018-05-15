<?php 


// Define o tamanho da imagem
	$imgWidth=423;
	$imgHeight=247;

// recebe a imagem de fundo
	$imgResource = ImageCreateFromJPEG("imagens/ass.jpg");

// Define a cor
	$textcolor = imagecolorallocate($imgResource, 0,0, 0);

 // carregar fontes...
	$fnormal = './font/arial.ttf';
	$fnegrito = './font/ARIBLK.ttf';
	$fnegritoeitalico = './font/Calibri.ttf';




				$nome = urldecode( $_GET['nome']);
				$nomeSize="20";
				$cargo =urldecode( $_GET['cargo']);
				$cargoSize="12";
				$email = urldecode( $_GET['email']);
				$emailSize="12";
				$tel = urldecode( $_GET['tel']);
				$telSize="12";
				$cel = urldecode( $_GET['cel']);
				$celSize="12";
		
				$att="Atenciosamente,";
				$attSize="11";
				$phone = "+55 ".$tel;
				$celular ="+55 ".$cel;
				$emailCom= $email;


	$textNome=imagettfbbox($nomeSize , 0 , $fnegrito , $nome );
	$textCargo=imagettfbbox($cargoSize , 0 , $fnegrito , $cargo );
	$textrEmail=imagettfbbox($emailSize , 0 , $fnegrito , $emailCom );
	$textTel=imagettfbbox($telSize , 0, $fnegrito , $phone );
	$textCel=imagettfbbox($celSize , 0 , $fnegrito , $celular );
	$textEnd=imagettfbbox($attSize , 0 , $fnegrito , $att );

// Escreve na tela
	imagettftext($imgResource, $attSize, 0,18, 16, $textcolor,$fnormal, $att);
	imagettftext($imgResource, $nomeSize, 0,18, 56, $textcolor,$fnegrito, $nome);
	imagettftext($imgResource, $cargoSize, 0, 18, 78, $textcolor,$fnormal, $cargo);	
	imagettftext($imgResource, $telSize, 0, 18, 110, $textcolor,$fnormal, $phone);
	imagettftext($imgResource, $celSize, 0, 18, 132, $textcolor,$fnormal, $celular);
	imagettftext($imgResource, $emailSize, 0, 18, 154, $textcolor,$fnormal, $emailCom);





// Header informando que é uma imagem JPEG
	header( 'Content-type: image/jpeg; charset=utf-8' );

// Envia a imagem para o borwser ou arquivo
	imagejpeg( $imgResource, NULL, 80 );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 * NULL - O caminho para salvar o arquivo.
          Se não definido NULL a imagem será mostrado no browser.
 * 80 - Qualidade da compresão da imagem.
 */













 ?>
