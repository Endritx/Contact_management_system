<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .search-form {
        text-align: center;
        margin-bottom: 30px;
    }

    .search-form input[type="text"] {
        width: 300px;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    .search-form button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #691717;
        color: #fff;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .search-form button:hover {
        background-color: #000000;
    }

    .contact-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .contact-table th, .contact-table td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .contact-table th {
        background-color: #f2f2f2;
    }
    .contact-table td a {
    display: inline-block;
    margin-right: 10px;
}

    .action-buttons {
        white-space: nowrap;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0px 3px 15px rgba(0,0,0,0.1);
    }

    .btn-details, .btn-edit, .btn-delete, .btn-add, .btn-home {
        display: inline-block;
        margin-right: 10px;
    }

    .btn-details, .btn-edit, .btn-delete {
        background-color: #691717;
        border: 10px solid #691717;
        color: #fff;
    }

    .btn-details:hover, .btn-edit:hover, .btn-delete:hover {
        background-color: #000000;
        border-color: #000000;
    }

  
    .btn-home {
        background-color: #691717;
        border: 1px solid #000000;
        color: #fff;
    }

    .btn-home:hover {
        background-color: #000000;
        border-color: #000000;
    }
</style>


    <div class="container">
        
        <h1>Contact List</h1>
        <form action="<?php echo e(route('contacts.search')); ?>" method="POST" class="search-form">
            <?php echo csrf_field(); ?>
            <input type="text" name="search" placeholder="Search by name or surname">
            <button type="submit">Search</button>
        </form>
        <table class="contact-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone</th>
                    <th>Action</th>
                    <th>Remove</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->surname); ?></td>
                        <td><?php echo e($contact->phone); ?></td>
                        <th>
                             <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" class="btn-details">Details</a>
                            <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn-edit">Edit</a></th>
                            <form method="POST" action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" class="form-delete">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                             <th><button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button></th>
                            </form>
                        </th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
       
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/contact_app/resources/views/contacts/index.blade.php ENDPATH**/ ?>