<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME LAB SOLUTIONS INC</title>

    <?php include('includes/top-header.php') ?>

    <style>
         .print-btn {
            background-color: #023350;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        #invoice-content {
    border: 1px solid #ccc;
    padding: 15px;
}

        @media print {
            body * {
                visibility: hidden;
            }

            #invoice-content, #invoice-content * {
                visibility: visible;
            }

            #invoice-content {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .print-btn {
                display: none;
            }
        }
    </style>
</head>

<body>



    <?php include('includes/header.php') ?>

    <section class="inner-banner">
        <div class="container">
            <h1 class="banner-title">Invoice</h1>
        </div>
    </section>

    <main class="invoice-page">
        <div class="container">

            <div id="invoice-content">
                <table style="width: 100%; margin-bottom: 30px;">
                    <tr>
                        <td style="width: 50%;">
                            <div>
                                <img src="assets/upload/logo.png" alt="" style="width:150px">
                            </div>
                        </td>
                        <td style="width: 50%; text-align: right;">
                            <div style="color: #023350; font-weight: bold; font-size: 18px;">PRIME LAB SOLUTIONS INC</div>
                            <div style="color: #383838; margin-bottom: 10px; margin-top: 10px;">(530) 859-6003</div>
                            <div style="color: #383838;">606 Drake Ln</div>
                            <div style="color: #383838;">Washington</div>
                            <div style="color: #383838;">IL 61571</div>
                        </td>
                    </tr>
                </table>

                <h2 style="color: #383838; border-bottom: 1px solid #eee; padding-bottom: 10px;">INVOICE</h2>

                <table style="width: 100%; margin-top: 20px; margin-bottom: 30px;">
                    <tr>
                        <td style="vertical-align: top; color: #383838;">
                            <strong>Bill To</strong><br>
                            <span style="color: #023350; font-weight: bold;">Jack Little</span><br>
                            3242 Chandler Hollow Road<br>
                            Pittsburgh<br>
                            15222 Pennsylvania<br><br>

                            <strong>Ship To</strong><br>
                            3242 Chandler Hollow Road<br>
                            Pittsburgh<br>
                            15222 Pennsylvania
                        </td>
                        <td style="text-align: right;">
                            <table style="border-collapse: collapse; width: 100%;">
                                <tr>
                                    <td style="background: #023350; color: white; padding: 8px; border-bottom: 1px solid #ccc;">Invoice#</td>
                                    <td style="border: 1px solid #ccc; padding: 8px;">INV-000001</td>
                                </tr>
                                <tr>
                                    <td style="background: #023350; color: white; padding: 8px; border-bottom: 1px solid #ccc;">Invoice Date</td>
                                    <td style="border: 1px solid #ccc; padding: 8px;">05 Aug 2024</td>
                                </tr>
                                <tr>
                                    <td style="background: #023350; color: white; padding: 8px; border-bottom: 1px solid #ccc;">Terms</td>
                                    <td style="border: 1px solid #ccc; padding: 8px;">Due on Receipt</td>
                                </tr>
                                <tr>
                                    <td style="background: #023350; color: white; padding: 8px; border-bottom: 1px solid #ccc;">Due Date</td>
                                    <td style="border: 1px solid #ccc; padding: 8px;">05 Aug 2024</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                    <thead>
                        <tr style="background: #023350; color: white;">
                            <th style="padding: 10px; border: 1px solid #ccc;">#</th>
                            <th style="padding: 10px; border: 1px solid #ccc; text-align: start;">Item & Description</th>
                            <th style="padding: 10px; border: 1px solid #ccc;">Qty</th>
                            <th style="padding: 10px; border: 1px solid #ccc;">Rate</th>
                            <th style="padding: 10px; border: 1px solid #ccc;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">1</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">
                                <div><strong>Brochure Design</strong></div>
                                <div style="font-size: 14px; color: #383838;">Single-sided Color Design</div>
                            </td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">1.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">900.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">900.00</td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">2</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">
                                <div><strong>Flyer Design</strong></div>
                                <div style="font-size: 14px; color: #383838;">Full-page Color Flyer</div>
                            </td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">1.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">10,000.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">10,000.00</td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">3</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">
                                <div><strong>Banner Design</strong></div>
                                <div style="font-size: 14px; color: #383838;">Outdoor Vinyl Banner Design</div>
                            </td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">1.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">7,500.00</td>
                            <td style="padding: 20px 10px; border: 1px solid #ccc;">7,500.00</td>
                        </tr>
                    </tbody>
                </table>

                <table style="width: 100%; margin-top: 20px;">
                    <tr>
                        <td style="width: 60%;"></td>
                        <td style="text-align: right;">
                            <div style="display: flex; justify-content: space-between; padding-bottom: 15px; border-bottom: 1px solid #ccc;">
                                <div><strong>Sub Total:</strong></div>
                                <div> 18,400.00</div>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin: 15px 0px; border-bottom: 1px solid #ccc; padding-bottom: 15px;">
                                <div><strong>Tax Rate:</strong></div>
                                <div> 5.00%</div>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div><strong>Total:</strong></div>
                                <div style="color: #023350; font-weight: 600; font-size: 20px;">$19320.00</div>
                            </div>
                        </td>
                    </tr>
                </table>

                <p style="margin-top: 60px; text-align:center">Thanks for your business.</p>

                <p style="font-size: 13px; margin-top: 40px; text-align:center">
                    <strong>Terms & Conditions</strong><br>
                    All payments must be made in full before the commencement of any design work.
                </p>

                <div class="div" style="text-align:center; margin-top: 20px;">
                      <button class="print-btn" onclick="window.print()">Print Invoice</button>
                </div>
      
            </div>
        </div>
    </main>
    <!-- ========== footer =========== -->

    <?php include('includes/footer.php') ?>

</body>

</html>