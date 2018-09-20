<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> Oppa! Design para todos </title>
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script>

	/*fim:THUMBS PRODUTOS*/
	var cores =  ["rgb(73, 73, 81)","rgb(81, 181, 110)","rgb(90, 191, 203)","rgb(255, 173, 0)","rgb(131, 107, 170)","rgb(242, 242, 244)"];
	function change_bgcolor(vseletor,vcor)
	{
		oseletor = $(vseletor).parent().parent().attr('id');

		cor = $("#"+oseletor).css('background-color');
		corindice = (cores.indexOf(cor));
		switch(vcor)
		{
			case "left":

			if( (corindice <= 0 ) ){
				corindice = cores.length-1;
			}
				else{corindice--;
			}

			break;
			case "right":

			if( (corindice >= (cores.length-1) || (corindice==-1) ) ){
				corindice = 0;
			}
			else{corindice++;}
			break;
		}
		vcor = cores[corindice];
		console.log(cor);
		console.log(corindice);
		console.log(vcor);
		console.log(oseletor);
		$( '#'+ oseletor ).css('background-color',vcor);
	}
	/*fim:THUMBS PRODUTOS*/



	$(document).ready(function() 
	{
		/*THUMBS PRODUTOS*/
		$('.thumb_prod').each(function(){
			$(this).hover(function(){
				$('.botao', this).show();
				$('.info_prod', this).slideUp('fast');
				$('.bx_vr_details', this).slideDown('fast');
			}, function(){
				$('.botao', this).hide();
				$('.info_prod', this).slideDown();
				$('.bx_vr_details', this).slideUp();
			});
		});


		/*MENU CATEGOTIA*/
		$('#down_btn').click(function()
		{
			vthis = $('#menu');
			vthis_cnt = $('#menu #menu_cnt');
			if(!vthis.attr('data-clicado'))
			{
				vthis.animate(
				{
					height : 244
				}, 'fast');

				vthis.attr('data-clicado', 'true');

				vthis_cnt.fadeIn();
			}
			else
			{
				vthis_cnt.css('display','none');

				vthis.removeAttr('data-clicado');

				vthis.animate(
				{
					height : 0
				}, 'fast');

			}
		});


		/*ABA SELO*/
		 var s = $('#slide_selo');
		 w = 128;
		// w = $(s.find('span')[0]).width();

		 s.css({width: w, overflow: 'hidden', whiteSpace: 'nowrap'});
		 
		 $('#slide_selo').hover(function(){
			 $(s).css('background-image','url(images/bg_selo02.png)');
			 $(".info_bx_selo span",this).show();

			  s.stop(true).animate({width: 528}, {duration: 'fast', queue: false, complete: function(){
				 //ao fechar

				 //s.hide();

			 }});
		 }, function(){
		 
			 s.stop().animate({width: w}, {duration: 'fast', queue: false, complete:function(){
				 $(s).css('background-image','url(images/bg_selo01.png)');
				 $(".info_bx_selo span",this).hide();
			 
			 }});
		 });
 
	});
</script>

</head>
<body>

	<!-- HEADER -->
	<div id="nav_bar">
		<div id="nav_bar_in">
			<!-- LOGO OPPA -->
			<a href="http://www.oppa.com.br"><img src="images/oppa.png" alt="Oppa" title="Oppa" class="logo_oppa_t f_lft"></a>
			<!-- fim:LOGO OPPA -->
			
			<!-- LOGADO / DESLOGADO -->
			<div class="bx001 f_lft">
				Bom dia, Fernanda Silvestre Silva! <a href="javascript:void(0)">Acessa com outro usuário</a>
			</div>
			<!-- fim:LOGADO / DESLOGADO -->

			<!-- BOTÃO CARRINHO DE COMPRA -->
			<div class="bx005 f_rgt">
				<a href="javascript:void(0)"><img src="images/btn_car.png" class="bxcar"></a>
			</div>
			<!-- fim:BOTÃO CARRINHO DE COMPRA -->

			<!-- ATENDIMENTO -->
			<div class="bx004 f_rgt">
				<img src="images/icon_atend.png" class="icon_0001">&nbsp; Atendimento 11 4063.6772
			</div>
			<!-- fim:ATENDIMENTO -->

			<!-- MEUS PEDIDOS -->
			<div class="bx003 f_rgt">
				<a href="javascript:void(0)">Meus Pedidos</a>
			</div>
			<!-- fim:MEUS PEDIDOS -->

			<!-- MEU CADASTRO -->
			<div class="bx002 f_rgt">
				<a href="javascript:void(0)">Meu Cadastro</a>
			</div>
			<!-- fim:MEU CADASTRO -->

			<div class="both"></div>
		</div>
	</div>
	<!-- fim:HEADER -->

