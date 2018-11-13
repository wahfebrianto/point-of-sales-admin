<table class="table table-responsive" id="menus-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Display Name</th>
        <th>Description</th>
        <th>Icon</th>
        <th>Parent Menu</th>
        <th>Feature Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($menus as $menu)
        <tr>
            <td>{!! $menu->name !!}</td>
            <td>{!! $menu->display_name !!}</td>
            <td>{!! $menu->description !!}</td>
            <td>{!! $menu->icon !!}</td>
            <td>{!! $menu->parent_menu !!}</td>
            <td>{!! $menu->feature_id !!}</td>
            <td>{!! $menu->info !!}</td>
            <td>{!! $menu->status !!}</td>
            <td>
                {!! Form::open(['route' => ['menus.destroy', $menu->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('menus.show', [$menu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('menus.edit', [$menu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>