<?php
    include("inc/config.php");
    $pag = "contato";
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="<?php echo $pag; ?>">

    <?php include("inc/header.php"); ?>

    <section class="body">
        <div class="corpo-conteudo">
            <div class="container">
                <div class="content content-home">
                    <div class="content-empresa pag-formularios">
                        <h2>FALE COM A <strong>GENTE</strong></h2>
                        <h4>TEMOS O <strong>MAIOR PRAZER</strong> EM <strong>ATENDÊ-LO</strong></h4>
                        
                        <form name="orcamento" id="orcamento" class="form-envia" action="contato-envia.php" method="post">
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <input type="text" class="form-control" id="nome" name="nome" required Placeholder="NOME">
                                </div>
                            </div>
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <input type="email" class="form-control" id="email" name="email" required Placeholder="E-MAIL">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" id="mensagem" name="mensagem" required Placeholder="MENSAGEM"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-envia-form pull-right">ENVIAR</button>
                        </form>
                        
                        <div class="itens-contato">
                            <div class="item-contato-mapa">
                                <?php include("inc/mapa.php"); ?>
                            </div>
                            <div class="item-contato-address">
                                <div class="item-address-topo pull-left">
                                    <div class="address">
                                        <p>Rua Lázaro Zamenhof, 450 - Londrina - PR</p>
                                    </div>
                                </div>
                                <div class="info-tel pull-left">
                                    <span class="tel tel-1">43. <strong>3337-1818</strong></span>
                                    <span class="tel tel-2">43. <strong>9987-1818</strong></span>
                                    <span class="info-email">contato@vmvidros.com.br</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="img-destaque img-destaque-contato"></div>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>