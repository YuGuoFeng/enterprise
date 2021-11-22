define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'text/project/projectlist/index' + location.search,
                    add_url: 'text/project/projectlist/add',
                    edit_url: 'text/project/projectlist/edit',
                    del_url: 'text/project/projectlist/del',
                    multi_url: 'text/project/projectlist/multi',
                    import_url: 'text/project/projectlist/import',
                    table: 'project_list',
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
                        {field: 'first_id.name', title: __('FirstId.name'), operate: 'LIKE'},
                        {field: 'projecttype.name', title: __('Projecttype.name'), operate: 'LIKE'},
                        // {field: 'first_id', title: __('First_id')},
                        // {field: 'second_id', title: __('Second_id')},
                        {field: 'title', title: __('Title'), operate: 'LIKE'},
                        {field: 'description', title: __('Description'), operate: 'LIKE'},
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
                        // {field: 'projecttype.id', title: __('Projecttype.id')},
                        // {field: 'projecttype.en_name', title: __('Projecttype.en_name'), operate: 'LIKE'},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);


            // 指定搜索条件
            $(document).on("click", ".btn-singlesearch", function () {
                var type = $(this).attr('data-type');
                
                var options = table.bootstrapTable('getOptions');
                var queryParams = options.queryParams;
                options.pageNumber = 1;

                options.queryParams = function (params) {
                    //这一行必须要存在,否则在点击下一页时会丢失搜索栏数据
                    params = queryParams(params);
                    //如果希望追加搜索条件,可使用
                    var filter = params.filter ? JSON.parse(params.filter) : {};
                    var op = params.op ? JSON.parse(params.op) : {};
                    filter.language = type;
                    op.language = '=';
                    params.filter = JSON.stringify(filter);
                    params.op = JSON.stringify(op);
                    //如果希望忽略搜索栏搜索条件,可使用
                    //params.filter = JSON.stringify({url: 'login'});
                    //params.op = JSON.stringify({url: 'like'});
                    return params;
                };
                table.bootstrapTable('refresh', {});
                // Toastr.info("当前执行的是自定义搜索,搜索URL中包含login的数据");
                return false;
            });
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