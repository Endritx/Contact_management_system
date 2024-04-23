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
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a:hover {
            background-color: #000000;
        }
        
    </style>

    <h1>Contact Details</h1>
    <p><strong>Name:</strong> <?php echo e($contact->name); ?></p>
    <p><strong>Surname:</strong> <?php echo e($contact->surname); ?></p>
    <p><strong>Phone:</strong> <?php echo e($contact->phone); ?></p>
    <a href="<?php echo e(route('contacts.index')); ?>">Back to Contacts</a>
<?php $__env->stopSection(); ?>

<style>
        body {
         background-color: #f5f5f5;
         font-family: Arial, sans-serif;
          line-height: 1.6;
          color: #333;
          text-align: center;
          padding: 40px 0;
        }
    
        img {
          max-width: 200px;
          height: auto;
        }
    
        h1 {
          font-size: 2.5em;
          margin-bottom: 20px;
        }
    

        p {
          font-size: 1.2em;
          margin-bottom: 40px;
        }
      </style>
   
   


   
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/contact_app/resources/views/contacts/show.blade.php ENDPATH**/ ?>