    </div>
    </body>
    <!-- JAVASCRIPTS -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/template-script.js"></script>

    <script>
        $(document).ready(function() {
            CKEDITOR.replace('sejarah');
            CKEDITOR.replace('visi');
            CKEDITOR.replace('misi');
            CKEDITOR.replace('tugas');
            CKEDITOR.replace('isi');
            CKEDITOR.replace('standar');

            $("#tgl").datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
                language : 'id'
            });
            
            $('#datatable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': true,
                "language":{
                    "url":"https://cdn.datatables.net/plug-ins/1.11.5/i18n/id.json",
                    "sEmptyTable":"Tidak ada data."
                }
            });
        });
    </script>
</html>