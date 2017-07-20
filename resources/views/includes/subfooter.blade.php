<div class="newsletter">
    <div class="container">
        <div class="title">
            AUMENTE SEU CONHECIMENTO
        </div>
        <div class="sub-title">
            Cadastre-se para receber os melhores conteúdos sobre marketing, design, programação e vendas
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
    <div class="row" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-xs-12 col-sm-8 col-lg-8 logo-master-gama">
            <div class="col-xs-6">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo">
            </div>
            <div class="col-xs-6" class="logo">
                <img src="{{ asset('assets/img/logo-gama.png') }}">
            </div>
            <div class="col-xs-12">
                O blog masterjobs e Gama Academy ajudam centenas de profissionais transformarem seus talentos em oportunidades reais de trabalho em startups de todo o Brasil. Deseja se tornar um profissional do futuro? <b>Nós queremos ajudar você!</b>
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