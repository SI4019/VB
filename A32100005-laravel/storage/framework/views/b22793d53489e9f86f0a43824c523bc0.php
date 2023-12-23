<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Data Blog - Pabweblaravel</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body style="background: lightgray">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0 shadow rounded">
            <div class="card-body">
              <form
                action="<?php echo e(route('blog.update', $blog->id)); ?>"
                method="POST"
                enctype="multipart/form-data"
              >
                <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

                <div class="form-group">
                  <label class="font-weight-bold">GAMBAR</label>
                  <input type="file" class="form-control" name="image" />
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">JUDUL</label>
                  <input
                    type="text"
                    class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="title"
                    value="<?php echo e(old('title', $blog->title)); ?>"
                    placeholder="Masukkan Judul Blog"
                  />

                  <!-- error message untuk title -->
                  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">KONTEN</label>
                  <textarea
                    class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="content"
                    rows="5"
                    placeholder="Masukkan Konten Blog"
                  >
<?php echo e(old('content', $blog->content)); ?></textarea
                  >

                  <!-- error message untuk content -->
                  <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn btn-md btn-primary">
                  UPDATE
                </button>
                <button type="reset" class="btn btn-md btn-warning">
                  RESET
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("content");
    </script>
  </body>
</html><?php /**PATH C:\SIBWA32100058\SI_VA\A3.2100058\A32100058-laravel\resources\views/blog/edit.blade.php ENDPATH**/ ?>