<?php 
						error_reporting(0);
						$b=$data->row_array();
					?>
<table>
  <tr>
    <th style="width:200px;"></th>
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>Kategori</th>
    <th>Jumlah</th>
  </tr>
  <tr>
    <td style="width:200px;">
      </th>
    <td><input type="text" name="barang" value="<?php echo $b['barang_nama'];?>" style="width:400px;margin-right:5px;"
        class="form-control input-sm" readonly></td>
    <td><input type="text" name="satuan" value="<?php echo $b['satuan_nama'];?>" style="width:120px;margin-right:5px;"
        class="form-control input-sm" readonly></td>
    <td><input type="text" name="kategori" value="<?php echo $b['kategori_nama'];?>" style="width:130px;margin-right:5px;"
        class="form-control input-sm" readonly></td>
    <td><input type="text" name="jumlah" id="jumlah" class="form-control input-sm" style="width:90px;margin-right:5px;"
        required></td>
    <td><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button></td>
  </tr>
</table>