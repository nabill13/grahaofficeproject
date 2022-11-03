<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invoice || {{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        @media print {
            @page {
                size: A4 potrait
            }
        }

        .my-table {
            border: solid 1px rgb(7, 1, 30);
            ;
        }
    </style>

</head>

<body style="color : black;">
    @php
        date_default_timezone_set('Asia/Jakarta');
        
        $currentURL = URL::current();
        
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
        
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
        
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp

    <div class="container-fluid p-1 my-3 mx-2">
        <table class="table table-borderless">
            <tr>
                <td>
                    <h1>INVOICE</h1>
                    <h6>Bill to :</h6>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>: {{ $order->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Room</td>
                            <td>: {{ $order->room->name }}</td>
                        </tr>
                    </table>

                    <h6 class="mt-5">Payment method :</h6>
                    <p class="mx-0 my-1">{{ $order->payment->paytype->name }}</p>
                    <p class="mx-0 my-1">Email {{ $order->user->email }}</p>
                </td>

                <td style="width: 50px">
                    <img src="{{ url('') }}/img/logo-sticky1.png" alt="">
                    <h6 class="">Order date :</h6>
                    <p>{{ date_create($order->created_at)->format('F d, Y') }}</p>
                </td>
            </tr>
        </table>

        <div class="col-md-12">
            <h3 class="mt-5">ORDER SUMMARY</h3>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Price</th>
                        <th>Hours</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="table-secondary">
                        <td>{{ $order->room->name }}</td>
                        <td>{{ $order->room->price_rp() }}</td>
                        @php
                            $date_in = strtotime($order->datetime_in);
                            $date_out = strtotime($order->datetime_out);
                            $diff = $date_out - $date_in;
                            $hours = round($diff / (60 * 60), 1);
                        @endphp
                        <td>{{ $hours }}</td>
                        <td>{{ $order->payment->total_rp() }}</td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right">Subtotal</th>
                        <th>{{ $order->payment->total_rp() }}</th>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right">Tax</th>
                        <th>Rp. 5.000</th>                        
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: right">Total</th>
                        <th>{{ $order->payment->total_tax_rp() }}</th>                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        print();
    </script>
</body>

</html>
