<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="form-apply-inscription">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PREENCHA OS CAMPOS ABAIXO E FAÇA SUA INSCRIÇÃO</h4>
            </div>
            <div class="modal-body row">
                {!! Form::open(['route'=>'register', 'method'=>'post', 'id' => 'subscribe-full']) !!}
                <div class="col-xs-12">
                    <span>NOME COMPLETO</span><br/>
                    <!--<input type="text" placeholder="Informe seu nome"><br/>-->
                    {!! Form::text('name', null, ['placeholder'=>'Informe seu nome', 'required' => 'required']) !!} <br />
                </div>

                <div class="col-xs-12">
                    <span>EMAIL</span><br/>
                    <!--<input type="email" placeholder="Informe seu email"><br/>-->
                    {!! Form::email('email', null, ['placeholder'=>'Informe seu email', 'required' => 'required']) !!} <br />
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
                <!--<button class="btn-flat">FAZER INSCRIÇÃO</button>-->
                {!! Form::button('FAZER INSCRIÇÃO', ['class'=>'btn-flat', 'type' => 'submit']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>