<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- <script type="text/javascript">
function printContent() {
  // console.log(1);
  $.ajax({
    type: 'POST',
    url: "https://siakad.poligon.ac.id/krs/cetak_krs/",
    data: 'ipk=' + $('#bobot').val(),
    success: function(datas, textStatus, jqXHR) {
      var restorepage = document.body.innerHTML;
      var printcontent = datas;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  });
}
</script> -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/node-waves/waves.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/autosize/autosize.js"></script>
    <!-- Moment Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/momentjs/moment.js"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script
        src="<?= base_url('assets'); ?>/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- Custom Js -->
    <script src="<?= base_url('assets'); ?>/js/admin.js"></script>

    <script src="<?= base_url('assets'); ?>/js/pages/ui/dialogs.js"></script>

    <script src="<?= base_url('assets'); ?>/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url('assets'); ?>/js/demo.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js">
    </script>

    <script src="<?= base_url('assets'); ?>/js/pages/tables/jquery-datatable.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap-notify/bootstrap-notify.js"></script>
</body>

</html>