define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'text/honor/awards_type/index' + location.search,
                    add_url: 'text/honor/awards_type/add',
                    edit_url: 'text/honor/awards_type/edit',
                    del_url: 'text/honor/awards_type/del',
                    multi_url: 'text/honor/awards_type/multi',
                    import_url: 'text/honor/awards_type/import',
                    table: 'awards_type',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'name', title: __('Name'), operate: 'LIKE'},
                        {field: 'en_name', title: __('En_name'), operate: 'LIKE'},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {
                            field: 'status',
                            title: __('Status'),
                            table: table,
                            custom: {"0": 'success', "1": 'danger'},
                            searchList: {"0": __('Status 0'), "1": __('Status 1')},
                            formatter: Table.api.formatter.status
                        },
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});