<section class="topo">
        <div class="topo-social-address">
            <div class="container outer-container">
                <div class="item-facebook-top pull-left">
                    <div class="social-info">
                        <div
                                class="fb-like"
                                data-href="https://www.facebook.com/Vidra%C3%A7aria-Millenium-331204567031522/"
                                data-colorscheme="light"
                                data-show-faces="false"
                                data-header="false"
                                data-stream="false"
                                data-show-border="false"
                                data-width="83"
                                data-height="21"
                                data-layout="standard"
                                data-css="/css/style.css"
                        ></div>
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
                    <li>
                        <a href="" title="Produtos & Serviços">Produtos & Serviços</a>
                    </li>
                    <li>
                        <a href="" title="Orçamento">Orçamento</a>
                    </li>
                    <li>
                        <a href="" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>