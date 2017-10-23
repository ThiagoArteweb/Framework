<div class="TopFaixa"></div>


<div class="DivFixa">
    <div class="Logomarca">
        <a href="<?php echo DIRIMAGES; ?>">
            <picture>
                <source media="(max-width: 480px)" srcset="<?php echo DIRIMAGES.'Logomarca-XS-01.png';?>">
                <source media="(min-width: 481px) and (max-width: 768px)" srcset="<?php echo DIRIMAGES.'Logomarca-S-01.png';?>">
                <source media="(min-width: 769px) and (max-width: 1199px)" srcset="<?php echo DIRIMAGES.'Logomarca-L-01.png';?>">
                <source media="(min-width: 1200px)" srcset="<?php echo DIRIMAGES.'Logomarca-L-01.png';?>">
                <img src="<?php echo DIRIMAGES.'Logomarca-XS-01.png';?>" alt="Logomarca Webdesign em Foco">
            </picture>
        </a>
    </div>



    <nav>
        <ul>
            <li><a href="<?php echo DIRPAGINAS; ?>" title="<?php echo $Fetch['Pagina01']; ?>"><?php echo $Fetch['Pagina01']; ?></a></li>
            <li class="NavLink">
                <a href="<?php echo DIRPAGINAS.$Fetch['Pagina02Slug']; ?>" title="<?php echo $Fetch['Pagina02']; ?>"><?php echo $Fetch['Pagina02']; ?></a>
                <ul class="NavSublink">
                    <li><a href="<?php echo DIRPAGINAS.$Fetch['Sublink01Pagina02Slug']; ?>" title="<?php echo $Fetch['Sublink01Pagina02']; ?>"><?php echo $Fetch['Sublink01Pagina02']; ?></a></li>
                    <li><a href="<?php echo DIRPAGINAS.$Fetch['Sublink02Pagina02Slug']; ?>" title="<?php echo $Fetch['Sublink02Pagina02']; ?>"><?php echo $Fetch['Sublink02Pagina02']; ?></a></li>
                </ul>
            </li>
            <li><a href="<?php echo DIRPAGINAS.$Fetch['Pagina04Slug']; ?>" title="<?php echo $Fetch['Pagina04']; ?>"><?php echo $Fetch['Pagina04']; ?></a></li>
            <li><a href="<?php echo DIRPAGINAS.$Fetch['Pagina05Slug']; ?>" title="<?php echo $Fetch['Pagina05']; ?>"><?php echo $Fetch['Pagina05']; ?></a></li>
        </ul>
    </nav>
</div>



<div class="BannerSuperior">
    <picture>
        <source media="(max-width: 480px)" srcset="<?php echo DIRIMAGES."BannerSuperior-XS-01.png"; ?>">
        <source media="(min-width: 481px) and (max-width: 768px)" srcset="<?php echo DIRIMAGES."BannerSuperior-S-01.png"; ?>">
        <source media="(min-width: 769px) and (max-width: 1199px)" srcset="<?php echo DIRIMAGES."BannerSuperior-L-01.png"; ?>">
        <source media="(min-width: 1200px)" srcset="<?php echo DIRIMAGES."BannerSuperior-L-01.png"; ?>">
        <img src="<?php echo DIRIMAGES."BannerSuperior-XS-01.png" ?>" alt="Banner Superior O que fazer no rio">
    </picture>
</div>