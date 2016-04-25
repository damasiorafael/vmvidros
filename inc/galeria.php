<div class="corpo-galeria">
            <div class="container">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel" data-jcarousel="true" data-jcarouselautoscroll="true">
                        <ul>
                            <?php
                                $sqlBanners = "SELECT * FROM banners ORDER BY id ASC";
                                $resultBanners = $PDO->query($sqlBanners);
                                while($consultaBanners = $resultBanners->fetch(PDO::FETCH_OBJ)){
                            ?>
                                    <li>
                                        <img src="banners/<?php echo $consultaBanners->imagem; ?>">
                                        <div class="content-link-galeria">
                                            <a class="link-galeria"><?php echo utf8_encode($consultaBanners->titulo); ?></a>
                                        </div>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="container-setas">
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    </div>
                </div>
            </div>
            <div class="bg-vm-enfeite"></div>
        </div>