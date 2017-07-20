@extends('template.main')
@section('content')
<body>
    <header>
        @include('includes.menu.menublog')
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
                        QUEM SOMOS
                    </div>
                    <div class="mj-blog-title-sub-description">
                    </div>
                </div>

                <div class="mj-blog-sub-content">
                    <p style="text-align:justify;">
                        O <b>masterjobs</b> foi criado com a missão de transformar a vida de muitas pessoas por meio do conhecimento.
                        Para nós, idealizadores do blog, é um imenso prazer poder gerar conteúdos relevantes para milhares
                        de jovens e profissionais. O nosso maior desejo é que os nossos leitores consigam aprender com os
                        materiais compartilhados. Somos um time bem eclético, divertido e cheio de sede por novos conhecimentos!
                    </p>
                    <p style="text-align:justify;">
                        E temos grande alegria de sermos parceiros no <b>GAMA EXPERIENCE</b>, o maior programa de seleção
                        e capacitação de talentos do mercado digital.
                    </p>

                    <center>
                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Lorena Rímulo</h3>
                        <p>Engenheira Metalurgista formada pela UFMG, consultora na área de inovação em pequenas empresas pelo
                            SEBRAE MG, Hustler no Gama Experience e apaixonada por inovação e business! </p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Fernanda Stussi</h3>
                        <p>Dentre os Hackers do MasterJobs.Tech, eu sou a Fernanda Stussi! Venho de um background das Ciências Biológicas, mas aprendi a programar graças a uma ênfase em Bioinformática que, atualmente, é também o meu mestrado! Você não precisa ser formalmente um developer para participar do #GamaExperience, basta ter sangue no olho e muita vontade de aprender! Faça a sua pré-inscrição e seja parte desse time também!
</p>


                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Marlos Machado</h3>
                        <p>Relações Públicas formado pelo UNIBH, pós-graduado em Gestão de Negócios na PUC, Comunicação Corporativa na PUC e Comunicação Digital e Mídias Sociais na UNA, atuo no mercado há mais de 14 anos, um verdadeiro apaixonado por comunicação, marketing, inovação e novas tecnologias! Sou Hyper no Gama Experience!
</p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Kellber Ruan</h3>
                        <p>Estudante de Relações Públicas na Una-BH, formado em Técnico em Administração pelo Senai-MG, apaixonado pela área da comunicação e vendedor nato. Sou #Hustler no Gama Experience e busco potencializar minhas habilidades para atuar no mercado digital. </p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Roberth Godoy</h3>
                        <p>Tecnólogo em Sistemas Internet, graduando o último período de Sistemas de Informação. Atuo como consultor de sistemas web e mobile, propondo soluções de ecommerce, sites corporativos e sistemas de gestão. Sou Trainee na Teknisa e Hacker no Gama Experience.</p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Guilherme Pio</h3>
                        <p>Técnico em Administração pelo SEBRAE/MG, Bacharelando em Administração pela Faculdade IBS/FGV, Sócio-Diretor da Agência Levada e músico. Sou Hustler no Gama Experience.</p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Ewerton Silva</h3>
                        <p>Técnico em Informática Industrial no SESI/CEFET, graduado em Design Gráfico na Universidade FUMEC, pós-graduado em Design de Interação na PUC Minas, MBA em Gestão Estratégica em Marketing Digital na B.I. International, pós-graduando em Desenvolvimento Móvel na PUC Minas. Entusiasta de Gamificação e Designer de coração. Sou User Experience Designer na Agência Open e #HIPSTER na Gama Academy.
</p>

                        <h3 style="color: #54c000; text-transform: uppercase;font-weight: 900;">Leonardo Carvalho</h3>
                        <p>Formado em Gestão de Tecnologia da Informação, integro o time de Hackers, atuo no ramo de desenvolvimento à aproximadamente 4 anos e atualmente trabalho com desenvolvimento web e mobile no segmento de completo de Recursos Humanos e CRM na Teknisa Software, além de me aventurar no empreendedorismo com a TechPrise - Transformando Ideias. Trago comigo ampla bagagem e experiências para compartilhar com todos vocês.</p>
                    </center>
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

    <footer style="z-index: 20; position: absolute;"> @include('includes.subfooter') </footer>

    <!-- SIDENAV -->
    @include('includes.sidenav.sidenavblog')

    <!-- MODAL INSCRIÇÃO -->
    @include('includes.modalinscricao')

    <!-- MODAL MENSAGEM -->
    @include('includes.modalmessage')
@endsection