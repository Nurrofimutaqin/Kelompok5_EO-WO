 <script src=" {{ asset('assets_admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
 <script src=" {{ asset('assets_admin/js/bootstrap.bundle.min.js') }} "></script>

 <script src=" {{ asset('assets_admin/vendors/apexcharts/apexcharts.js') }} "></script>
 <script src=" {{ asset('assets_admin/js/pages/dashboard.js') }} "></script>

 <script src=" {{ asset('assets_admin/vendors/simple-datatables/simple-datatables.js') }} "></script>
 <script>
     // Simple Datatable
     let table1 = document.querySelector('#table1');
     let dataTable = new simpleDatatables.DataTable(table1);
 </script>

 <script src=" {{ asset('assets_admin/js/main.js') }} "></script>

 <!-- DataTables  & Plugins -->
 <script src="{{ asset('assets_admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

 <script>
     $(function() {
         $("#datatable1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#datatable1_wrapper .col-md-6:eq(0)');
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
