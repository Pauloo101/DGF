$(function () {
    $('#example5').Tabledit({
        url: '/record',
        dataType: 'json',
        rowIdentifier: 'data-id',
        editButton: false,
        restoreButton: false,
        dangerClass:'danger',
        warningClass:'warning',
        mutedClass:'text-muted',
        buttons: {
            delete: {
                class: 'btn btn-sm btn-danger',
                html: '<span class="fa fa-trash"></span>',
                action: 'delete',
            },
            confirm: {
                class: 'btn btn-sm btn-default',
                html: 'confirm?',
            }
        },
        columns: {
            identifier: [0, 'id'],
            editable: [[1,'name'], [2, 'price'], [3, 'quantity'], [4, 'category']]
        },
        onSuccess: function (data, textStatus, jqXHR) {


        },
        onAjax: function (action, serialize) {
            var msg = action;
            if (msg == "edit"){
                Toast.fire({
                    type: 'success',
                    title: 'product updated'
                });
            }else {
                Toast.fire({
                    type: 'success',
                    title: 'product Deleted'
                });
            }
            console.log("on Ajax");
            console.log("action : ", action);
            console.log("data : ", serialize);
        },
        onFail: function (jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
    });
})