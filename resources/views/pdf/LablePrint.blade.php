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
            Name : {{ $users['name'] }} <br/>
            Model : {{ $devices['device_name'] }} <br/>
            IMEI : {{ $IMEI }} <br/>
            PASCODE : {{ $password }} <br/>
            PROBLEM : {{ $Problems }} <br/>
        </p>
    </main>
</body>
</html>

