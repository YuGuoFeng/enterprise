/* define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'text/project/type/index' + location.search,
                    add_url: 'text/project/type/add',
                    edit_url: 'text/project/type/edit',
                    del_url: 'text/project/type/del',
                    multi_url: 'text/project/type/multi',
                    import_url: 'text/project/type/import',
                    table: ' project_type',
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
                        {field: 'pid', title: __('Pid')},
                        {field: 'name', title: __('Name'), operate: 'LIKE'},
                        {field: 'en_name', title: __('En_name'), operate: 'LIKE'},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {field: 'status', title: __('Status')},
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
}); */

define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init();
            this.table.first();
            this.table.second();
        },
        table: {
            first: function () {
                // 表格1
                var table1 = $("#table1");
                table1.bootstrapTable({
                    url: 'text/project/type/table1' + location.search,
                    extend: {
                        index_url: 'text/project/type/index' + location.search,
                        add_url: 'text/project/type/add',
                        edit_url: 'text/project/type/edit',
                        del_url: 'text/project/type/del',
                        multi_url: 'text/project/type/multi',
                        import_url: 'text/project/type/import',
                        table: ' project_type',
                    },
                    toolbar: '#toolbar1',
                    sortName: 'id',
                    search: false,
                    showToggle: false,
                    showColumns: false,
                    commonSearch: false,
                    searchFormVisible: false,
                    showExport: false,
                    columns: [
                        [
                            {checkbox: true},
                            {field: 'id', title: __('Id'), operate: false},
                            {field: 'name', title: __('Name'), operate: 'LIKE'},
                            {field: 'en_name', title: __('En_name'), operate: 'LIKE'},
                            {field: 'weigh', title: __('Weigh'), operate: false},
                            {
                                field: 'status',
                                title: __('Status'),
                                table: table1,
                                custom: {"0": 'success', "1": 'danger'},
                                searchList: {"0": __('Status 0'), "1": __('Status 1')},
                                formatter: Table.api.formatter.status
                            },
                            // {field: 'operate', title: __('Operate'), table: table1, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                            {
                                field: 'operate', title: __('Operate'), table: table1, events: Table.api.events.operate, buttons: [
                                    {
                                        name: 'log',
                                        title: '子列表',
                                        text: '子列表',
                                        icon: 'fa fa-list',
                                        classname: 'btn btn-primary btn-xs btn-click',
                                        click: function (e, data) {

                                            $("#myTabContent2 .form-commonsearch input[name='pid']").val(data.id);
                                            $("#myTabContent2 .btn-refresh").trigger("click");
                                        }
                                    }
                                ], formatter: Table.api.formatter.operate
                            }
                        ]
                    ]
                });

                // 为表格1绑定事件
                Table.api.bindevent(table1);
            },
            second: function () {
                // 表格2
                var table2 = $("#table2");
                table2.bootstrapTable({
                    url: 'text/project/type/table2' + location.search,
                    extend: {
                        index_url: 'text/project/type/index' + location.search,
                        add_url: 'text/project/type/add?type=2',
                        edit_url: 'text/project/type/edit?type=1',
                        del_url: 'text/project/type/del',
                        multi_url: 'text/project/type/multi',
                        import_url: 'text/project/type/import',
                        table: ' project_type',
                    },
                    toolbar: '#toolbar2',
                    sortName: 'id',
                    search: false,
                    columns: [
                        [
                            {checkbox: true},
                            {field: 'id', title: __('Id')},
                            {field: 'pid', title: __('Pid')},
                            {field: 'name', title: __('Name'), operate: 'LIKE'},
                            {field: 'en_name', title: __('En_name'), operate: 'LIKE'},
                            {field: 'weigh', title: __('Weigh'), operate: false},
                            {
                                field: 'status',
                                title: __('Status'),
                                table: table2,
                                custom: {"0": 'success', "1": 'danger'},
                                searchList: {"0": __('Status 0'), "1": __('Status 1')},
                                formatter: Table.api.formatter.status
                            },
                            // {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                            // {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                            {field: 'operate', title: __('Operate'), table: table2, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                        ]
                    ]
                });

                // 为表格2绑定事件
                Table.api.bindevent(table2);
            }
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
