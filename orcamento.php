<?php
    include("inc/config.php");
    $pag = "orcamento";
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
                        <h2>SOLICITE SEU <strong>ORÇAMENTO</strong></h2>
                        <h4>TEMOS O <strong>MAIOR PRAZER</strong> EM <strong>ATENDÊ-LO</strong></h4>
                        
                        <form name="orcamento" id="orcamento" class="form-envia" action="orcamento-envia.php" method="post">
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <input type="text" class="form-control" id="nome" name="nome" required Placeholder="NOME">
                                </div>
                            </div>
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <input type="tel" class="form-control" id="telefone" name="telefone" required data-mask="" data-inputmask="'mask': '(99) 9999[9]-9999'" Placeholder="TELEFONE">
                                </div>
                            </div>
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <input type="email" class="form-control" id="email" name="email" required Placeholder="E-MAIL">
                                </div>
                            </div>
                            <div class="control-group form-group group-menor">
                                <div class="controls">
                                    <select class="form-control" id="opcao" name="opcao">
                                        <option>ESCOLHA UMA OPÇÃO</option>
                                        <option value="Opção 1">OPÇÃO 1</option>
                                        <option value="Opção 2">OPÇÃO 2</option>
                                        <option value="Opção 3">OPÇÃO 3</option>
                                        <option value="Opção 4">OPÇÃO 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" id="mensagem" name="mensagem" required Placeholder="MENSAGEM"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-envia-form pull-right">ENVIAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="img-destaque img-destaque-orcamento"></div>
        
        <?php include("inc/mapa.php"); ?>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>