<header class="bg-topo">
    <div class="conteudo">
        <div class="navbar">
            <a href="" class="mobmenu"><!--menu mobile--><i class="fas fa-bars"></i></a>
            <a href="index.html" class="logo" alt="ERP completa"><img src="<?php echo URL_BASE ?>assets/img/logo.png" class="img-fluido"></a>	
            <div class="bg-temas">
                <input type="radio" class="cor-escuro" name="temas" id="escuro" ><label for="escuro"> </label>
                <input type="radio" class="cor-claro" name="temas" id="claro" checked ><label for="claro"> </label>
            </div>

            <ul class="menutopo">
                <li id="button"><img src="<?php echo URL_BASE ?>assets/img/foto.png" class="img"> <span>Manoel Jailton </span></li>					
                <ul id="effect" class="newClass">
                    <li><a href=""><i class="fas fa-sign-in-alt"></i> Sair</a></li>
                </ul>
            </ul>

        </div>
    </div>
</header>
<div>
    <style>
        @media (max-width:1707px){	
            .mobmenu {  display: none !important;}
    .conteudo {
        padding: 0 10px;
    }
    .menuprincipal{
        z-index:2;
        max-width:100%!important;
        display:none;
        bottom: auto;
    }	

    .conteudo-dividido {
        width:100%;
        padding-left: 0;
        padding-right: 0;
        min-height: auto;
        margin-right: 0;
        margin-left: 0;
    }
    
    .conteudo-dividido-cotacao {
        padding-left: 184px;
        padding-left: 0;
        padding-right: 0;
        min-height: auto;
        margin-right: 0;
        margin-left: 0;
    }
    
    
    .menutopo{display:none}
    .mobmenu{
        display: block !important;
        position: absolute !important;
        right: 36px !important;
        color: #fff !important;
        font-size: 2rem !important;
    }
    .area-usuario .thumb {
        float: none;
        margin: 0 auto;
    }
    .area-usuario .area-info {
        display: block;
        margin-left: 0;
        text-align: center;
    }
    .p-5 { padding: 2rem;}
    .bg-temas {  right: -10px;}
}
    </style>
</div>

<?php include "menu.php" ?>
                