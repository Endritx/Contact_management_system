<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #007bff;
        }

        nav ul li a:hover {
            background-color: #0056b3;
        }

        .content {
            margin: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('contacts.index')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('contacts.create')); ?>">Add New Contact</a></li>
        </ul>
    </nav>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /Users/endrit/Desktop/contacts/resources/views/layouts/master.blade.php ENDPATH**/ ?>