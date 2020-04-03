<header class="ui menu small borderless fixed top <?php echo e(config('laravolt.ui.options.topbar_inverted') ? 'inverted': ''); ?>">
    <div class="item mobile only tablet only" data-role="sidebar-visibility-switcher"><i class="icon sidebar"></i></div>
    <div class="menu right p-r-1">
        
            
            
                
                    
                    
                        
                            
                                
                                    
                                
                                
                                    
                                    
                                        
                                    

                                    
                                        
                                    
                                
                            
                        
                    
                
                
            
        
        <div class="item">
        </div>

        <?php if(auth()->guard()->check()): ?>
        <div class="ui item dropdown simple right">
            <img src="<?php echo e(auth()->user()->avatar); ?>" alt="" class="ui image avatar">
            <?php echo e(auth()->user()->name); ?>

            <i class="icon dropdown"></i>
            <div class="menu">
                <a href="<?php echo e(route('epicentrum::my.profile.edit')); ?>" class="item"><?php echo app('translator')->get('Edit Profil'); ?></a>
                <a href="<?php echo e(route('epicentrum::my.password.edit')); ?>" class="item"><?php echo app('translator')->get('Edit Password'); ?></a>
                <div class="divider"></div>
                <a href="<?php echo e(route('auth::logout')); ?>" class="item">Logout</a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</header>
<?php /**PATH /home/wobi/Dokumen/carrot/vendor/laravolt/laravolt/packages/platform/resources/views/menu/topbar.blade.php ENDPATH**/ ?>