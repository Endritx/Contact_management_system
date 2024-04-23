<?php $__env->startSection('content'); ?>
    <style>
   
        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

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

        a:hover {
            background-color: #0056b3;
        }
    </style>

    <h1>Contact Details</h1>
    <p><strong>Name:</strong> <?php echo e($contact->name); ?></p>
    <p><strong>Surname:</strong> <?php echo e($contact->surname); ?></p>
    <p><strong>Phone:</strong> <?php echo e($contact->phone); ?></p>
    <a href="<?php echo e(route('contacts.index')); ?>">Back to Contacts</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/Computer networks/contacts/resources/views/contacts/show.blade.php ENDPATH**/ ?>