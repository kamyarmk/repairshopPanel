<html>
<head>
    <style>
        body {
            font-family: 'IRANSans', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        *{
            direction: rtl;
            font-family: 'IRANSans', sans-serif;
        }
        p{
            font-size: 0.5em;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

    </style>
</head>
<body>
    <main>
        <p>
            Name : <?php echo e($User['name']); ?> <br/>
            Model : <?php echo e($Device['devices']['device_name']); ?> <br/>
            IMEI : <?php echo e($Device['IMEI']); ?> <br/>
            PASCODE : <?php echo e($Device['password']); ?> <br/>
            PROBLEM : <?php echo e($Device['Problems']); ?> <br/>
        </p>
    </main>
</body>
</html>

<?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/pdf/LablePrint.blade.php ENDPATH**/ ?>