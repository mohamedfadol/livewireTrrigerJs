<div> 
     
<form wire:submit.prevent="increment">
    <select wire:model="user" name="user" class="form-control">
    <option>Click Me</option>
    <!-- __BLOCK__ --><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>">Click Me <?php echo e($user->name); ?> </option> 
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
    </select>
    <input wire:model.live="name" name="name" class="form-control">
    <button type="button" class="btn btn-danger" wire:click.prevent="increment">increment +</button>
</form>
</div>
<?php /**PATH C:\xampp\htdocs\test\resources\views/livewire/user-component.blade.php ENDPATH**/ ?>