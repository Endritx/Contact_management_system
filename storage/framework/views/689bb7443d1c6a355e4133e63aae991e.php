<?php $__env->startSection('content'); ?>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            width: 200px;
            padding: 5px;
            font-size: 16px;
        }

        .search-form button {
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-table {
            width: 100%;
            border-collapse: collapse;
        }

        .contact-table th, .contact-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .contact-table th {
            background-color: #f2f2f2;
        }

        .btn-details, .btn-edit, .btn-delete, .btn-add {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-details:hover, .btn-edit:hover, .btn-delete:hover, .btn-add:hover {
            background-color: #0056b3;
        }

        .form-delete {
            display: inline;
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
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->surname); ?></td>
                        <td><?php echo e($contact->phone); ?></td>
                        <td>
                            <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" class="btn-details">Details</a>
                            <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn-edit">Edit</a>
                            <form method="POST" action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" class="form-delete">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <a href="<?php echo e(route('contacts.create')); ?>" class="btn-add">Add New Contact</a>
    </div>
    <title>Footer Example</title>
    <style>
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
            
            
        }
    </style>
</head>
<body>
    <footer>
        <p>Endrit Mamuti - 130173</p>
    </footer>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/Computer networks/contacts/resources/views/contacts/index.blade.php ENDPATH**/ ?>