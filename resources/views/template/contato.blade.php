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
                    {!! Form::open(['route'=>'contact', 'method'=>'post', 'id' => 'form-contact']) !!}
                        <div class="row" >
                            <div class="col-xm-12">
                                <span>NOME</span>
                                {!! Form::text('name', null, ['required' => 'required']) !!}
                            </div>
                            <div class="col-xm-12">
                                <span>EMAIL</span>
                                {!! Form::email('email', null, ['required' => 'required']) !!}
                            </div>
                            <div class="col-xm-12">
                                <span>ASSUNTO</span>
                                {!! Form::text('subject', null, ['required' => 'required']) !!}
                            </div>
                            <div class="col-xm-12">
                                <span>MENSAGEM</span>
                                {!! Form::textarea('msg', null, ['required' => 'required']) !!}
                            </div>
                            <div class="col-xm-12">
                                {!! Form::button('ENVIAR', ['class'=>'btn-flat-green', 'type' => 'submit']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
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