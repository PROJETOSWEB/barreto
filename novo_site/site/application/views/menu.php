<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index.php" class="c-logo">
                        <img src="<?php echo base_url(); ?>template/assets/base/img/layout/logos/logo-barreto-nav.png" alt="BARRETO EMPREENDIMENTOS" class="c-desktop-logo">
                        <img src="<?php echo base_url(); ?>template/assets/base/img/layout/logos/logo-barreto-nav.png"alt="BARRETO EMPREENDIMENTOS" class="c-desktop-logo-inverse">
                        <img src="<?php echo base_url(); ?>template/assets/base/img/layout/logos/logo-barreto-mobile.png" alt="BARRETO EMPREENDIMENTOS" class="c-mobile-logo">
                    </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>

                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="procurar..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <!-- BEGIN: MEGA MENU -->
                    <ul class="nav navbar-nav c-theme-nav">


                        <li class="c-menu-type-classic">
                            <a href="index.php" class="c-link dropdown-toggle">HOME</a>
                        </li>

                        <li class="c-menu-type-classic">
                            <a href="<?php echo base_url(); ?>pages/barreto" class="c-link dropdown-toggle">BARRETO</a>
                        </li>

                        <!--
                        <li class="c-menu-type-classic">
                                <a href="#" class="c-link dropdown-toggle">LANÇAMENTOS</a>
                        </li>
                        -->
                        <li class="c-menu-type-classic c-active  ">
                            <a href="preco_custo.php" class="c-link dropdown-toggle c-font-bold">• PREÇO DE CUSTO •</a>
                            <!--<ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                    <li>
                                            <a href="index.html">O QUE É</a>
                                    </li>
                                    <li>
                                            <a href="index.html">VANTAGENS</a>
                                    </li>
                                    <li>
                                            <a href="index.html">REFERÊNCIAS</a>
                                    </li>
                                    <li>
                                            <a href="index.html">REGULAMENTAÇÃO</a>
                                    </li>
                                    <li>
                                            <a href="index.html">COMO PARTICIPAR</a>
                                    </li>
                            </ul>-->
                        </li>
                        <li class="c-menu-type-classic ">
                            <a href="preco_custo.php" class="c-link dropdown-toggle">EMPREENDIMENTOS</a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li>
                                    <a href="index.html">LUMIER</a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-menu-type-classic">
                            <a href="<?php echo base_url(); ?>pages/contato" class="c-link dropdown-toggle">CONTATO</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-link"><i class="icon-user"></i></a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a href="javascript:;" data-toggle="modal" data-target="#login-adm" class="c-link" style="margin-left: -15px;"><i class="fa fa-gear fa-spin"></i></a>
                        </li>
                    </ul>
                    <!-- END MEGA MENU -->
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
        </div>
    </div>
</header>
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Lembrete de senha</h3>
                <p>
                    preencha corretamente com o email que você cadastrou em nosso sistema
                </p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-btn-blue btn c-btn-uppercase c-btn-sbold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Lembrar</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">voltar ao Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account c-font-bold c-font-blue" style="margin-right: 15px;">QUER SER UM INVESTIDOR?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-slim ">CLIQUE!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">SEJA UM INVESTIDOR AGORA!</h3>
                <p>
                    Por favor preencha os campos abaixo e envie para nós. O quanto antes retornaremos o seu contato. Muito obrigado.
                </p>
                <form name="envia_email" method="POST" action="php/email_investidor.php">

                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Nome completo</label>
                        <input type="text" name="nameComplete" class="form-control input-lg c-square" id="signup-fullname" placeholder="Nome completo">
                    </div>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" name="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Telefone</label>
                        <input type="text" name="telephone" class="form-control input-lg c-square" id="signup-fullname" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Enviar</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">voltar ao Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->

<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-theme-font c-font-bold">PARABÉNS!</h3>
                <p>
                    Caro investidor, aqui você tem uma área de acesso restrito para acompanhar o andamento do seu investimento: cronograma de execução das obras, informes, planilhas de custos e área exclusiva para contato direto e constante conosco.
                </p>
                <form>
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Senha</label>
                        <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Senha">
                    </div>

                    <div class="form-group">
                        <a href="cliente_investidor.php" type="submit" class="btn  btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-blue ">Entrar</button>
                            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot c-font-sbold">esqueceu a senha?</a>
                    </div>

                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account c-font-bold c-font-blue" style="margin-right: 15px;">QUER SER UM INVESTIDOR?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-slim ">CLIQUE!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->

<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-adm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-theme-font c-font-bold">ÁREA ADMINISTRATIVA</h3>
                <div id="resposta"></div>
                <form name="login" method="POST" action="#">
                    <div class="form-group">
                        <label for="login-email" class="hide">Login</label>
                        <input type="email" name="email" id="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Senha</label>
                        <input type="password" name="password" id="password" class="form-control input-lg c-square" id="login-password" placeholder="Senha">
                    </div>

                    <div class="form-group">
                        <input type="button" value="ENTRAR" id="enviar" class="btn  btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-blue" />
                        <!--<a href="adm_list_empreendimentos.php" type="button" id="enviar" class="btn  btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-blue ">Entrar</button>-->
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot c-font-sbold">esqueceu a senha?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->
<script>
    $(document).ready(function () {
        $("#enviar").click(function () {
            var email = $("#email");
            var EmailPost = email.val();
            var password = $("#password");
            var passwordPost = password.val();
            $.post("php/login.php", {email: EmailPost, password: passwordPost},
            function (data) {
                $("#resposta").html(data);
            }
            , "html");
        });
    });

</script>

