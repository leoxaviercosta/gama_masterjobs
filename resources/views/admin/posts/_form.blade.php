<!-- Title Form Input -->

<div class="form-group">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
</div>

<!-- Content Form Input -->

<div class="form-group">
    {!! Form::label('content', 'Conteúdo:') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>