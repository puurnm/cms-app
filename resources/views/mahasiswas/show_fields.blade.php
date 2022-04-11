<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $mahasiswa->nama }}</p>
</div>

<!-- Nim Field -->
<div class="form-group">
    {!! Form::label('nim', 'NIM:') !!}
    <p>{{ $mahasiswa->nim }}</p>
</div>

<!-- Tempat Lahir Field -->
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    <p>{{ $mahasiswa->tempat_lahir }}</p>
</div>

<!-- Tgl Lahir Field -->
<div class="form-group">
    {!! Form::label('tgl_lahir', 'Tanggal Lahir:') !!}
    <p>{{ $mahasiswa->tgl_lahir }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mahasiswa->alamat }}</p>
</div>

<!-- Hobi Field -->
<div class="form-group">
    {!! Form::label('hobi', 'Hobi:') !!}
    <p>{{ $mahasiswa->hobi }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mahasiswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mahasiswa->updated_at }}</p>
</div>

