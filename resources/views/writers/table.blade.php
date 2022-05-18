<div class="table-responsive-sm">
    <table class="table table-striped" id="writers-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Email</th>
        <th>Hobi</th>
        <th>Pekerjaan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($writers as $writer)
            <tr>
                <td>{{ $writer->nama }}</td>
            <td>{{ $writer->email }}</td>
            <td>{{ $writer->hobi }}</td>
            <td>{{ $writer->pekerjaan }}</td>
                <td>
                    {!! Form::open(['route' => ['writers.destroy', $writer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('writers.show', [$writer->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('writers.edit', [$writer->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>