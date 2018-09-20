<script>
    var intervalo="";	
    $(document).ready(function()
    {
        $("#button_l").hide();
        $("#button_r").click(function()
        {
            //timer();
            change1();
        });
        $("#button_l").click(function()
        {
            //timer();
            retornar();
        });
    });
    function retornar()
    {
        $('.container').css('zIndex',0);
        if($('.container:visible:first').prev().attr('id')==undefined){
            //$('.container:last').css('zIndex',1).css('opacity',1).show();
            $('.container:last').css('zIndex',1).css('opacity',1).show();
            $('.container:visible:first').css('zIndex',2);
        }else{
            $('.container:visible:first').prev().css('zIndex',1).css('opacity',1).show();
            $('.container:visible:first').css('zIndex',2);
            zi=$('.container').length-1;
            $('.container').each(function()
            {
                console.log(zi);
                $(this).css('zIndex',zi);
                zi--;
            });
        }
        setinhas();
    }
    function timer()
    {
        clearInterval(intervalo);
        intervalo = setInterval('change1()',3000);	
    }
    function setinhas()
    {
        if($(".container:first").is(':visible') && $(".container:last").prev().is(':visible') && $(".container:last").is(':visible'))
        {
            $("#button_l").hide();
            $("#button_r").show();
        }
        if(!$(".container:first").is(':visible') && $(".container:last").prev().is(':visible') && $(".container:last").is(':visible'))
        {
            $("#button_l").show();
            $("#button_r").show();
        }
 
        if(!$(".container:first").is(':visible') && !$(".container:last").prev().is(':visible') && $(".container:last").is(':visible'))
        {
            $("#button_l").show();
            $("#button_r").hide();
        }
    }
    function change1()
    {
        if($('.container:visible').length==1)
        {		
            $('.container').css('zIndex',0);
            $('.container:visible:first').css('zIndex',2);
            $('.container:first').css('zIndex',1);
            $('.container:first').css('opacity',1);
            $('.container:first').show();
            $('.container:last').clearQueue();
            $('.container:last').animate({
                opacity: 0.25,
                backgrounPosition: '0 900px',
                height: 'toggle'
            }, 500, 
            function() 
            {
                // Animation complete.
                $('.container').show();
                $('.container').fadeTo(1,1);
				
                zi=$('.container').length-1;
                $('.container').each(function()
                {
                    console.log(zi);
                    $(this).css('zIndex',zi);
                    zi--;
                });
                setinhas();
            });  
        }else
        {
            $('.container:visible:first').clearQueue();
            $('.container:visible:first').animate({
                opacity: 0.25,
                backgrounPosition: '0 900px',
                height: 'toggle'
            }, 500, function() {	
                setinhas();			
            });
        }
    }


    timer();

	
</script>

<div id="soppa">

    <!-- SELO -->
    <div id="slide_selo" style='height:68px; padding-top:10px; background: url(images/bg_selo01.png) no-repeat;position: absolute; left: 0pt; z-index: 15; top: 300px;'>
        <div class="info_bx_selo">
            <span style='display:none; font-family:Arial, Sans-Serif; font-size:12px;'>
                <img src="images/star.png" style="float:left; margin-top:9px; margin-left:6px; margin-right:-20px;">

                Cadastre seu e-mail e ganhe <font color="#ff443a">R$<font style="font-size:20px;">10</font>,00</font> em crédito para usar na sua primeira compra<br />
                
                <br />
                
                <form>
                    <input type="text" name="email" value="informe seu e-mail aqui" style="width:280px; font-family:'Georgia'; font-size:12px; border:0; border-bottom:1px solid #CCC;" />
                    &nbsp;
                    <input type="image" src="images/btn_envr.png" />
                </form>
            </span>
        </div>
    </div>
    <!-- fim:SELO -->


    <div id="button_l"></div>
    <div style="overflow:hidden;height:495px;background-color:#FFFFF;" onclick="javascript:change1();">
        <div class="container" style='background:url("img_sldr_01.jpg") no-repeat top center;z-index:2'>AUE</div>
        <div class="container" style='background:url("img_sldr_02.jpg") no-repeat top center;z-index:1'>ENCONTRAR</div>
        <div class="container" style='background:url("img_sldr_03.jpg") no-repeat top center;z-index:0'>VOCE </div>
    </div>
    <div id="button_r"></div>




</div>
