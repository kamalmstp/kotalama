<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template/admin') ?>/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/template/admin') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template/admin') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template/admin') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template/admin') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert -->
<script src="<?= base_url('assets/swal') ?>/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/js/myscript.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/template/admin') ?>/plugins/chart.js/Chart.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/template/admin') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<script>
    $(function() {

        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>