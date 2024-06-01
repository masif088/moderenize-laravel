<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0in;
            font-size: 12px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse
        }

        .invoice-table tbody td {
            padding: 10px;
        }

        .invoice-table thead td {
            padding: 5px;
        }

        {{--body {--}}
        {{--    background-image: url({{ public_path('front/background-pdf.jpg') }});--}}
        {{--    background-position: top left;--}}
        {{--    background-repeat: no-repeat;--}}
        {{--    background-size: 100%;--}}
        {{--    width: 100%;--}}
        {{--    height: 100%;--}}
        {{--}--}}
    </style>
</head>
<body style=" ">
<img src="{{ public_path('front/background-pdf.jpg') }}" alt="" style="position: absolute; width: 100%">
<div style="position: absolute; z-index: 2; width: 100%; padding: 170px 8%;">
    <div style="width: 84% ">
        <div>
            <div
                style="background: #465E89; margin-left: auto; color: white; display: flex; flex: fit-content; padding: 10px; width: 400px; border-radius: 10px 10px 0 0; justify-content: space-between">
                <table style="width: 100%">
                    <tr>
                        <td>No Invoice : asdjaskjdhjkadsh</td>
                        <td></td>
                        <td>Tanggal :</td>
                    </tr>
                </table>
            </div>
            <div style="width: 100%; background: #E9E9E9; ">

                <table style="width: 100%;padding: 10px">
                    <tr>
                        <td>
                            <b>Dari, <br> Wishka Company</b> <br>
                            Vendor Tas Malang <br>
                            Jl Mayar No 30, Sukun, Kota Malang <br>
                            + 62 812 5268 7268 / +62 895 3372 63639
                        </td>
                        <td></td>
                        <td style="text-align: right">
                            To, <br>
                            Inot Production <br>
                            Haris Mawardy <br>
                            Jl. Batujajar 24, Kota Malang <br>
                            0856-3588-826
                        </td>
                    </tr>
                </table>
            </div>
            <br><br>
            <div>
                <table class="invoice-table">
                    <thead>
                    <tr style="text-align: center; background: #465E89; color: white">
                        <td style="padding: 5px">#</td>
                        <td>Pesanan</td>
                        <td>Jumlah</td>
                        <td>Harga Satuan</td>
                        <td>Total</td>
                    </tr>
                    </thead>
                    <tbody>


                    @for($i=0; $i<3; $i++)

                        <tr style="border-bottom: 1px solid #C6C6C6">
                            <td style="text-align: center">{{ $i+1 }}</td>
                            <td>
                                <b>Bag Name and Code </b> <br>
                                Detail Product <br>
                                Bahan Tas <br>
                                Proses Pembuaran
                            </td>
                            <td style="text-align: right">
                                50 pcs
                            </td>
                            <td style="text-align: right">
                                Rp. 100.000
                            </td>
                            <td style="text-align: right">
                                Rp. 5.000.000
                            </td>
                        </tr>
                    @endfor

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub Total:</td>
                        <td>Rp. 3.800.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Diskon</td>
                        <td>Rp. 800.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Pajak:</td>
                        <td>Rp. 80.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2" style="background: #597FC1; ">
                            <table style="width: 100%; color: white; font-weight: 900">
                                <tr>
                                    <td style="padding: 0">TOTAL:</td>
                                    <td style="padding: 0;width: 30%"></td>
                                    <td style="padding: 0">Rp.</td>
                                    <td style="text-align: right; padding: 0">1.000.000.000</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <div>
                <font style="color: #465E89; font-weight: 700">PAYMENT METHOD : </font><br>
                Rek BCA 4480364029 a.n Kun Sentanawan
            </div>

            <br>
            <div>
                <font style="color: #465E89; font-weight: 700">KETENTUAN : </font><br>
                <ol>
                    <li>Minimal pemesanan 24 pcs per article</li>
                    <li>Sample akan di buatkan minimal 7 hari setelah DP</li>
                    <li>Revisi hanya bisa di lakukan 1x proses produksi 2-4 minggu</li>
                    <li>Pengambilan barang di wajibkan setelah melunasi pembayaran</li>
                </ol>
            </div>

            <br><br>

            <div style="text-align: center">
                <img src="{{ public_path('front/ttd.png') }}" alt="" style="width: 150px"><br>
                <font style="color: #465E89; font-weight: 700">KUN SENTAWAN</font>
            </div>


        </div>

    </div>
</div>
</body>
</html>
