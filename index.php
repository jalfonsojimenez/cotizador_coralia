<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title></title>
<style>
.wrap{
		display: grid;				
		grid-template-columns: repeat(2, 1fr);
}		
div{
}
</style>
</head>
<body>
<h1>Cotizador Coralia</h1>

<form action="procesapedido.php"method="POST">
<div class="wrap">
<div>

		<h2>Instrumentos</h2>
		<div class="wrap">
				<div> <label for="organo">organo</label> </div>
				<div><input type="number" min="1" max="10" placeholder="1" name="organo"></div>
				<div> <label for="percusion">percusion</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="percusion"></div>
				<div> <label for="violines">Violines</label> </div>
				<div> <input type="number" min="1" max="10" placeholder="0" name="violines"> </div>
				<div> <label for="violas">Violas</label> </div>
				<div> <input type="number" min="1" max="10" placeholder="0" name="violas"> </div>
				<div> <label for="cellos">Cellos</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="cellos"></div>
				<div> <label for="contrabajos">contrabajos</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="contrabajos"></div>
				<div> <label for="trompetas">trompetas</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="trompetas"></div>
				<div> <label for="flautas">flautas</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="flautas"></div>
				<div> <label for="fagotes">fagotes</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="fagotes"></div>
				<div> <label for="cornos">cornos</label> </div>
				<div><input type="number" min="1" max="10" placeholder="0" name="cornos"></div>
		</div>
</div>
<div>
						<h2>Voces</h2>
		<div class="wrap">
				<div> <label for="Sopranos">Sopranos</label></div>
				<div><input type="number" min="1" max="10" placeholder="0" name="sopranos"> </div>
				<div> <label for="contraltos">Contraltos</label></div>
				<div><input type="number" min="1" max="10" placeholder="0" name="contraltos"> </div>
				<div> <label for="tenores">tenores</label></div>
				<div><input type="number" min="1" max="10" placeholder="0" name="tenores"></div>
				<div> <label for="bajos">bajos</label></div>
				<div><input type="number" min="1" max="10" placeholder="0" name="bajos"></div>
		</div>

</div>
</div>
<h2>Costos</h2>
		<div class="wrap">
				<div><label for="preciomusico">Precio por músico</label></div>
				<div><input type="number" name="cospreciomusico" placeholder="800"></div>
				<div><label for="comision">Comisión en %  para coralia</label></div>
				<div><input type="number" name="coscomision" placeholder="50"></div>
				<div><label for="carros">cantidad de carros</label></div>
				<div><input type="number" name="coscant" placeholder="1"></div>
				<div><label for="kilometros">Kilometros a recorrer (de ida)</label></div>
				<div><input type="number" name="coskm"></div>
				<div><label for="gas">Costo gasolina</label></div>
				<div><input type="number" name="cosgas"></div>
				<div><label for="lugar">Lugar de la misa</label></div>
				<div><input type="text" name="lugar"></div>
		</div>
<button>Manda</button>
</form>
</body>
</html>
