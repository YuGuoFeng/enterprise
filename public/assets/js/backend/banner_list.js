define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'banner_list/index' + location.search,
                    add_url: 'banner_list/add',
                    edit_url: 'banner_list/edit',
                    del_url: 'banner_list/del',
                    multi_url: 'banner_list/multi',
                    import_url: 'banner_list/import',
                    table: 'banner_list',
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
                        {field: 'title', title: __('Title'), operate: 'LIKE'},
                        {field: 'en_title', title: __('En_title'), operate: 'LIKE'},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        // {field: 'url', title: __('Url'), operate: 'LIKE', formatter: Table.api.formatter.url},
                        {field: 'weigh', title: __('Weigh'), operate: false},
                        {
                            field: 'status',
                            title: __('Status'),
                            table: table,
                            custom: {"0": 'success', "1": 'danger'},
                            searchList: {"0": __('Status 0'), "1": __('Status 1')},
                            formatter: Table.api.formatter.status
                        },
                        {field: 'entry_time', title: __('Entry_time'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
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