<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $writer->nama }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $writer->email }}</p>
</div>

<!-- Hobi Field -->
<div class="form-group">
    {!! Form::label('hobi', 'Hobi:') !!}
    <p>{{ $writer->hobi }}</p>
</div>

<!-- Pekerjaan Field -->
<div class="form-group">
    {!! Form::label('pekerjaan', 'Pekerjaan:') !!}
    <p>{{ $writer->pekerjaan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $writer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $writer->updated_at }}</p>
</div>

