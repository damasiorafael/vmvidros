<section class="topo">
        <div class="topo-social-address">
            <div class="container outer-container">
                <div class="item-facebook-top pull-left">
                    <div class="social-info">
                        <div class="fb-like" 
                            data-href="https://www.facebook.com/profile.php?id=100008358439187" 
                            data-layout="standard" 
                            data-action="like" 
                            data-show-faces="false">
                        </div>
                    </div>
                </div>
                <div class="item-address-topo pull-right">
                    <div class="address">
                        <p>Rua Lázaro Zamenhof, 450 - Londrina - PR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="topo-logo-tel">
            <div class="container outer-container">
                <div class="container">
                    <h1 class="logo-topo">
                        <a href="index.php">
                            <span>Home</span>
                        </a>
                    </h1>
                </div>
                <?php
                    if($pag != "contato"){
                ?>
                        <div class="info-tel pull-right">
                            <span class="tel tel-1">43. <strong>3337-1818</strong></span>
                            <span class="tel tel-2">
                                <?php if ($pag == "empresa") { ?>
                                    <span class="icon-whatsapp"></span>
                                <?php } ?>
                                43. <strong>9987-1818</strong>
                            </span>
                            <span class="info-email">contato@vmvidros.com.br</span>
                        </div>
                <?php } ?>
            </div>
        </div>
        <div class="topo-menu">
            <div class="container">
                <ul class="nav nav-menu nav-menu-header">
                    <li <?php if($pag == "home"){ echo "class='active'";} ?>>
                        <a href="index.php" title="Principal">Principal</a>
                    </li>
                    <li <?php if($pag == "empresa"){ echo "class='active'";} ?>>
                        <a href="empresa.php" title="Empresa">Empresa</a>
                    </li>
                    <li <?php if($pag == "produtos"){ echo "class='active'";} ?>>
                        <a href="produtos.php" title="Produtos & Serviços">Produtos & Serviços</a>
                    </li>
                    <li <?php if($pag == "orcamento"){ echo "class='active'";} ?>>
                        <a href="orcamento.php" title="Orçamento">Orçamento</a>
                    </li>
                    <li <?php if($pag == "contato"){ echo "class='active'";} ?>>
                        <a href="contato.php" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>