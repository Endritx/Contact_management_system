<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <title>Contact Management System</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, sans-serif;
        }
    
        .header {
          background-color: #000000;
          padding: 20px 0;
          text-align: center;
        }
    
        .btn {
          background-color: red;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          border-radius: 5px;
          transition: background-color 0.3s ease;
        }
    
        .btn:hover {
          background-color: darkred;
        }
      </style>
    </head>
    <body>
        <header class="header">
            <nav>
                <ul>
                    <li><a href="<?php echo e(route('welcome')); ?>" class="btn-home">Home</a></li>
                    <li><a href="<?php echo e(route('contacts.create')); ?>">Add New Contact</a></li>
                </ul>
            </nav>
        </header>
        
        </body>
    </html>
    <?php /**PATH /Users/endrit/Desktop/contact_app/resources/views/layouts/header.blade.php ENDPATH**/ ?>