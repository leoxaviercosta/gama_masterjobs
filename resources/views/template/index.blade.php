@extends('template.main')
@section('content')
<body>
    <header>
        @include('includes.menu.menuindex')
        <br/>
        <div class="logo-main">
            <img src="assets/img/logo-white.png">
        </div>
        <div class="title">
            MASTERJOBS
        </div>
        <div class="sub-title">
            Seja um profissional do futuro
        </div>
         <div class="sub-title" style="margin-top: 10px;">
            EM PARCERIA COM <img src="assets/img/logo-gama.png" class="logo" style="height: 50px;">
         </div>
        <!--<div class="count-remaining">
            <div class="counter">
                <span id="time-remaining"></span>
            </div>
            <div class="remaining">
                <div class="remaining-left"><img src="assets/img/hilight_left.png"></div>
                <div class="remaining-mid">AINDA DÁ TEMPO</div>
                <div class="remaining-right"><img src="assets/img/hilight_right.png"></div>
            </div>
            <br/>
        </div>-->
        <br />
        <button class="btn" id="subscribe-open" onclick="$('#myModal').modal('show')">PRÉ-INSCRIÇÕES ABERTAS</button>
        <br/><br/>
    </header>

    <section class="upgrade-stacks">
        <div class="container">
            <h1>
                DÊ UM UPGRADE DE CARREIRA
                <br/>NO MERCADO DIGITAL!
            </h1>
            <div class="sub-title">
                Em parceria com a <b>GAMA ACADEMY</b> estamos realizando pré-inscrições para os
                <br/>próximos programas do <b>GAMA EXPERIENCE</b> que acontecerão nas cidades de
                <br/>Belo Horizonte, São Paulo, Rio de Janeiro e Florianópolis!
                <br/>Não perca tempo. <b>FAÇA JÁ SUA PRÉ-INSCRIÇÃO!</b>
            </div>
            <div style="border: 1px #54c000 solid;">
                <div style="background-color: #54c000;padding: 15px;color: #fff;font-size: 25px;font-weight: 400;font-family: 'Montserrat', sans-serif;">Você conhece o programa GAMA EXPERIENCE?</div>
                <div style="background-color: #fff;color:#000;padding: 20px;text-align:left;">
                    <p>É a mistura do programa <span style="color: #54c000;"><b>O Aprendiz</b></span> com o <span style="color: #54c000;"><b>Tropa de Elite</b></span>. Mas como assim?</p>
                    <p>É um treinamento que desenvolve talentos para trabalhar em startups através de conceitos, teorias e muita mão-na-massa, proporcionando uma experiência que simula o dia a dia do ambiente de trabalho.</p>

                    <p>Como funciona:</p>
                    <ul style="list-style: none;">
                        <li><span style="color: #54c000;">►</span> 100 talentos são selecionados (júnior, pleno ou sênior);</li>
                        <li><span style="color: #54c000;">►</span> Processo seletivo com avaliação comportamental e prova técnica;</li>
                        <li><span style="color: #54c000;">►</span> Treinamento intensivo hardcore de 5 semanas;</li>
                        <li><span style="color: #54c000;">►</span> Aulas específicas em Programação (Hackers), Design (Hipsters), Business/Vendas (Hustlers) e Marketing Digital (Hypers).</li>
                        <li><span style="color: #54c000;">►</span> No fim, os sobreviventes participam de uma feira de contratações (De cada 10 alunos formados, 8 são contratados por empresas parceiras).</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6 stack">
                    <div class="icon">
                        <img src="assets/img/stack-hacker2.png">
                    </div>
                    <div class="description">
                        <div class="title">
                            PROGRAMAÇÃO
                        </div>
                        <div class="zigzag">
                            <img src="assets/img/zig-zag.png">
                        </div>
                        <div class="area">
                            <ul>
                                <li>Web Developer</li>
                                <li>iOS Developer</li>
                                <li>Android Developer</li>
                                <li>Data Science</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6 stack">
                    <div class="icon">
                        <img src="assets/img/stack-hipster2.png">
                    </div>
                    <div class="description">
                        <div class="title">
                            DESIGN
                        </div>
                        <div class="zigzag">
                            <img src="assets/img/zig-zag.png">
                        </div>
                        <div class="area">
                            <ul>
                                <li>User Experience Design</li>
                                <li>Design Thinking</li>
                                <li>Product Manager</li>
                                <li>Front-end</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6 stack">
                    <div class="icon">
                        <img src="assets/img/stack-hustler2.png">
                    </div>
                    <div class="description">
                        <div class="title">
                            VENDAS
                        </div>
                        <div class="zigzag">
                            <img src="assets/img/zig-zag.png">
                        </div>
                        <div class="area">
                            <ul>
                                <li>Inside Sales</li>
                                <li>Inbound Sales</li>
                                <li>Outbound Sales</li>
                                <li>Customer success</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6 stack">
                    <div class="icon">
                        <img src="assets/img/stack-hyper2.png">
                    </div>
                    <div class="description">
                        <div class="title">
                            MARKETING
                        </div>
                        <div class="zigzag">
                            <img src="assets/img/zig-zag.png">
                        </div>
                        <div class="area">
                            <ul>
                                <li>Inbound Marketing</li>
                                <li>SEO/SEM</li>
                                <li>Data Metrics</li>
                                <li>Growth Hacking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br/><br/><br/>
            <button class="btn-green" onclick=" window.location = '/blog';">ACESSE NOSSO BLOG E FIQUE <br>
            POR DENTRO DO MERCADO DIGITAL</button>
            <br/><br/><br/>
        </div>
    </section>

    <section class="student-testimonials">
        <div class="container">
            <h1>DEPOIMENTOS DOS ALUNOS</h1>
            <div class="sub-title">
                Transformamos Talentos e Conectamos esses profisionais a
                <br/>oportunidades Reais de Trabalho nas Maiores Startups e
                <br/> Empresas de Tecnologias do País.
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box-testimonials">
                        <div class="description-testimonials">
                            "Participei do Gama Experience em São Paulo e foi uma experiência incrível por diversos motivos! Pude aprender muito sobre teoria e conceitos de mercado, mas isso qualquer curso ou livro pode ensinar... Fazer parte do programa me ensinou e me deu as ferramentas necessárias para fazer a diferença, seja em empresas, seja na vida das pessoas! Hoje me sinto muito capaz e com a motivação necessária para isso! Valeu Gama!!"
                        </div>
                        <div class="profile-testimonials vcenter">
                            <div class="profile-image">
                                <img data-toggle="tooltip" data-placement="left" title="Caio Ayrosa" src="http://s3-us-west-2.amazonaws.com/gama-cdn/gama-site/testimonies/photos/caio-ayrosa.png?1486052256">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="box-testimonials">
                        <div class="profile-testimonials vcenter">
                            <div class="profile-image">
                                <img data-toggle="tooltip" data-placement="right" title="Nathália Leandro" src="http://s3-us-west-2.amazonaws.com/gama-cdn/gama-site/testimonies/photos/nathalia-leandro.png?1486052256">
                            </div>
                        </div>
                        <div class="description-testimonials">
                            "Foi a experiência de preparação profissional mais incrível que eu já tive. Nem a graduação e a pós-graduação me proporcionaram
                            tanto conhecimento em tão pouco tempo. Aprender com os melhores profissionais os conceitos mais
                            recentes de Marketing nos levou à outro nível de competitividade profissional. Os assignments
                            nos prepararam de fato para a realidade do mercado. Realizei o sonho de ser contratada por uma
                            startup (a melhor!), Tracksale, e torço para que esse projeto continue transformando a vida de
                            muitos jovens que querem sair da zona de conforto."
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="box-testimonials">
                        <div class="description-testimonials">
                            "Treinamento intensivo e absurdamente transformador! É preciso saber trabalhar em grupo e sob pressão. Colocamos em prática
                            os temas que eram abordados durante os assignments! Desenvolvemos hard skills e soft skills!
                            Aprendemos muito com os CEOs de startups que estão crescendo. Conhecemos muitas pessoas boas,
                            engajadas e super empenhadas em dar o melhor de si! É uma oportunidade de mudança e crescimento
                            de carreira! Muito obrigada Gama!"
                        </div>
                        <div class="profile-testimonials vcenter">
                            <div class="profile-image">
                                <img data-toggle="tooltip" data-placement="left" title="Aline Mie" src="http://s3-us-west-2.amazonaws.com/gama-cdn/gama-site/testimonies/photos/aline-mie.png?1486052255">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/>
        <button class="btn" id="want-work-startup" onclick="$('#myModal').modal('show')">QUERO TRABALHAR EM UMA STARTUP</button>
        <br/><br/><br/>
        </div>
    </section>
<style>
header {
    height: 450px;
}
</style>
    <!-- SUB FOOTER -->
    <footer> @include('includes.subfooter') </footer>

    <!-- SIDENAV -->
    @include('includes.sidenav.sidenavindex')

    <!-- MODAL INSCRIÇÃO -->
    @include('includes.modalinscricao')

    <!-- MODAL MENSAGEM -->
    @include('includes.modalmessage')
@endsection