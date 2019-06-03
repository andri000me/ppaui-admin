
<?php

$status=array(0=>'Lunas',1=>'Pembayaran Ke 1',2=>'Pembayaran Ke 2',3=>'Pembayaran Ke 3',4=>'Pembayaran Ke 4');
echo form_open('keuangan');
?>
<table class="table table-bordered">
    <tr class="success"><td colspan="2">PERIODE LAPORAN</td></tr>
    <tr><td width="150">Tanggal Mulai</td><td><?php echo inputan('text', 'tanggal1','col-sm-3','Tanggal Awal ..', 1, $tanggal1,array('id'=>'datepicker'));?></td></tr>
     <tr><td>Tanggal Sampai</td><td><?php echo inputan('text', 'tanggal2','col-sm-3','Tanggal Akhir ..', 1, $tanggal2,array('id'=>'datepicker1'));?></td></tr>
     <tr><td colspan="2"><input type="submit" name="submit" value="Preview" class="btn btn-danger  btn-sm"> 
             <?php echo anchor(base_url().'keuangan/laporanpembayaran/'.$tanggal1.'/'.$tanggal2.'/cetak','cetak',array('class'=>'btn btn-danger   btn-sm','target'=>'_blank'))?>
             <?php echo anchor(base_url().'keuangan/laporanpembayaran/'.$tanggal1.'/'.$tanggal2.'/download','Export Ke Ms.Word',array('class'=>'btn btn-danger   btn-sm','target'=>'_blank'))?>
</table>

<table id="example-datatables" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th></th>
            <th>No.</th>
			<th width="120">Tanggal</th>
			<th>Nama</th>
			<th>No. Handphone</th>
			<th>Email</th>
			<th>Pelatihan Utama</th>
			<th>Keterangan</th>
			<th>Pelatihan Lain</th>
			<th width="120">Tanggal Tindak Lanjut</th>
			<th>Tindak Lanjut</th>
			<th>User</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        $i=1;
        foreach ($record as $r)
        {
        ?>
        
        <tr>
            <td class="text-center">
                <div class="btn-group">
                    <a href="<?php echo base_url().''.$this->uri->segment(1).'/edit/'.$r->id;?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url().''.$this->uri->segment(1).'/delete/'.$r->id;?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </td>
            <td><?php echo $i;?></td>
			<td><?php echo ($r->tgl)?></td>
			<td><?php echo ucwords($r->nama)?></td>
			<td><?php echo ($r->no_hp)?></td>
			<td><?php echo strtolower($r->email)?></td>
            <td><?php echo strtoupper($r->pel)?></td>  							
			<td><?php echo ($r->ket)?></td>
			<td><?php echo strtoupper($r->prodis)?></td>
			<td><?php echo ($r->tgltin)?></td>	
			<td><?php echo ($r->tindakan)?></td>								
			<td><?php echo ucwords($r->username)?></td>
        </tr>
        <?php $i++;}?>
        
        
    </tbody>
</table>
<!-- END Datatables -->


</form>
<?php
if(isset($_POST['submit']))
{
?>
<table class="table table-bordered">
		<tr><th width="10">No</th>
		<th width="200">Tanggal</th>
        <th width="70">NIP</th>
        <th>Nama Peserta</th>
        <th width="200">Nama Pelatihan</th>
        <th width="100">Jenis Bayar</th>
        <th width="60">Jumlah</th></tr>
    <?php
    $no=1;
    $jumlah=0;
    foreach ($transaksi as $r)
    {
        echo "<tr>
            <td>$no</td>
            <td>".  tgl_indo($r->tanggal)."</td>
            <td>".  strtoupper($r->nim)."</td>
            <td>".  strtoupper($r->nama)."</td>
            <td>".  strtoupper($r->nama_konsentrasi)."</td>
            <td>".  strtoupper($r->keterangan)."</td>
     
            <td align='right'>".  rp((int)$r->jumlah)."</td>
            </tr>";
        $jumlah=$jumlah+$r->jumlah;
        $no++;
    }
    ?>
    <tr><td colspan="6"><p align='right'>Grand Total</p></td><td align='right'><?php echo rp($jumlah);?></td></tr>
</table>
<?php } ?>

<script type="text/javascript">
function cetak(id,id2)
{
    window.open('http://localhost/pelatihan_ppa/keuangan/cetak/','1397003076569','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
}
</script>



