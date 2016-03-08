<section id="main-content">
    <section class="wrapper">


        <div class="col-lg-6">

            <section class="panel">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> ATUALIZAÇÃO</strong></div>
                <div class="panel-body">


                    <form role="form" action="php/edita_biografia.php" method="POST" enctype='multipart/form-data'>



                        <div class="form-group">
                            <label for="exampleInputEmail1">Texto</label>
                            <textarea name="texto" id="" class="wysihtml5 form-control" rows="7">DASDADA</textarea>
                        </div>

                        <div class="col-sm-12">
                            <hr/>
                        </div>

                        <div class="row ">
                            <div class="form-group">
                                <label class="col-sm-3 col-sm-3">Usar imagens com tam. padrão 800x430px</label>
                            </div>


                            <div class="form-group last">

                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="imagens/biografia/" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                <input type="file"  name="img" class="default" />
                                            </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <hr/>
                            </div>

                        </div>


                        <input type="submit" class="btn btn-primary" value="ATUALIZAR"></input>

                    </form>

                </div>
            </section>



        </div>

    </section>
</section>