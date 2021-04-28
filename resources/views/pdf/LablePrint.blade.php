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
            Name : {{ $User['name'] }} <br/>
            Model : {{ $Device['devices']['device_name'] }} <br/>
            IMEI : {{ $Device['IMEI'] }} <br/>
            PASCODE : {{ $Device['password'] }} <br/>
            PROBLEM : {{ $Device['Problems'] }} <br/>
        </p>
    </main>
</body>
</html>

