<section id="main-content">
    <section class="wrapper">

        <div class="col-lg-8">

            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE REDE</strong></div>
                <div class="panel-body">

                    <?php foreach ($updateRede as $row): ?>

                        <?php echo form_open('redes/rede/update/'.$row['rede_id'], array('enctype' => 'multipart/form-data')); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">NOME DA REDE</label>
                            <input name="nome" value="<?php echo $row['nome']; ?>" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">RESPONSÁVEL PELA REDE</label>
                            <input name="responsavel" value="<?php echo $row['responsavel']; ?>" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                        </div>


                        </br>

                        <hr/>

                        <div class="row ">
                            <div class="form-group col-sm-12">
                                <label class="col-sm-3 col-sm-3">Usar imagens com tam. 460x260px ou maiores</label>


                                <div class="form-group last">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                    <input type="file" name="img" class="default" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">

                                <hr/>


                                <label style="margin-right: 20px;" class="col-sm-3 col-sm-3">PUBLICAR?</label>
                                <div class="switch switch-square"
                                     data-off-label="<i class='fa fa-times'></i>"
                                     data-on-label="<i class=' fa fa-check'></i>">

                                    <?php if ($row['publicar'] == 1) {
                                        ?>
                                        <input name="publicar" value="1" type="checkbox"  checked />
                                    <?php } else if ($row['publicar'] == 2) {
                                        ?>
                                        <input name="publicar" value="2" type="checkbox"/>
                                        <?php
                                    }
                                    ?>

                                </div>

                                <hr/>

                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="SALVAR"></input>
                        <?php echo form_close(); ?>
                    <?php endforeach; ?>

                </div>
            </section>
        </div>

    </section>
</section>