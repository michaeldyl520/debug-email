define([
    'jquery',
    'Magento_Ui/js/grid/columns/actions',
    'Magento_Ui/js/modal/modal',
], function ($, Actions) {
    'use strict';

    function strip(html){
        var doc = new DOMParser().parseFromString(html, 'text/html');
        console.log(doc);
        return doc.body.textContent || "";
    }

    return Actions.extend({

        defaultCallback: function (actionIndex, recordId, action) {
            if(actionIndex !== "preview" || this.rows[action.rowIndex] === undefined || this.rows[action.rowIndex].subject === undefined){
                this._super();
            }
            let bodyString = strip(this.rows[action.rowIndex].body);
            bodyString = '<iframe srcdoc="'+bodyString+'"></iframe>';
            $('<div class="test12345"/>').html(bodyString).modal({type:'slide',title: this.rows[action.rowIndex].subject,modalClass:'preview-email',innerScroll: true, buttons: []}).trigger('openModal');
        }
    })
});