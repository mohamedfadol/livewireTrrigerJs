<?php $__env->startSection('styles'); ?>
<style>
    #map{
    width: 1000px;
    height: 1000px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('user-component');

$__html = app('livewire')->mount($__name, $__params, 'Vbl5FQ4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> 
                    <div id="map"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 37.7749, lng: -122.4194 }, // Set the initial map center
        zoom: 4 // Set the initial zoom level
    });
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var userLatLng = new google.maps.LatLng(<?php echo e($user->lat); ?>, <?php echo e($user->long); ?>);
        var marker = new google.maps.Marker({
            position: userLatLng,
            map: map,
            
            //title: "<?php echo e($user->name); ?>" // Display user's name as a tooltip
        });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
}
window.initMap = initMap;
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAP_KEY')); ?>&callback=initMap" ></script>
<!-- <script type="text/javascript">
    document.addEventListener('say-goodbye', function (data) {
        console.log('Received custom event:', data.detail[0]['message']);
        alert(data.detail[0]['message']);
    }); 
</script> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/home.blade.php ENDPATH**/ ?>