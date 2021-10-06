<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Laporan Barang Masuk</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'/assets/images/favicon.png'?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/laporan.css')?>" />
</head>

<body onload="window.print()">
    <div id="laporan">
        <table align="center"
            style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <!-- <tr>
            <td><img src="<?php echo base_url().'assets/img/kop_surat.png'?>"/></td>
            </tr> -->
        </table>

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>
                <td colspan="2" style="width:800px;padding-left:20px;">
                    <center>
                        <h3>LAPORAN BARANG KELUAR</h3>
                        <p>TOKO PRIMA MART BATANG</p>
                    </center><br />
                </td>
            </tr>

        </table>

        <table border="0" align="center" style="width:900px;border:none;">
            <tr>
                <th style="text-align:left"></th>
            </tr>
        </table>
        <table border="0" align="center" style="width:900px; border:none; margin-bottom:10px;">
            <tr>
                <th style="text-align:left; width: 100px">Dicetak Oleh</th>
                <th></th>
                <th style="text-align:left;">: <?php echo $this->session->userdata('ses_name');?> </th>
            </tr>
            <tr>
                <th style="text-align: left; width: 100px">Pada Tanggal</th>
                <th></th>
                <th style="text-align: left;">: <?php echo date('d-M-Y') ?> </th>
            </tr>
        </table>
        <?php 
        $b=$jml->row_array();
        ?>
        <table border="1" align="center" style="width:900px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th colspan="7" style="text-align:left;">Tanggal : <?php echo $this->session->userdata('awal1');?> - <?php echo $this->session->userdata('ahir1');?>
                    </th>
                </tr>
                <tr>
                    <th style="width:50px;">No</th>
                    <th>No Transaksi</th>
                    <th>Tanggal</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                <?php 
        $no=0;
        foreach ($data->result_array() as $i) {
        $no++;
        $nofak=$i['produk_id'];
        $tgl=$i['tanggal'];
        $barang_id=$i['d_keluar_barang_id'];
        $barang_nama=$i['barang_nama'];
        $barang_satuan=$i['satuan_nama'];
        $barang_qty=$i['d_keluar_jumlah'];
        ?>
                <tr>
                    <td style="text-align:center;"><?php echo $no;?></td>
                    <td style="padding-left:5px;"><?php echo $nofak;?></td>
                    <td style="text-align:center;"><?php echo $tgl;?></td>
                    <td style="text-align:center;"><?php echo $barang_id;?></td>
                    <td style="text-align:left;"><?php echo $barang_nama;?></td>
                    <td style="text-align:left;"><?php echo $barang_satuan;?></td>
                    <td style="text-align:center;"><?php echo $barang_qty;?></td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" style="text-align:center;"><b>Total</b></td>
                    <td style="text-align:center;"><b><?php echo $b['total'];?></b></td>
                </tr>
            </tfoot>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right">Batang, <?php echo date('d-M-Y')?></td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="right">( Syamsul Ali )</td>
            </tr>
            <tr>
                <td align="center"></td>
            </tr>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <th><br /><br /></th>
            </tr>
            <tr>
                <th align="left"></th>
            </tr>
        </table>
    </div>
</body>

</html>_