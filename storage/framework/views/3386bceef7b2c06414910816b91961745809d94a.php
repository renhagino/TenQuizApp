<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    メインメニュー
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!--ボタン行１-->
                    <div class="row mt-3">
                        <!--問題集を探す-->
                        <button class="col-md-5  btn btn-primary  mx-auto mx-1">
                            <h6 class="text-md-center mt-2">問題集を検索</h6>
                        </button>
                        <!--登録した問題集を見る-->
                        <button class="col-md-5  btn btn-primary  mx-auto mx-1">
                            <h6 class="text-md-center mt-2">投稿したドリル</h6>
                        </button>
                    </div>
                    <!--ボタン行2-->
                    <div class="row mt-3">
                        <!--問題集を探す-->
                        <button class="col-md-5  btn btn-primary my-2 mx-auto mx-1">
                            <h6 class="text-md-center mt-2">マイドリル</h6>
                        </button>
                        <!--登録した問題集を見る-->
                        <button class="col-md-5  btn btn-primary my-2 mx-auto mx-1">
                            <h6 class="text-md-center mt-2">登録済みの問題集</h6>
                        </button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/quiz_app_laravel/resources/views/home.blade.php ENDPATH**/ ?>