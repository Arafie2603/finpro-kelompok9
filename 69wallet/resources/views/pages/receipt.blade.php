@extends('layouts.base2')


@section('content3')
    <main class="content" style="width: 500px; margin:auto;padding-top: 40px">
        <!-- Button trigger modal -->

        <div class="container-fluid p-0">

            <strong>

                <div class="row">

                    <div class="col-xl-12 d-flex mb-5 d-flex justify-content-center">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <h1 class="text-center">69 Wallet</h1>
                                            <p class="text-center">Jl. Taman Melati, Bekasi, West Java
                                                <br>(021)8475937582
                                            </p>
                                            <p class="text-center"></p>
                                            {{ str_pad('', 41, '=') }}
                                            <table>
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td>: {{ $data->format('d M Y H:i:s') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>OrderID</td>
                                                    <td>: {{ $transaksi->id_transaksi }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>: {{ $transaksi->total_item }}</td>
                                                </tr>
                                            </table>
                                            {{ str_pad('', 41, '=') }}

                                            <table style="width: 100%">
                                                <tr>
                                                    <td style="width: 40%">{{ $tranDetail->produk->nama_produk }}</td>
                                                    <td style="width: 50%">{{ $tranDetail->jumlah }}</td>
                                                    <td>Rp{{ number_format($tranDetail->harga_satuan * $tranDetail->jumlah) }}
                                                    </td>
                                                </tr>

                                            </table>
                                            <br>
                                            {{ str_pad('', 41, '=') }}
                                            <div class="d-flex justify-content-between">
                                                <p>Total :</p>
                                                <p>Rp.{{ number_format($transaksi->total_harga) }}</p>
                                            </div>
                                            <p class="text-center pt-5">Terimakasih dan semoga harimu menyenangkan!</p>
                                            {{-- <div class="d-flex justify-content-center">{!! DNS1D::getBarcodeHTML($transaksi->id_transaksi, 'C128', 3, 60) !!}</div> --}}
                                            <p class="text-center pt-3"></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="{{ url('dash_poin') }}" enctype="multipart/form-data" method="POST">
                    <div class="d-flex justify-content-center mb-5">
                        @if ($poin_achieve == 3)
                            
                        <input id="poin_achieve" name="poin_achieve"value="3"
                            class="form-control w-25 mb-2" hidden>

                            
                        @endif
                        <a class="btn btn-primary" value="{{ $poin_achieve }}" href="{{ url('dash_poin') }}"
                            type="submit"><i class="fa-solid fa-utensils"></i>
                            Pesan Lagi</a>

                    </div>
                </form>

        </div>
    </main>
@endsection
<script>
    document.querySelector('.btn-primary').addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah tautan mengarahkan ke URL

        var poinAchieve = document.getElementById('poin_achieve').value;

        // Lakukan sesuatu dengan nilai poinAchieve, misalnya, kirimkan nilainya ke server dengan AJAX.
        console.log(poinAchieve); // Anda dapat menampilkan nilainya di konsol untuk memeriksa

        // Jika Anda ingin mengirim nilai ini ke server, Anda dapat menggunakan AJAX atau mengganti metode tautan menjadi POST seperti yang disarankan sebelumnya.
    });
</script>