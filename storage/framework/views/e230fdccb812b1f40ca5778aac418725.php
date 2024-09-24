<div class="min-h-screen bg-white shadow sm:p-8 pt-20 text-lg">
    <nav>
        <ul class="flex flex-col gap-6">
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out" href="<?php echo e(route('pemasukan.index')); ?>">Pemasukan</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out" href="<?php echo e(route('pengeluaran.index')); ?>">Pengeluaran</a>
            </li>
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>

                <a class="text-lg ml-2 text-blue-500 cursor-pointer" :href="route('logout')" 
                      onclick="event.preventDefault();
                       this.closest('form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
            </form>
        </ul>
    </nav>
</div><?php /**PATH C:\xampp\htdocs\laravel-masjid\resources\views/components/dashboard-sidebar.blade.php ENDPATH**/ ?>