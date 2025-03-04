<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Page</title>
</head>
<body>
    <div class="container d-flex justify-content-between my-8">
        <div class="container">
            <h1 class="txt-primary">Create</h1>
        </div>
        <div class="col-auto">
            <a href="/" type="submit" class="btn btn-success mb-3">Back To Home</a>
        </div>
    </div>
    
    <div class="container px-5">
        <form method="POST" action="<?php echo e(route('store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="text-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="<?php echo e(old('description')); ?>">
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-3 ">
                <label for="image" class="form-label">Select Image</label>
                <input type="file" class="form-control" name="image" id="image" value="<?php echo e(old('image')); ?>">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div>
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
</body>
</html><?php /**PATH D:\Xampp\htdocs\BasicCRUD\resources\views/create.blade.php ENDPATH**/ ?>