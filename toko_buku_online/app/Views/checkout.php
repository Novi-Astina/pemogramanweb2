<?=$this->extend('template')?>


<?= $this->section('main')?>
<div class="container mb-3">Checkout</h2>
<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Detail Buku</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        </tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="<?=base_url('images/img 1.jpg'); ?>" alt=""
                    style="width:150px; height:auto;">
                    <h6>Filosofi Teras</h6>
                </td>
                <td>
                    x1
                </td>
                <td>
                    Rp85.000 
                </td>
                <td>
                    Rp85.000
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h2 class="mb-5">Total : Rp170.000</h2>
<h2 class="mb-3">Data Pembeli</h2>
<div class="mb-5">
    Emely Smith<br />
    082366789987 <br />
    emely.019@gmail.com
</div>
<h2 class="mb-3">Alamat Pengiriman</h2>
<div class="mb-5">
    <span>Jl. Km 16, Simpang Sungai Duren, Muaro jambi.</span>
</div>

<h2 class="mb-3">Metode Bayar</h2>
<div class="mb-5">
    Transfer Bank <br />
    BCA, Jamess Smith <br />
    111222333444
</div>
<div class="mb-5">
    <a href="<?=base_url('submit')?>" class= " btn btn-primary">Submit</a>
</div>
</div>

<?=$this->endSection()?>