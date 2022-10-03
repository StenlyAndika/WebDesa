        </div>
    </section>
    </body>
    <!-- JAVASCRIPTS -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/template-script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    
    <script>
        $(document).ready(function() {
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
    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'sejarah/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'sejarah/ubah') : ?>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('sejarah');
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'agenda/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'agenda/ubah') : ?>
    <script>
        $(document).ready(function() {
            $('#jam').timepicker({
                timeFormat: 'HH:mm',
            });
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'visimisi/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'visimisi/ubah') : ?>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('visi');
            CKEDITOR.replace('misi');
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'struktur/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'struktur/ubah') : ?>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('tugas');
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'berita/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'berita/ubah') : ?>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('isi');
        });
    </script>
    <?php endif; ?>

    <?php if($this->uri->segment(1)."/".$this->uri->segment(2) == 'pelayanan/tambah' || $this->uri->segment(1)."/".$this->uri->segment(2) == 'pelayanan/ubah') : ?>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('standar');
        });
    </script>
    <?php endif; ?>
</html>