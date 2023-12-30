<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: flex;
        }

        .invoice {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .invoice header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .invoice header h1 {
            font-size: 2em;
            color: #333;
        }

        .invoice .bill-to {
            margin-top: 20px;
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .invoice table,
        .invoice th,
        .invoice td {
            border: 1px solid #ddd;
        }

        .invoice th,
        .invoice td {
            padding: 12px;
            text-align: left;
        }

        .invoice tfoot {
            font-weight: bold;
        }

        .thank-you {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body>
    <?php foreach ($reservation as $r) : ?>
        <div class="invoice">
            <header>
                <h1>Invoice</h1>
            </header>
            <div class="bill-to">
                <p><strong>Nama Lengkap : </strong><?= $r['name'] ?></p>
                <p><strong>Nomor Telpon : </strong><?= $r['phone'] ?></p>
                <p><strong>Alamat Email : </strong><?= $r['email'] ?></p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Days</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $r['type_room'] ?></td>
                        <td><?= $r['total_hari'] ?></td>
                        <td><?= $r['price'] ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Subtotal</td>
                        <td><?= $r['price'] ?></td>
                    </tr>
                </tfoot>
            </table>
            <!-- Add this form below your table -->
            <form action="<?= base_url('Admin/uploadpayment') ?>" method="post" enctype="multipart/form-data">
                <div class="bill-to">
                    <p><strong>Upload Payment : </strong></p>
                </div>
                <input type="file" name="payment" id="payment" required>
                <input type="hidden" name="reservation_id" value="<?= $r['id'] ?>"> <!-- Assuming you have an 'id' field in your reservation table -->

                <button type="submit">Upload</button>
            </form>
            <div class="thank-you">
                <p>Thank you for your business!</p>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>