<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato | MasterJobs - Gama Experience</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mako">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-blog.css">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="description" content="O blog masterjobs e Gama Academy ajudam centenas de profissionais transformarem seus talentos em oportunidades reais de trabalho em startups de todo o Brasil. Deseja se tornar um profissional do futuro? Nós queremos ajudar você!" />

    <meta name="robots" content="index,follow" />

    <!-- Favicon -->
    <link rel="icon" href="assets/img/icon-green.ico">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102671259-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <header>
        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="/blog"><img src="assets/img/logo-tech-white.png"></a>
                </div>
                <div class="hidden-md hidden-lg">
                    <button type="button" onclick="openNav()" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                </div>
                <div class="links hidden-xs hidden-sm">
                    <ul>
                        <li><a id="blog" href="/blog">BLOG</a></li>
                        <li>
                            <a href="#">CATEGORIAS</a>
                            <ul>
                                <li><a href="#">Programação</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Vendas</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </li>
                        <li><a id="contato" href="#contato">CONTATO</a></li>
                        <li style="padding-left: 140px;">
                            <button class="btn-green btn-know-gama" onclick="window.location = '/'">CONHEÇA O GAMA EXPERIENCE</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row" style="margin: 80px auto 0 auto;max-width: 950px;width: 100%;">
            <div class="col-xs-12 col-sm-8 col-lg-8">
                <div class="title">
                    GAMA EXPERIENCE
                </div>
                <div class="sub-title-next-editions">
                    PRÓXIMOS PROGRAMAS
                </div>
                <div class="sub-title-cities">
                    SÃO PAULO | RIO DE JANEIRO | BELO HORIZONTE | FLORIANÓPOLIS
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4 vcenter">
                <button class="btn" onclick="$('#myModal').modal('show')" style="margin-top: 30px; white-space: nowrap;">PRÉ-INSCRIÇÃO GRATUITA</button>
            </div>
        </div>
        <br/><br/>
    </header>
    <br/>
    <!-- data-spy="scroll" data-target=".box-work-dream" data-offset="0" -->
    <div class="row" style="margin: 0 auto; max-width: 1000px; width: 100%;padding: 20px 0 30px 0;">
        <div class="col-xs-12 col-sm-8 col-lg-8">
            <div class="col-xs-12 mj-blog">
                <div class="mj-blog-title">
                    <div class="mj-blog-title-description">
                        CONTATO
                    </div>
                    <div class="mj-blog-title-sub-description">
                    </div>
                </div>

                <div class="mj-blog-sub-content">
                    <div class="row" id="form-contato">
                        <div class="col-xm-12">
                            <input type="text">
                        </div>
                        <div class="col-xm-12">
                            <input type="text">
                        </div>
                        <div class="col-xm-12">
                            <input type="text">
                        </div>
                        <div class="col-xm-12">
                            <textarea></textarea>
                        </div>
                        <div class="col-xm-12">
                            <button class="btn-flat">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 hidden-xs">
            <!-- style="width:333.3333px;top: 80px;" data-spy="affix" data-offset-top="0" -->
            <div id="box-dream" style="position:fixed;width:333.3333px; z-index: 10;">
                <div class="box-work-dream">
                    <div class="title">
                        QUER O EMPREGO DOS SONHOS EM UMA DAS MAIORES STARTUPS DO PAÍS?
                    </div>
                    <span style="color: #fff;font-weight: bold;font-size: 15px;">CONHEÇA A</span><br/>
                    <span style="color: #06fa9f;font-weight: bold;font-size: 28px;">GAMA EXPERIENCE</span>
                </div>
                <div class="box-next-editions">
                    <div class="title">PRÓXIMOS PROGRAMAS:</div>
                    <ul>
                        <li><b>SÃO PAULO</b> - Setembro</li>
                        <li><b>RIO DE JANEIRO</b> - Novembro</li>
                        <li><b>BELO HORIZONTE</b> - Outubro</li>
                        <li><b>FLORIANÓPOLIS</b> - Setembro</li>
                    </ul>
                    <button class="btn" onclick="$('#myModal').modal('show')">PRÉ-INSCRIÇÃO GRATUITA</button>
                </div>
            </div>
        </div>
    </div>

    <footer style="z-index: 20; position: absolute;">
        <div class="newsletter">
            <div class="container">
                <div class="title">
                    NÃO PERCA TEMPO E FAÇA SUA PRÉ-INSCRIÇÃO
                </div>
                <div class="sub-title">
                    Cadastre-se para receber os nosso conteúdos por email e seja um membro da Comunidade Gama Experience!
                </div>
                <div class="form row">
                    {!! Form::open(['route'=>'register', 'method'=>'post', 'id' => 'subscribe']) !!}
                    <!--<input type="text" name="name" id="name" placeholder="Informe seu nome">-->
                    <div class="col-xs-12 col-sm-4">{!! Form::text('name', null, ['placeholder'=>'Informe seu nome', 'required' => 'required']) !!}</div>
                    <!--<input type="email" name="email" id="email" placeholder="Informe seu email">-->
                    <div class="col-xs-12 col-sm-4">{!! Form::email('email', null, ['placeholder'=>'Informe seu email', 'required' => 'required']) !!}</div>
                    <!--<button type="submit" class="btn">ENVIAR</button>-->
                    <div class="col-xs-12 col-sm-4">{!! Form::button('ENVIAR', ['class'=>'btn', 'type' => 'submit']) !!}</div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-lg-8 logo-master-gama">
                    <div class="col-xs-6">
                        <img src="assets/img/logo.png" class="logo">
                    </div>
                    <div class="col-xs-6" class="logo">
                        <img src="assets/img/logo-gama.png">
                    </div>
                    <div class="col-xs-12">
                        O blog masterjobs e Gama Academy ajudam centenas de profissionais transformarem seus talentos em oportunidades reais de trabalho
                        em startups de todo o Brasil. Deseja se tornar um profissional do futuro? <b>Nós queremos ajudar você!</b>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4 box-category">
                    <div class="col-xs-6 box-category">
                        <div class="title-category">
                            Categorias do Blog
                        </div>
                        <ul>
                            <li><a>Programação</a></li>
                            <li><a>Design</a></li>
                            <li><a>Marketing</a></li>
                            <li><a>Vendas</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 box-materials">
                        <div class="title-materials">
                            Materiais do Gama
                        </div>
                        <ul>
                            <li><a>Artigos Especializados</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            © Gama Academy 2017 - Todos os direitos reservados
        </div>
    </footer>

    <!-- SIDENAV -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Programação</a>
        <a href="#">Design</a>
        <a href="#">Vendas</a>
        <a href="#">Marketing</a>
        <a href="#">Ebooks</a>
        <a href="#">Startups</a>
        <a href="#">Artigos Especializados</a>
    </div>

    <!-- MODAL INSCRIÇÃO -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="form-apply-inscription">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">PREENCHA OS CAMPOS ABAIXO E FAÇA SUA INSCRIÇÃO</h4>
                </div>
                <div class="modal-body row">
                    {!! Form::open(['route'=>'register', 'method'=>'post', 'id' => 'subscribe']) !!}
                    <div class="col-xs-12">
                        <span>NOME COMPLETO</span><br/>
                        <!--<input type="text" placeholder="Informe seu nome"><br/>-->
                        {!! Form::text('name', null, ['placeholder'=>'Informe seu nome', 'required' => 'required']) !!} <br
                        />
                    </div>

                    <div class="col-xs-12">
                        <span>EMAIL</span><br/>
                        <!--<input type="email" placeholder="Informe seu email"><br/>-->
                        {!! Form::email('email', null, ['placeholder'=>'Informe seu email', 'required' => 'required']) !!} <br
                        />
                    </div>

                    <div class="col-xs-12">
                        <span>SUA ÁREA</span><br/>
                        <select name="stack" required>
                                <option value="">-- selecione --</option>
                                <option value="PROGRAMAÇÃO">PROGRAMAÇÃO</option>
                                <option value="DESIGN">DESIGN</option>
                                <option value="VENDAS">VENDAS / NEGÓCIOS</option>
                                <option value="MARKETING">MARKETING</option>
                            </select><br/>
                    </div>
                </div>
                <div class="modal-footer">
                    {!! Form::button('FAZER INSCRIÇÃO', ['class'=>'btn-flat', 'type' => 'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript" src="libs/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="libs/jquery/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type='text/javascript'>
    (function(){ var widget_id = 'R7gYcCHW9L';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
</body>

</html>