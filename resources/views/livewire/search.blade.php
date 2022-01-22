<div>
    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist"
           placeholder="Saerch Style...">

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}"></option>
            @endforeach
        </datalist>
    @endif
</div>