<!-- MENU PRODUTOS -->
	<div id="menu">
		<div id="menu_cnt">
			<!-- COLUNA PRODS DISPONIVEIS -->
			<div class="cat_mn_01 f_lft">
				<div class="tlt_ct_mn">PRODUTOS DISPONÍVEIS</div>
				
				<div class="cat_mn_01_00_1 f_lft">
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkkkkkkkkkkkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkkkkkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
				</div>

				<div class="cat_mn_01_00_2 f_lft">
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
				</div>

				<div class="both"></div>
			</div>
			<!-- fim:COLUNA PRODS DISPONIVEIS -->

			<!-- COLUNA CATEGORIAS -->
			<div class="cat_mn_02 f_lft">
				<div class="tlt_ct_mn">CATEGORIAS</div>

				<div class="cat_mn_02_00_1 f_lft">
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkkkkkkkkkkkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkkkkkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
				</div>

				<div class="cat_mn_02_00_2 f_lft">
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
				</div>

				<div class="both"></div>
			</div>
			<!-- fim:COLUNA CATEGORIAS -->

			<!-- COLUNA LANÇAMENTO -->
			<div class="cat_mn_03 f_lft">
				<div class="tlt_ct_mn">LANÇAMENTOS</div>


				<div class="cat_mn_03_00_1 f_lft">
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
					<br />
					<a href="javascript:void(0)" class="lnk_ctmn">Kkkkkk</a>
				</div>
			</div>
			<!-- fim:COLUNA LANÇAMENTO -->


			<div class="both"></div>

		</div>
	</div>

	<!-- BOTAO MENU -->
	<div id="down">
		<div id="down_cnt">
			<img src="images/img_prdcat.png" id="down_btn">
		</div>
	</div>
	<!-- fim:BOTAO MENU -->
<!-- fim:MENU PRODUTOS -->

	<!-- SLIDER -->        
        <?php require_once('slider.php');?>

	<!-- fim:SLIDER -->


	<!-- CONTEÚDO -->
	<div id="content" class="recuo_content">
		<div id="content_cnt">

			<!--THUMB PRODUTO-->
			<div class="thumb_prod">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod001.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>

				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

				<!-- FAIXA POUCAS UNIDADES -->
				<img src="images/selo_bx_poucas_unidades.png" class="faixa_prod">
				<!-- fim:FAIXA POUCAS UNIDADES -->
				

			</div>
			<!--fim:THUMB PRODUTO-->

			<!--THUMB PRODUTO-->
			<div class="thumb_prod">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod002.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>
				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

			</div>
			<!--fim:THUMB PRODUTO-->

<!------------------ SEM MARGEM O 3º THUMB, TEM UMA CLASS QUE DEFINE MARGIN 0 (no_margin)  -------------------->
			<!--THUMB PRODUTO-->
			<div class="thumb_prod no_margin">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod003.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>
				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

			</div>
			<!--fim:THUMB PRODUTO-->

			<!--THUMB PRODUTO-->
			<div class="thumb_prod">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod004.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>
				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

			</div>
			<!--fim:THUMB PRODUTO-->

			<!--THUMB PRODUTO-->
			<div class="thumb_prod">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod005.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>
				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

			</div>
			<!--fim:THUMB PRODUTO-->


