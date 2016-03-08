<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li style="text-align: center;">
                <span>MENU ADMINISTRATIVO</span>

            </li>
            <li style="text-align: center;">
                <span>• • • • • • • • • • • • • • • • • • •</span>

            </li>
            <!--<li>
                <a href="dashboard.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>-->

            <li>
                <a  href="<?php echo base_url(); ?>banner/banner">
                    <i class="fa fa-pencil-square"></i>
                    <span>BANNER</span>
                </a>
            </li>

            <li>
                <a  href="<?php echo base_url(); ?>igreja/">
                    <i class="fa fa-book "></i>
                    <span>A IGREJA</span>
                </a>
            </li>

            <li>
                <a  href="<?php echo base_url(); ?>eventos/evento">
                    <i class="fa fa-book "></i>
                    <span>EVENTOS</span>
                </a>
            </li>

            <li>
                <a  href="<?php echo base_url(); ?>redes/rede">
                    <i class="fa fa-book "></i>
                    <span>REDES</span>
                </a>
            </li>

            <li>
                <a  href="<?php echo base_url(); ?>galeria/">
                    <i class="fa fa-book "></i>
                    <span>GALERIA</span>
                </a>
            </li>

            <li>
                <a  href="list_livros.php">
                    <i class="fa fa-book "></i>
                    <span>INFORMAÇÕES ADICIONAIS</span>
                </a>
            </li>

            <li>
                <a  href="list_usuario.php">
                    <i class="fa fa-group"></i>
                    <span>Usuários</span>
                </a>
            </li>
            <hr/>

            <li>

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">CONTATO DIRETO SKYadmin</h4>
                            </div>
                            <div class="modal-body">

                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NOME</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Seu nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">EMAIL</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="seu email">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="exampleInputEmail1">ASSUNTO</label>
                                        <select name="tipo_arquivo" class="form-control m-bot15">
                                            <option>MENSAGEM</option>
                                            <option>PROBLEMAS TÉCNICOS</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MENSAGEM</label>
                                        <textarea name="texto" id="" class="form-control" rows="7"></textarea>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <hr/>
                                        <label class="col-sm-12">se precisar, envie o print do seu problema</label>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="file" class="default" />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-default">enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- sidebar menu end-->

    </div>
</aside>