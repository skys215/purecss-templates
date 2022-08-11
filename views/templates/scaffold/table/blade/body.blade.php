<table class="pure-table pure-table-bordered" id="{{ $config->modelNames->dashedPlural }}-table">
    <thead>
    <tr>
        {!! $fieldHeaders !!}
@if($config->options->localized)
<th>@@lang('crud.action')</th>
@else
    <th>Action</th>
@endif
    </tr>
    </thead>

    <tbody>
        @@foreach(${{ $config->modelNames->camelPlural }} as ${{ $config->modelNames->camel }})
            <tr>
                {!! $fieldBody !!}
                <td style="width: 120px">
                    @{!! Form::open(['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.destroy', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'delete']) !!}
                        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.show', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                           class='pure-button button-small button-secondary'>
                            @if($config->options->localized)
@@lang('crud.detail')
@else
    View
@endif
                        </a>
                        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.edit', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                           class='pure-button button-small button-success'>
                            @if($config->options->localized)
@@lang('crud.edit')
@else
    Edit
@endif
                        </a>
                        @{!! Form::button(@if($config->options->localized)
__('crud.delete')
@else
    'Delete'
@endif, ['type' => 'submit', 'class' => 'pure-button button-small button-error', 'onclick' => "return confirm(@if($config->options->localized)
__('crud.are_you_sure')
@else
    'Are you sure?'
@endif)"]) !!}
                    @{!! Form::close() !!}
                </td>
            </tr>
        @@endforeach
    </tbody>
</table>

{!! $paginate !!}
