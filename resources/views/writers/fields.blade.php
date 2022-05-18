<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Hobi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hobi', 'Hobi:') !!}
    {!! Form::text('hobi', null, ['class' => 'form-control']) !!}
</div>

<!-- Pekerjaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pekerjaan', 'Pekerjaan:') !!}
    {!! Form::text('pekerjaan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('writers.index') }}" class="btn btn-secondary">Cancel</a>
</div>
