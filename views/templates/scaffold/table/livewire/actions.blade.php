<a href="{{ $showUrl }}" class='pure-button button-small button-secondary'>
    @if($config->options->localized)
@@lang('crud.detail')
@else
    View
@endif
</a>
<a href="{{ $editUrl }}" class='pure-button button-small button-success'>
    @if($config->options->localized)
@@lang('crud.edit')
@else
    Edit
@endif
</a>
<a class='pure-button button-small button-error' wire:click="deleteRecord({{ $recordId }})"
   onclick="confirm('Are you sure you want to remove this Record?') || event.stopImmediatePropagation()">
    @if($config->options->localized)
__('crud.delete')
@else
    'Delete'
@endif
</a>
