<!DOCTYPE html>
<html>
    <head>
        <title> Currículo </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!--link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"-->
    </head>
    <body>
    	<style type="text/css">
    		@font-face {
			    font-family: Montserrat Medium;
			    src: url('../../../public/fonts/Montserrat-Medium.ttf');
				font-weight: 400;
            	font-style: normal;
			}

    		.header-curriculo-pdf {
    			background-color: red;
    			display: flex;
    			height: 200px;
    			width: 100%;
    		}

    		.header-curriculo-pdf .imagem-perfil-curriculo-pdf {
    			background-color: yellow;
    			border-radius: 90px;
    			height: 180px;
    			width: 180px;
    		}

    		.header-curriculo-pdf .nome-perfil-curriculo-pdf {
    			color: #444440;
    			font-size: 50px;
    			margin-left: 250px;
    			font-family: 'Montserrat Medium';
    			text-transform: uppercase;
    		}

    		.section-curriculo-pdf {
    			border-left: 2px solid #04b2d9;
    			display: flex;
				flex-wrap: wrap;
    			height: 60%;
    			margin-top: 50px;
    			width: 100%;
    			background-color: red;
    		}

    		.section-curriculo-pdf-left{
    			background-color: red;
    			height: 80%;
    			width: 47%;
    		}

    		.blue{
    			background-color: blue;
    			float: right;
    			height: 80%;
    			width: 47%;
    		}
    	</style>

    	<div class="logo-pdf">
    		<!--img src="{{public_path('images/componentes/logo.png')}}" alt="Logo" height="75px"-->
    	</div>

    	<div class="header-curriculo-pdf">
    		<div class="imagem-perfil-curriculo-pdf"></div>
    		<div class="nome-perfil-curriculo-pdf">
    			<p> Vanessa Amaral </p>
    		</div>
    	</div>

    	<div class="section-curriculo-pdf">
    		<div class="section-curriculo-pdf-left">
    			<div class="caixa-section-curriculo-pdf">
    				<h1> PERFIL PROFISSIONAL </h1>
    				<p> {{ $curriculo->descricaoCurriculo }} </p>
    			</div>
    		</div>
    		<div class="blue"></div>
    	</div>
    </body>
</html>