<!------------------ SEM MARGEM O 3º THUMB, TEM UMA CLASS QUE DEFINE MARGIN 0 (no_margin)  -------------------->
			<!--THUMB PRODUTO-->
			<div class="thumb_prod no_margin">
				<!-- IMAGE -->
				<div id="img0" class='imgprod'>
					<!-- BOTOES -->
					<div class="botao">
						<div class="left" onclick="javascript:change_bgcolor(this,'left');"></div>
						<div class="right" onclick="javascript:change_bgcolor(this,'right');"></div>
					</div>
					<!-- fim:BOTOES -->

					<!-- IMAGEM PRODUTO -->
					<img src="images/prod006.png" width="280px" height="223px"/>
					<!-- fim:IMAGEM PRODUTO -->
				</div>
				<!-- fim:IMAGE -->
				<div class="info_prod">
					
					<!-- NOME E CATEGORIA PRODUTO -->
					<div class="nom_prod f_lft">
						<span>DESK SPACE</span>
						<br />
						MESA
					</div>
					<!-- fim:NOME E CATEGORIA PRODUTO -->

					<!-- PREÇO PRODUTO -->
					<div class="prec_prod f_rgt">
						10x <span class="prec_form01">R$ <span>259</span>,00</span>
						<br />
						R$ 2599,00 à vista
					</div>
					<!-- fim:PREÇO PRODUTO -->
					<div class="both"></div>
				</div>

				<div class="bx_vr_details"><a href="javascript:void(0)">VER DETALHES</a></div>

			</div>
			<!--fim:THUMB PRODUTO-->


			<div class="both"></div>


			<!-- BOX LINK PRODUTOS DISPONÍVEIS -->
			<div class="prds_dpnvs">
				[&nbsp;  <a href="javascript:void(0)">VER MAIS PRODUTOS DISPONÍVEIS</a>&nbsp;  ]
			</div>
			<!-- fim:BOX LINK PRODUTOS DISPONÍVEIS -->

			<!-- BANNER01 -->
			<a href="javascript:void(0)">
				<img src="images/bx_bnnr_01.jpg" class="f_lft">
			</a>
			<!-- fim:BANNER01 -->

			<!-- BANNER02 -->
			<a href="javascript:void(0)">
				<img src="images/bx_bnnr_02.jpg" class="f_rgt">
			</a>
			<!-- fim:BANNER02 -->

			<div class="both"></div>
			
			<br />

			<div class="menu_02">
				<a href="javascript:void(0)">QUEM SOMOS</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<a href="javascript:void(0)">COMO TRABALHAMOS</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<a href="javascript:void(0)">BLOG</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<a href="javascript:void(0)">IMPRENSA</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<a href="javascript:void(0)">DESIGNERS</a>
			</div>

		</div>
	</div>
	<!-- fim:CONTEÚDO -->

	<!-- FOOTER 01 -->
	<div id="footer">
		<div id="footer_cnt">
			<div class="f_rgt"><a href="javascript:void(0)" class="terms">Termos e condições gerais do site</a></div>

			<span class="tlt_f01">OPPA, sua loja de móveis on-line!</span>
			<br /><br />
			<p class="descr_ftr01" style="">A <strong>Oppa</strong> é uma empresa
				especializada no comércio eletrônico de móveis e objetos decorativos
				para mobiliar sua casa. Com a <strong>Oppa</strong> é fácil, rápido e
				prático fazer suas compras on-line.&nbsp; Fazemos questão de garantir
				grande variedade de móveis para os ambientes da sua casa, vendidos a
				preços acessíveis e feitos com materiais de qualidade. Em nossa loja
				virtual, entre outros produtos, você poderá encontrar: sofás, cadeiras,
				poltronas, mesas, armários, estantes, escrivaninhas, camas de casal ou
				solteiro, móveis para a sala, móveis para escritório e móveis para
				dormitórios.&nbsp; Os projetos são únicos e feitos por jovens
				brasileiros e também por designers renomados. Acreditamos no smart
				design e em peças inovadoras. Obrigada por escolher a <strong>Oppa</strong>
				para decorar a sua casa!
			</p>
			<br />
			<p class="fnt12px">2011 &reg; Oppa Design Ltda.</p>
			<br /><br />

			<div class="col_f_001 f_lft">
					
				<span class="tlt_f_2">PAGAMENTO</span>
				<br /><br />
				<div>
					<img src="images/carts.jpg"> &nbsp; &nbsp; <img src="images/carts_2.jpg">
				</div>
			</div>

			<div class="col_f_002 f_lft">
					
				<span class="tlt_f_2">ATENDIMENTO AO CLIENTE</span>
				<br /><br />
				<div>
					<img src="images/icon_atend2.jpg"> SAC 3081.1924
					<br />
					<img src="images/icon_mail2.jpg"> suporte@oppa.com.br
				</div>
			</div>

			<div class="col_f_003 f_lft">
					
				<span class="tlt_f_2">100% DE SATISFAÇÃO</span>
				<br /><br />
				
				<div class="col1finok f_lft">
					<img src="images/set_verd.jpg"> <a href="javascript:void(0)">TROCAS E DEVOLUÇÕES</a>
					<br />
					<img src="images/set_verd.jpg"> <a href="javascript:void(0)">SEGURANÇA E PRIVACIDADE</a>
					<br />
					<img src="images/set_verd.jpg"> <a href="javascript:void(0)">GARANTIA DE PRODUÇÃO</a>
					<br />	
				</div>
				
				<div class="col1finok2 f_lft">
					<img src="images/set_verd.jpg"> <a href="javascript:void(0)">SERVIÇO DE ENTREGA</a>
					<br />
					<img src="images/set_verd.jpg"> <a href="javascript:void(0)">REGRAS DE VANTAGENS</a>
				</div>
				
				<div class="both"></div>
			</div>

			<div class="both"></div>
		</div>
	</div>
	<!-- fim:FOOTER 01 -->

	<!-- FOOTER 02 -->
	<div id="footer_2">
		<div id="footer_cnt_2">
			<div class="dv_rds_scs f_rgt">
				<a href="javascript:void(0)"><img src="images/icon_face.png"></a> &nbsp; &nbsp; 
				<a href="javascript:void(0)"><img src="images/icon_twitter.png"></a> &nbsp; &nbsp; 
				<a href="javascript:void(0)"><img src="images/icon_orkut.png"></a> &nbsp; &nbsp; 
				<a href="javascript:void(0)"><img src="images/icon_gplus.png"></a>
			</div>

			<form>
				Informe seu e-mail e faça seu cadastro: &nbsp; &nbsp; 
				<input type="text" name="email" class="mail_ftr" />
				<input type="image" name="send" src="images/btn_snd.png" class="btnsnd" />
			</form>
		</div>
	</div>
	<!-- fim:FOOTER 02 -->

</body>
</html>
