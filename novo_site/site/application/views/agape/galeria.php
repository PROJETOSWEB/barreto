<section id="main-content">
    <section class="wrapper site-min-height">

        <h1 style="font-weight: 300;"><span class="fa fa-video-camera"></span> ALBUNS DE FOTO</h1>
        <hr style="border: 1px solid #333;">
        <div class="divider"></div>
        <div class="divider"></div>

        </br>


        <div class="row">
            <div class="col-lg-12">

                <section class="panel">

                    <header class="panel-heading">
                        <a href="#maisAlbum" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> CRIAR ÁLBUM
                        </a>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="maisAlbum" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">CRIANDO ÁLBUM DE FOTOS</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form col-sm-6" method="POST" action="php/salva_nomealbum.php">


                                            <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Nome do novo álbum</label>
                                                <input name="nome" type="text" class="form-control" placeholder="nome do álbum">
                                            </div>

                                            <button type="submit" class="btn btn-default">CRIAR</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>			
                    </header>

                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="display table table-bordered table-striped" id="example" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;">CAPA DO ÁLBUM</th>
                                        <th style="text-align: left;">NOME DO ÁLBUM</th>
                                        <th style="text-align: center;">Nº FOTOS</th>
                                        <th style="text-align: center;">EDITAR</th>
                                        <th style="text-align: center;">EXCLUIR</th>
                                        <th style="text-align: center;">DATA</th>
                                        <th style="text-align: center;">POSTADO POR</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    <tr class="gradeA" style="text-align: center; vertical-align: center;">
                                        <td style="text-align: left;">
                                            <a class="fancybox" rel="id_foto" href="imagens/fotos/" title=dasdasd">
                                                <img src="imagens/fotos" height="100" alt="" />
                                            </a>
                                        </td>
                                        <td style="text-align: left;"><a href="list_fotos_album.php?tipo=edit&id=">dasds</a></td>
                                        <td>


                                        </td>
                                        <td><a href="list_fotos_album.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                        <td><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        <td>dddd</td>
                                        <td>dadasdasd</td>

                                    </tr>


                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Excluir Album</h4>
                                            </div>
                                            <div class="modal-body">
                                                Todas as fotos deste album serão excluidas, deseja realmente fazer isso?
                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                                <a href="php/exclui_album.php?id="><button class="btn btn-warning" type="button"> Confirmar</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>