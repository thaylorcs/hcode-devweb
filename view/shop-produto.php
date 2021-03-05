<?php 
	require_once("header.php");
?>

	<section>
		
		<div class="container " id="destaque-produtos-container" >
			<div id="destaque-produtos">

			<div class="item" ng-repeat="produto in produtos">
					
					<div class="col-md-6 col-imagem">
						<img src="img/produtos/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>">
					</div>

					<div class="col-md-6 col-descricao">
						<h2><?=$produto['nome_prod_longo']?></h2>
						<div class="box-valor">
							<div class="text-noboleto text-arial-cinza"> no boleto</div>
							<div class="text-por text-arial-cinza">por</div>
							<div class="text-reais shop-roxo">R$</div>
							<div class="text-valor shop-roxo"><?=$produto['preco']?></div>
							<div class="text-valor-centavos shop-roxo">,<?=$produto['centavos']?></div>
							<div class="text-parcelas text-arial-cinza">ou em até <?=$produto['parcelas']?>x de R$ <?=$produto['parcela']?></div>
							<div class="text-total text-arial-cinza">total a prazo R$ <?=$produto['total']?></div>
					
						</div>

						<a href="#" class="btn btn-comprar shop-roxo"><i class="fa fa-shopping-cart shop-roxo"></i> Compre agora</a>
					</div>

				</div>

			</div>

		</div>

	</section>

	<?php 
		require_once("footer.php") 
	?>