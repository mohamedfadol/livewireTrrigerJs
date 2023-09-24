<div> 
     
<form wire:submit.prevent="increment">
    <select wire:model="user" name="user" class="form-control">
    <option>Click Me</option>
    @foreach ($users as $user)
        <option value="{{$user->id}}">Click Me {{ $user->name }} </option> 
     @endforeach
    </select>
    <input wire:model.live="name" name="name" class="form-control">
    <button type="button" class="btn btn-danger" wire:click.prevent="increment">increment +</button>
</form>
</div>
