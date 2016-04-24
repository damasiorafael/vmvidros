<?php
    include("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="home">

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
                    <span class="tel tel-2">43. <strong>9987-1818</strong></span>
                    <span class="info-email">contato@vmvidros.com.br</span>
                </div>
            </div>
        </div>
        <div class="topo-menu">
            <div class="container">
                <ul class="nav nav-menu nav-menu-header">
                    <li class="active">
                        <a href="" title="Principal">Principal</a>
                    </li>
                    <li>
                        <a href="" title="Empresa">Empresa</a>
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

    <section class="body">
        <div class="corpo-galeria">
            <div class="container">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel" data-jcarousel="true" data-jcarouselautoscroll="true">
                        <ul>
                            <li>
                                <img src="images/slider/slide-1.jpg">
                                <div class="content-link-galeria">
                                    <a href="" class="link-galeria">Sacadas</a>
                                </div>
                            </li>
                            <li>
                                <img src="images/slider/slide-1.jpg">
                                <div class="content-link-galeria">
                                    <a href="" class="link-galeria">Portas</a>
                                </div>
                            </li>
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
        
        <div class="corpo-conteudo">
            <div class="container">
                <div class="content content-home">
                    <div class="content-empresa">
                        <h2>A <strong>Empresa</strong></h2>
                        <p>
                            A empresa oferece serviços de projetos e instalação de vidros temperados, fechamento de sacadas, coberturas, box e toda linha de espelhos e tampos para decoração de interiores e exteriores.
                            <br />
                            <br />
                            Contamos com profissionais habilitados para prestar os melhores serviços, atendendo as especificações de arquitetos, engenheiros, construtoras, para garantir qualidade, conforto e segurança.
                        </p>
                    </div>
                    <div class="content-produtos pull-right">
                        <h2>Produtos <strong>& Serviços</strong></h2>
                        <ul class="lista-produtos-home">
                            <li>
                                <a href="" title="Pisos elevados">Pisos elevados</a>
                            </li>
                            <li>
                                <a href="" title="Sacadas">Sacadas</a>
                            </li>
                            <li>
                                <a href="" title="Coberturas">Coberturas</a>
                            </li>
                            <li>
                                <a href="" title="Box e espelhos">Box e espelhos</a>
                            </li>
                            <li>
                                <a href="" title="Portas e Janelas">Portas e Janelas</a>
                            </li>
                            <li>
                                <a href="" title="Guarda-corpo e corrimãos">Guarda-corpo e corrimãos</a>
                            </li>
                            <li>
                                <a href="" title="Manutenção geral">Manutenção geral</a>
                            </li>
                        </ul>
                        <div class="botao-servicos pull-right">
                            <a href="">Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="content-parceiros">
                        <h2>Os Melhores <strong>Parceiros</strong></h2>
                        <ul class="lista-parceiros-home">
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-1.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-2.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-3.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-4.jpg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="corpo-mapa">
            <!-- Google Map -->
            <div id="map_canvas"></div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="footer-contato">
                <h3>Fale <strong>Conosco</strong></h3>
                <span class="tel tel-1">43. <strong>3337-1818</strong></span>
                <span class="tel tel-2">43. <strong>9987-1818</strong></span>
            </div>
            
            <div class="footer-atendimento">
                <h3>Atendimento</h3>
                <p>
                    Segunda a Sexta: 08h00 as 18:00
                    FECHADO aos Sábados e Domingos
                </p>
            </div>
            
            <div class="footer-orcamento pull-right">
                <h3>Solicite seu <strong>Orçamento</strong></h3>
                <form class="orcamento-footer" method="post" action="orcamento-envia.php">
                    <input type="text" name="nome" placeholder="NOME" />
                    <input type="email" name="email" placeholder="E-MAIL" />
                    <textarea name="mensagem" placeholder="MENSAGEM"></textarea>
                    <button type="submit" class="btn btn-default btn-envia-form btn-envia-orcamento-home">Enviar</submit>
                </form>
            </div>
            
            <div class="footer-copyright">
                <p>© Copyright 2016 Vidraçaria Millenium - Todos os direitos reservados</p>
                
                <div class="footer-intrepido">
                    <a href="http://intrepido53.com.br" target="_blank">Intrépido 53</a>
                </div>
            </div>
        </div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>