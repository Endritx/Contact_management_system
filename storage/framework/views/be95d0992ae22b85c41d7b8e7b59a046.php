<?php $__env->startSection('content'); ?>
    <style>
       
        h1 {
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"],
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover,
        a:hover {
            background-color: #0056b3;
        }
    </style>

    <h1>Edit Contact</h1>
    <form method="POST" action="<?php echo e(route('contacts.update', $contact->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo e($contact->name); ?>">
        <label for="surname">Surname:</label>
        <input type="surname" id="surname" name="surname" value="<?php echo e($contact->surname); ?>">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo e($contact->phone); ?>">
        <button type="submit">Update Contact</button>
    </form>
    <a href="<?php echo e(route('contacts.index')); ?>">Cancel</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/contacts/resources/views/contacts/edit.blade.php ENDPATH**/ ?>