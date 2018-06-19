$(function(){
    $('#select-item').selectize({
        valueField: 'id',
        labelField: 'model',
        searchField: ['model', 'brand'],
        maxItems: 1,
        options: [],
        create: false,
        render: {
            item: function(item, escape) {
                return '<div>' +
                    (item.brand ? '<span class="brand">' + escape(item.brand) + ' </span>' : '') +
                    (item.model ? '<span class="model">' + escape(item.model) + '</span>' : '') +
                '</div>';
            },
            option: function(item, escape) {
                var label = item.brand || item.model;
                var caption = item.brand ? item.model : null;
                return '<div>' +
                    '<span class="label"><b>' + escape(label) + '</b><br></span>' +
                    (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                '</div>';
            }
        },
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: '/search-item',
                type: 'GET',
                dataType: 'json',
                data:{
                    qry:query
                },
                error: function() {
                    callback();
                },
                success: function(res) {
                    callback(res.items);
                }
            });
        }
    });
});