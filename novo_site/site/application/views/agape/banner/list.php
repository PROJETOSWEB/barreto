<section id="main-content">
    <section class="wrapper site-min-height">

        <h1 style="font-weight: 300;"><span class="fa   fa-pencil-square"></span> LISTA DE BANNER</h1>
        <hr style="border: 1px solid #333;">
        <div class="divider"></div>
        <div class="divider"></div>



        <div class="row">
            <div class="col-lg-12">

                <section class="panel">

                    <header class="panel-heading">
                        <a href="<?php echo base_url(); ?>banner/add"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                                </span> BANNER</button>
                        </a>
                    </header>

                    <div class="panel-body">
                        <div class="adv-table">

                            <table style="font-size: 12px;"  class="display table table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>foto do banner aqui</th>
                                        <th>NOME </th>
                                        <th style="text-align: center;">POSTADO POR</th>
                                        <th style="text-align: center;">PUBLICADO</th>
                                        <th style="text-align: center;">AÇÕES</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    foreach ($dadosBanner as $row):

                                        $cont2 = 1;
                                        $cont = 1;
                                        ?>

                                        <tr class="gradeA">
                                            <td><?php echo $row['banner_id']; ?></td>
                                            <td><?php echo $row['nome']; ?></td>
                                            <td><?php echo $row['usuario'] ?></td>
                                            <td style='text-align: center;'>
                                                <?php
                                                if ($row['publicar'] == 1) {
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>template/img/sim.png" alt=""/>

                                                    <?php
                                                } else if ($row['publicar'] == 2) {
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>template/img/nao.png" alt=""/>
                                                    <?php
                                                }
                                                ?>
                                            </td>

                                            <td style='text-align: center;'>
                                                <a href="<?php echo base_url(); ?>banner/update/<?php echo $row['banner_id']; ?>"><img src="<?php echo base_url(); ?>template/img/editar.png" alt=""/></a>
                                                <a data-toggle="modal" href="#myModal2<?php echo $cont++; ?>"><img src="<?php echo base_url(); ?>template/img/excluir.png" alt="" /></a>
                                            </td>

                                        </tr>

                                    <div class="modal fade" id="myModal2<?php echo $cont2++; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Excluir Banner</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Deseja realmente excluir este banner?
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                                    <a href="<?php echo base_url(); ?>/banner/banner/delete/<?php echo $row['banner_id']; ?>"><button class="btn btn-warning" type="button"> Confirmar</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                endforeach;
                                ?>

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