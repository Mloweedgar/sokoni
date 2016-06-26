<table class="table table-responsive" id="phones-table">
    <thead>
        <th>Phone Number</th>
        <th>User</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($phones as $phone)
        <tr>
            <td>{!! $phone->phone_number !!}</td>
            <td>{!! $phone->user !!}</td>
            <td>
                {!! Form::open(['route' => ['phones.destroy', $phone->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('phones.show', [$phone->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('phones.edit', [$phone->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
