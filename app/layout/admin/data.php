


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa Kelas XII</h4>
                <h6 class="card-subtitle">IPA</h6>
                <div class="table-responsive m-t-40">
                    <div id="example23_wrapper" class="dataTables_wrapper">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" role="grid" aria-describedby="example23_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 172px;">Name</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending"
                                        style="width: 271px;" aria-sort="ascending">Position</th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 128px;">Office</th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                                        style="width: 65px;">Age</th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                                        style="width: 118px;">Start date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 100px;">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="">Sakura Yamamoto</td>
                                    <td class="sorting_1">Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="">Quinn Flynn</td>
                                    <td class="sorting_1">Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="">Tiger Nixon</td>
                                    <td class="sorting_1">System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="">Gloria Little</td>
                                    <td class="sorting_1">Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="">Lael Greer</td>
                                    <td class="sorting_1">Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="">Gavin Cortez</td>
                                    <td class="sorting_1">Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="">Muhammad Wafa</td>
                                    <td class="sorting_1">Program Developer</td>
                                    <td>Samirono</td>
                                    <td>20</td>
                                    <td>2008/10/26</td>
                                    <td>$1,235,500</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="">Prescott Bartlett</td>
                                    <td class="sorting_1">Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Position</th>
                                    <th rowspan="1" colspan="1">Office</th>
                                    <th rowspan="1" colspan="1">Age</th>
                                    <th rowspan="1" colspan="1">Start date</th>
                                    <th rowspan="1" colspan="1">Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$costum_js .= <<< HTML
?>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' +
                                group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>

    <?php
HTML;
?>