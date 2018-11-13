
<li class="{{ Request::is('clinics*') ? 'active' : '' }}">
    <a href="{!! route('clinics.index') !!}"><i class="fa fa-edit"></i><span>Clinics</span></a>
</li>

<li class="{{ Request::is('features*') ? 'active' : '' }}">
    <a href="{!! route('features.index') !!}"><i class="fa fa-edit"></i><span>Features</span></a>
</li>

<li class="{{ Request::is('packets*') ? 'active' : '' }}">
    <a href="{!! route('packets.index') !!}"><i class="fa fa-edit"></i><span>Packets</span></a>
</li>

<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{!! route('menus.index') !!}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{!! route('payments.index') !!}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}"><i class="fa fa-edit"></i><span>Permissions</span></a>
</li>

<li class="{{ Request::is('promos*') ? 'active' : '' }}">
    <a href="{!! route('promos.index') !!}"><i class="fa fa-edit"></i><span>Promos</span></a>
</li>

<li class="{{ Request::is('topups*') ? 'active' : '' }}">
    <a href="{!! route('topups.index') !!}"><i class="fa fa-edit"></i><span>Topups</span></a>
</li>

<li class="{{ Request::is('supports*') ? 'active' : '' }}">
    <a href="{!! route('supports.index') !!}"><i class="fa fa-edit"></i><span>Supports</span></a>
</li>

<li class="{{ Request::is('conversations*') ? 'active' : '' }}">
    <a href="{!! route('conversations.index') !!}"><i class="fa fa-edit"></i><span>Conversations</span></a>
</li>

<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{!! route('messages.index') !!}"><i class="fa fa-edit"></i><span>Messages</span></a>
</li>

<li class="{{ Request::is('bills*') ? 'active' : '' }}">
    <a href="{!! route('bills.index') !!}"><i class="fa fa-edit"></i><span>Bills</span></a>
</li>

<li class="{{ Request::is('logs*') ? 'active' : '' }}">
    <a href="{!! route('logs.index') !!}"><i class="fa fa-edit"></i><span>Logs</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

