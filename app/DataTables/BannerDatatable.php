<?php

namespace App\DataTables;
use Yajra\DataTables\Services\DataTable;


use App\Models\Banner;

class BannerDatatable extends DataTable {



    public function dataTable($query) {
        return datatables($query)
            ->addColumn('edit', 'admin.banners.btn.edit')
            ->addColumn('checkbox', 'admin.banners.btn.checkbox')
            ->addColumn('delete', 'admin.banners.btn.delete')
            ->addColumn('img', 'admin.banners.btn.img')
            ->rawColumns([
                'edit',
                'checkbox',
                'delete',
                'img',
            ]);
    }

    public function query()
    {
        return Banner::query();
    }


    public function html() {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                // 'responsive' => true,
                'dom'        => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],
                'buttons'    => [

                    // ['text' => '<i class="fa fa-plus"></i> '.'اضافة مشرف جديد', 'className' => 'btn btn-info', "action" => "function(){
                    // 		window.location.href = '".\URL::current()."/create';
                    // 	}"],

                    ['extend' => 'print', 'className' => 'btn btn-primary btn_space', 'text' => '<i class="fa fa-print"></i> '.trans('admin.print')],
                    ['extend' => 'csv', 'className' => 'btn btn-info btn_space', 'text' => '<i class="fa fa-file"></i> '.trans('admin.ex_csv')],
                    ['extend' => 'excel', 'className' => 'btn btn-success btn_space', 'text' => '<i class="fa fa-file"></i> '.trans('admin.ex_excel')],
//                    ['extend' => 'pdf', 'className' => 'btn btn-info btn_space', 'text' => 'PDF <i class="fa fa-file"></i> '],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn_space', 'text' => '<i class="fa 	fa-sync"></i>'],

                    //Trash
//                    ['text' => '<i class="fa fa-trash"></i>', 'className' => 'btn btn-danger delBtn btn_space'],

                ],

                'initComplete' => " function () {

		            this.api().columns([1]).every(function () {


		                var column = this;
		                var input = document.createElement(\"input\");

		                // add placeholder
										$('.form-control-sm').attr('placeholder', '".trans('admin.Search')."');

										// add placeholder
		                $(input).attr('placeholder', '".trans('admin.Search')."').addClass('form-control form-control-sm').css('border','1px solid rgb(177, 177, 177)');



		                $(input).appendTo($(column.footer()).empty())
		                .on('keyup', function () {
		                    column.search($(this).val(), false, false, true).draw();
		                });
		            });
		        }",

                // from helper @@@@@@@@@@@
                'language' => datatable_lang(),

            ]);
    }



    protected function getColumns() {

        $data = [
                    [
                        'name'       => 'checkbox',
                        'data'       => 'checkbox',
                        'title'      => '<div class="pretty p-default">
                                                            <input type="checkbox" class="check_all" onclick="check_all()" />
                                                            <div class="state p-warning-o">
                                                                <label></label>
                                                            </div>
                                                       </div>',
                        'exportable' => false,
                        'printable'  => false,
                        'orderable'  => false,
                        'searchable' => false,
                    ], [
                        'name'  => 'title',
                        'data'  => 'title',
                        'title' => 'الصفحة',
                    ],
                    [
                        'name'  => 'img',
                        'data'  => 'img',
                        'title' => 'الخلفيه',
                    ],
                    [
                        'name'       => 'edit',
                        'data'       => 'edit',
                        'title'      => trans('admin.edit'),
                        'exportable' => false,
                        'printable'  => false,
                        'orderable'  => false,
                        'searchable' => false,
                    ],
//                    [
//                        'name'       => 'delete',
//                        'data'       => 'delete',
//                        'title'      => trans('admin.delete'),
//                        'exportable' => false,
//                        'printable'  => false,
//                        'orderable'  => false,
//                        'searchable' => false,
//                    ],
                ];

        return $data;
    }



    protected function filename() {
        return 'banner_'.date('YmdHis');
    }



}

