<?php
/**
 * /_includes/settings/reporting-domain-cost-by-tld.inc.php
 *
 * This file is part of DomainMOD, an open source domain and internet asset manager.
 * Copyright (c) 2010-2017 Greg Chetcuti <greg@chetcuti.com>
 *
 * Project: http://domainmod.org   Author: http://chetcuti.com
 *
 * DomainMOD is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later
 * version.
 *
 * DomainMOD is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with DomainMOD. If not, see
 * http://www.gnu.org/licenses/.
 *
 */
?>
<?php
$page_title = "Domain Cost by TLD Report";
$breadcrumb = "Domain Cost by TLD";
$software_section = "reporting";
$software_section_logo = "fa-bar-chart";
$slug = "reporting-domain-cost-by-tld";
$report_section = 'domains';
$report_filename = 'cost-by-tld.php';
$datatable_css = '#' . $slug . ' thead th { padding: 2px 0px 2px 6px; border: 0; white-space: nowrap; }
                  #' . $slug . ' tbody tr:hover { background-color: #dddddd; }
                  #' . $slug . ' tbody td { padding: 2px 0px 2px 6px; border: 0; white-space: nowrap; }';
$datatable_class = 'table table-striped dt-responsive cell-border compact';
$datatable_options = 'var oldStart = 0;
                      $(\'#' . $slug . '\').DataTable({
                          "paging": false,
                          "lengthChange": true,
                          "lengthMenu": [ [25, 50, 75, 100, -1], [25, 50, 75, 100, "All"] ],
                          "searching": false,
                          "info": false,
                          "autoWidth": true,
                          "bAutoWidth": false,
                          "responsive": {
                               details: {
                                         type: "column"
                                        }
                                        },
                          "columnDefs": [ {
                                           className: "control",
                                           orderable: false,
                                           targets:   0
                                           } ],
                          "ordering": true,
                          "order": [[ 1, "asc" ]],
                          "bSortClasses": false,
                          "dom": \'<"top"lif>rt<"bottom"ip><"clear">\',
                          "fnDrawCallback": function (o) {
                            if ( o._iDisplayStart != oldStart ) {
                                var targetOffset = $("#' . $slug . '").offset().top;
                                $("html,body").animate({scrollTop: targetOffset}, 0);
                                oldStart = o._iDisplayStart;
                            }
                          }
                      });';
