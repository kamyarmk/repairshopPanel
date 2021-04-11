<head>
    <style>
        body {
            font-family: 'IRANSans', sans-serif;
            margin: 0;
            padding: 0;
        }
        .condition{
            position: absolute;
            top:0;
            left: 10px;
            height: 50px;
            padding-left: 5px;
            padding-right: 5px;
            background-color: #f05945;
            padding-top: 25px;
            text-align: center;
            color: #1f1f1f;
            font-weight: bold;
        }
        *{
            direction: rtl;
            font-family: 'IRANSans', sans-serif;
        }
        .clearfix:after {
        content: "";
        display: table;
        clear: both;
        }

        a {
            color: #0087C3;
            text-decoration: none;
        }

        body {
        position: relative;
        width: 21cm;  
        height: 29.7cm; 
        color: #1f1f1f;
        background: #FFFFFF; 
        font-size: 14px; 
        font-family: 'IRANSans', sans-serif;;
        direction: rtl;
        }

        header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #f05945;
        }

        #logo {
        float: left;
        margin-top: 8px;
        }

        #logo img {
        height: 70px;
        }

        #company {
        float: right;
        text-align: right;
        direction: rtl;
        }


        #details {
        margin-bottom: 50px;
        }

        #client {
        padding-right: 6px;
        border-right: 6px solid #f05945;
        float: right;
        text-align: right;
        direction: rtl;
        }

        #client .to {
        color: #1f1f1f;
        }

        h2.name {
        font-size: 1.4em;
        font-weight: normal;
        margin: 0;
        direction: rtl;
        }

        #invoice {
        float: left;
        text-align: left;
        direction: rtl;
        }

        #invoice h1 {
        color: #f05945;
        font-size: 2.4em;
        line-height: 1em;
        font-weight: normal;
        margin: 0  0 10px 0;
        direction: rtl;
        }

        #invoice .date {
        font-size: 1.1em;
        color: #777777;
        direction: rtl;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
        direction: rtl;
        }

        table th,
        table td {
        padding: 20px;
        background: #f7f3e9;
        text-align: center;
        border-bottom: 1px solid #f05945;
        }

        table th {
        white-space: nowrap;        
        font-weight: normal;
        }

        table td {
        text-align: right;
        }

        table td h3{
        color: #f05945;
        font-size: 1.2em;
        font-weight: normal;
        margin: 0 0 0.2em 0;
        }

        table .no {
        color: #FFFFFF;
        font-size: 1.6em;
        background: #5eaaa8;
        }

        table .desc {
        text-align: right;
        }

        table .unit {
        background: #a3d2ca;
        }

        table .qty {
        }

        table .total {
        background: #5eaaa8;
        color: #FFFFFF;
        }

        table td.unit,
        table td.qty,
        table td.total {
        font-size: 1.2em;
        }

        table tbody tr:last-child td {
        border: none;
        }

        table tfoot td {
        padding: 10px 20px;
        background: #FFFFFF;
        border-bottom: none;
        font-size: 1.2em;
        white-space: nowrap; 
        border-top: 1px solid #f05945; 
        text-align: left;
        }

        table tfoot tr:first-child td {
        border-top: none; 
        }

        table tfoot tr:last-child td {
        color: #57B223;
        font-size: 1.4em;
        border-top: 1px solid #57B223; 

        }

        table tfoot tr td:first-child {
        border: none;
        }

        #thanks{
        font-size: 2em;
        margin-bottom: 50px;
        }

        #notices{
        padding-right: 6px;
        border-right: 6px solid #f05945;  
        }

        #notices .notice {
        font-size: 1.2em;
        }

        footer {
        color: #777777;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #AAAAAA;
        padding: 8px 0;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="condition">
        <?php echo e($Condition); ?>

    </div>
    <header class="clearfix">
      <div id="logo">
        <!-- <img src="logo.png"> -->
      </div>
      <div id="company">
        <h2 class="name">فیکس ایت دو</h2>
        <div>455 Foggy Heights, AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">فاکتور برای :</div>
          <h2 class="name"><?php echo e($users['name']); ?></h2>
          <div class="address"><?php echo e($users['phone_number']); ?></div>
          <div class="email"><a href="mailto:<?php echo e($users['email']); ?>"><?php echo e($users['email']); ?></a></div>
        </div>
        <div id="invoice">
          <h1>فاکتور #<?php echo e($id); ?></h1>
          <div class="date">تاریخ فاکتور : <?php echo e($created_at); ?></div>
          <!-- <div class="date">Due Date: 30/06/2014</div> -->
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">توضیحات</th>
            <th class="unit">هزینه</th>
            <th class="qty">مقدار</th>
            <th class="total">مجموع</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><?php echo e($Notes); ?></td>
            <td class="unit"><?php echo e($Price); ?> تومان</td>
            <td class="qty">1</td>
            <td class="total"><?php echo e($Price); ?> تومان</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">مجموع</td>
            <td><?php echo e($Price); ?> تومان</td>
          </tr>
          <!-- <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>$1,300.00</td>
          </tr> -->
          <!-- <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$6,500.00</td>
          </tr> -->
        </tfoot>
      </table>
      <div id="thanks">با تشکر از شما!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</body><?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/pdf/invoice.blade.php ENDPATH**/ ?>