<section id="main-content">
    <section class="wrapper site-min-height">

        <h1 style="font-weight: 300;"><span class="fa   fa-pencil-square"></span> LISTA DE AUTORES</h1>
        <hr style="border: 1px solid #333;">
        <div class="divider"></div>
        <div class="divider"></div>

        </br>

        <?php
        if (isset($_GET['resp'])) {
            if ($_GET['resp'] == "sucesso") {
                ?>

                <div class="alert alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>SUCESSO!</strong> Autor cadastrado com sucesso!
                </div>
                <?php
            } else if ($_GET['resp'] == "erro") {
                ?>

                <div class="alert alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>ERRO!</strong> Ocorreu um erro ao cadastrar o Autor
                </div>
                <?php
            }
        }
        ?>

        <?php
        if (isset($_GET['respe'])) {

            if ($_GET['respe'] == "sucesso") {
                ?>

                <div class="alert alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>SUCESSO!</strong> Autor alterado com sucesso!
                </div>
                <?php
            } else if ($_GET['respe'] == "erro") {
                ?>

                <div class="alert alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>ERRO!</strong> Ocorreu um erro ao alterar o Autor
                </div>
                <?php
            }
        }
        ?>

        <?php
        if (isset($_GET['respt'])) {

            if ($_GET['respt'] == "sucesso") {
                ?>

                <div class="alert alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>SUCESSO!</strong> Autor excluido com sucesso!
                </div>
                <?php
            } else if ($_GET['respt'] == "erro") {
                ?>

                <div class="alert alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>ERRO!</strong> Ocorreu um erro ao excluir o Autor
                </div>
                <?php
            }
        }
        ?>
        <div class="row">
            <div class="col-lg-12">

                <section class="panel">

                    <header class="panel-heading">
                        <a href="autor.php?tipo=insert"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                                </span> AUTOR</button>
                        </a>
                    </header>

                    <div class="panel-body">
                        <div class="adv-table">
                            
                            <table style="font-size: 12px;"  class="display table table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>NOME DO AUTOR</th>
                                        <th style="text-align: center;">POSTADO POR</th>
                                        <th style="text-align: center;">EDITAR</th>
                                        <th style="text-align: center;">EXCLUIR</th>


                                    </tr>
                                </thead>


                                <tbody>

                                   

                                        <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                         <tr class="gradeA">

                                            <td>dsa</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><a href="autor.php?tipo=edit&id="><img src="img/editar.png" alt="" /></a></td>
                                            <td style='text-align: center;'><a data-toggle="modal" href="#myModal2"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        


                                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Excluir Autor</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Deseja realmente excluir este autor?
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                                    <a href="php/exclui_autor.php?id="><button class="btn btn-warning" type="button"> Confirmar</button></a>
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
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#example').dataTable({
            "aaSorting": [[4, "desc"]]
        });
    });
</script>