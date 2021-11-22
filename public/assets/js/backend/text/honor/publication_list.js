define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'text/honor/publication_list/index' + location.search,
                    add_url: 'text/honor/publication_list/add',
                    edit_url: 'text/honor/publication_list/edit',
                    del_url: 'text/honor/publication_list/del',
                    multi_url: 'text/honor/publication_list/multi',
                    import_url: 'text/honor/publication_list/import',
                    table: 'publication_list',
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
                        // {field: 'first_id', title: __('First_id')},
                        {field: 'image_type_id', title: __('Image_type_id')},
                        {field: 'title', title: __('Title'), operate: 'LIKE'},
                        // {field: 'address', title: __('Address'), operate: 'LIKE'},
                        // {field: 'description', title: __('Description'), operate: 'LIKE'},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'language', title: __('Language'), operate: 'LIKE'},
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