(function ($) {

    var AdvancedClasses = {
        onReady: function () {
            this.buildForm();
            this.onChangeSelectFields();
            this.setSelectFieldsFromCss();
        },
        buildForm: function () {
            if(typeof $('#ctrl_advancedCss') != "undefined") {

                var rootElem = $('#pal_advanced_classes_legend');
                // append form container
                var container = $( "<div id='advancedFormContainer'/>" );
                $(rootElem).append(container);

                formConfig['sets'].forEach(function(acSet) {
                    var container = $( "<div id='"+acSet["id"]+"'/>" );
                    $("#advancedFormContainer").append(container);

                    var headline = '<h3 class="'+acSet["class"]+'"><label>'+acSet["headline"]+'</label></h3>';
                    $("#"+acSet["id"]).append(headline);

                    // append values
                    acSet['values'].forEach(function(setValue) {

                        // select
                        if(setValue['type'] == 'select') {
                            var select = '<div class="value '+setValue["class"]+' '+setValue['type']+'" for="advanced-form-'+setValue['id']+'"><select id="advanced-form-'+setValue['id']+'" name="advanced-form-'+setValue['id']+'"><option>-</option></option></select></div>';
                            $("#"+acSet["id"]).append(select);
                            setValue['options'].forEach(function(option) {
                                AdvancedClasses.formHelperGetOption(option, "#advanced-form-"+setValue['id']);
                            });
                        }

                        // @todo add other options if needed
                    });

                });
            }


        },

        formHelperGetOption:function (arr, parentElem) {
            // append options
            var option = $('<option/>');
            option.attr({ 'value': arr['value'] }).text(arr['title']);
            $(parentElem).append(option);
        },

        onChangeSelectFields: function () {
            var previous = new Array();
            $("#advancedFormContainer select").on('focus', function () {
                // store current value on focus and on change
                previous[this.id] = this.value;
            }).change(function() {
                var advancedCss = $("#ctrl_advancedCss").val();
                advancedCss = advancedCss.split(" ");
                if(this.value != "-" && previous[this.id] != "-") {
                    var del = advancedCss.indexOf(previous[this.id]);
                    advancedCss.splice(del, 1);
                    advancedCss.push(this.value);
                }
                else if(this.value == "-" && previous[this.id] != "") {
                    var del = advancedCss.indexOf(previous[this.id]);
                    advancedCss.splice(del, 1);
                } else
                    advancedCss.push(this.value);

                // write array to css class
                $("#ctrl_advancedCss").val(advancedCss.join(" "));
                // update the previous value
                previous[this.id] = this.value;
            });
        },
        setSelectFieldsFromCss: function () {
            var advancedCss = $("#ctrl_advancedCss").val();
            advancedCss = advancedCss.split(" ");
            advancedCss.forEach(function(cssClass){
                $('#advancedFormContainer select option[value="' + cssClass + '"]').prop('selected', true).attr('selected', 'selected');
            });
        }
    }

    $(document).ready(function () {
        AdvancedClasses.onReady()
    });

})(jQuery);

/**
 * for testing / Bootstrap
 * @todo export to file or db to manually add config
 * */

formConfig = new Array();
formConfig["sets"] = new Array();
formConfig["title"] = "bootstrap";
formConfig["sets"][0] = new Array();
formConfig["sets"][0]["id"] = "columnSet";
formConfig["sets"][0]["headline"] = "Spaltenbreiten festlegen";
formConfig["sets"][0]["class"] = "icon-th-large";
// smartphone
formConfig["sets"][0]["values"] = new Array();
formConfig["sets"][0]["values"][0] = new Array();
formConfig["sets"][0]["values"][0]["options"] = new Array();
formConfig["sets"][0]["values"][0]["id"]= "columnSetSelect1";
formConfig["sets"][0]["values"][0]["type"]= "select";
formConfig["sets"][0]["values"][0]["class"]= "icon-mobile ac-w25";
formConfig["sets"][0]["values"][0]["options"][0] = new Array();
formConfig["sets"][0]["values"][0]["options"][0]["title"] = '.col-xs-1';
formConfig["sets"][0]["values"][0]["options"][0]["value"] = 'col-xs-1';
formConfig["sets"][0]["values"][0]["options"][1] = new Array();
formConfig["sets"][0]["values"][0]["options"][1]["title"] = '.col-xs-2';
formConfig["sets"][0]["values"][0]["options"][1]["value"] = 'col-xs-2';
// tablet
formConfig["sets"][0]["values"][1] = new Array();
formConfig["sets"][0]["values"][1]["options"] = new Array();
formConfig["sets"][0]["values"][1]["id"]= "columnSetSelect2";
formConfig["sets"][0]["values"][1]["type"]= "select";
formConfig["sets"][0]["values"][1]["class"]= "icon-tablet ac-w25";
formConfig["sets"][0]["values"][1]["options"][0] = new Array();
formConfig["sets"][0]["values"][1]["options"][0]["title"] = '.col-sm-1';
formConfig["sets"][0]["values"][1]["options"][0]["value"] = 'col-sm-1';
formConfig["sets"][0]["values"][1]["options"][1] = new Array();
formConfig["sets"][0]["values"][1]["options"][1]["title"] = '.col-sm-2';
formConfig["sets"][0]["values"][1]["options"][1]["value"] = 'col-sm-2';
// laptop
formConfig["sets"][0]["values"][2] = new Array();
formConfig["sets"][0]["values"][2]["options"] = new Array();
formConfig["sets"][0]["values"][2]["id"]= "columnSetSelect3";
formConfig["sets"][0]["values"][2]["type"]= "select";
formConfig["sets"][0]["values"][2]["class"]= "icon-laptop ac-w25";
formConfig["sets"][0]["values"][2]["options"][0] = new Array();
formConfig["sets"][0]["values"][2]["options"][0]["title"] = '.col-md-1';
formConfig["sets"][0]["values"][2]["options"][0]["value"] = 'col-md-1';
formConfig["sets"][0]["values"][2]["options"][1] = new Array();
formConfig["sets"][0]["values"][2]["options"][1]["title"] = '.col-md-2';
formConfig["sets"][0]["values"][2]["options"][1]["value"] = 'col-md-2';
// desktop
formConfig["sets"][0]["values"][3] = new Array();
formConfig["sets"][0]["values"][3]["options"] = new Array();
formConfig["sets"][0]["values"][3]["id"]= "columnSetSelect4";
formConfig["sets"][0]["values"][3]["type"]= "select";
formConfig["sets"][0]["values"][3]["class"]= "icon-laptop ac-w25";
formConfig["sets"][0]["values"][3]["options"][0] = new Array();
formConfig["sets"][0]["values"][3]["options"][0]["title"] = '.col-md-1';
formConfig["sets"][0]["values"][3]["options"][0]["value"] = 'col-md-1';
formConfig["sets"][0]["values"][3]["options"][1] = new Array();
formConfig["sets"][0]["values"][3]["options"][1]["title"] = '.col-md-2';
formConfig["sets"][0]["values"][3]["options"][1]["value"] = 'col-md-2';