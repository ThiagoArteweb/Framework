<div class="Logomarca">
    <a href="<?php echo DIRPAGINAS; ?>">
        <picture>
            <source media="(max-width: 480px)" srcset="<?php echo DIRIMAGES.'Logomarca-home-vidros-S-01.png';?>">
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="<?php echo DIRIMAGES.'Logomarca-home-vidros-S-01.png';?>">
            <source media="(min-width: 769px) and (max-width: 1199px)" srcset="<?php echo DIRIMAGES.'Logomarca-home-vidros-M-01.png';?>">
            <source media="(min-width: 1200px)" srcset="<?php echo DIRIMAGES.'Logomarca-home-vidros-L-01.png';?>">
            <img src="<?php echo DIRIMAGES.'Logomarca-home-vidros-S-01.png';?>" alt="Logomarca Home Vidros" title="Logomarca Home Vidros">
        </picture>
    </a>
</div>



<div class="DivFixa">
    <nav>
        <span class="NavDesktop">
            <div><a href="#PaginaHome" title="Página inicial Home Vidros em BH">HOME</a></div>
            <div><a href="#PaginaEmpresa" title="Sobre a Home Vidros - Vidraçaria em BH">EMPRESA</a></div>
            <div><a href="#PaginaShowroom" title="Showroom ofertados pela Home Vidros">SHOWROOM</a></div>
            <div><a href="#PaginaGaleria" title="Galeria da Home Vidros">GALERIA</a></div>
            <div><a href="#PaginaContato" title="Contato de vidros em Beagá">CONTATO</a></div>
        </span>

        <span class="NavMobile">
            <div>
                <select name="LinksPaginas" id="LinksPaginas">
                    <option value="">Navegar</option>
                    <option value="PaginaEmpresa">Sobre a Empresa</option>
                    <option value="PaginaShowroom">Showroom</option>
                    <option value="PaginaGaleria">Galeria</option>
                    <option value="PaginaContato">Contato</option>
                </select>
            </div>
        </span>

        <span class="NavGeral">
            <div><a href="https://www.instagram.com/homevidrosbh/" target="_blank"><img src="<?php echo DIRIMAGES.'PB-Instagram.png'; ?>" alt="Instagram Home Vidros BH" title="Instagram Home Vidros BH"></a> </div>
        </span>
    </nav>
</div>
