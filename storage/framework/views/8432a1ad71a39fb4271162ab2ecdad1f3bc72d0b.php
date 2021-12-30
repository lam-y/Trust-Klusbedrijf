

<?php $__env->startSection('content'); ?>

 <!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Projects</h2>
            </div>           
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            
            <h2>Our Projects</h2>
        </div>
        <div class="row">
            
        </div>
        <div class="row portfolio-container">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="<?php echo e(Voyager::image($project->cover_img)); ?>" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3><?php echo e($project->title); ?></h3>
                        <a class="btn" href="<?php echo e(asset($project->images[0]->img_path)); ?>" data-lightbox="<?php echo e($project->title); ?>">+</a> 
                        <?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($index > 0): ?>
                            <a href="<?php echo e(asset($project->images[$index]->img_path)); ?>" data-lightbox="<?php echo e($project->title); ?>"></a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                      
                        
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
        <div class="row">
            <div class="col-12 load-more">
                <a class="btn" href="#">Load More</a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('front.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/front/projects.blade.php ENDPATH**/ ?>