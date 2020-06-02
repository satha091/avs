  <!-- Footer -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="pull-right hide-phone">
                               All Rights Reserved &  Copyright © 2020.
                            </div>
                            <div>
                                Designed And Developed By <a href="http://hridhamtech.com"><strong>Hridham Technologies</strong></a>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end wrapper -->






    </body>
</html>
  <!-- jQuery  -->
        <script src="{{ url('js/jquery.min.js')}}"></script>
        <script src="{{ url('js/popper.min.js')}}"></script>
        <script src="{{ url('js/bootstrap.min.js')}}"></script>
        <script src="{{ url('js/jquery.slimscroll.js')}}"></script>

        <script src="{{ url('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{ url('plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{ url('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{ url('plugins/switchery/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js')}}"></script>

        <script src="{{ url('plugins/moment/moment.js')}}"></script>
        <script src="{{ url('plugins/timepicker/bootstrap-timepicker.js')}}"></script>
        <script src="{{ url('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ url('plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
        <script src="{{ url('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ url('plugins/summernote/summernote-bs4.min.js')}}"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


        <script type="text/javascript">
  var table = $('#example').DataTable( {
        lengthChange: false,


        "scrollX": true,

        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );

    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
            </script>

       <!-- <script type="text/javascript" src=https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>


        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

        <script type="text/javascript">
$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

        <!-- form advanced init js -->
        <script src="{{ url('pages/jquery.form-advanced.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ url('js/jquery.core.js')}}"></script>
        <script src="{{ url('js/jquery.app.js')}}"></script>
