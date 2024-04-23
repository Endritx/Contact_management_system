<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <title>Contact Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
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
            background-color: #691717;
        }

        nav ul li a:hover {
            background-color: #000000;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            position: fixed; 
            width: 100%; 
            bottom: 0; 
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('welcome')); ?>" class="btn-home">Home</a></li>
            <li><a href="<?php echo e(route('contacts.create')); ?>">Add New Contact</a></li>
        </ul>
    </nav>
    </header>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer>
        <p>© Made by Endrit Mamuti</p>
        <div>
            <a href="https://www.linkedin.com/in/endrit-mamuti-834239228/"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Endritx"><i class="bi bi-github"></i></a>
           
        </div>
    </footer>
</body>
</html>
<?php /**PATH /Users/endrit/Desktop/contact_app/resources/views/layouts/master.blade.php ENDPATH**/ ?>