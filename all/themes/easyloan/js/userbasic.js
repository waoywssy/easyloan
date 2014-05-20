(function ($, Drupal, window, document, undefined) {
/// assing options to a select input
///
///  json - the json string
///  target - id of the select input 
function getSelectOptions(json, target){
  var len = json.length;
  $('#' + target).empty().append('<option value="">请选择</option>');
  for(var j = 0; j < len; j++) {
      var option = $('<option/>');
      option.attr('value', json[j].id); // fixed typo
      option.append(json[j].name);
      $('#' + target).append(option);
  }
}

// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.userbasic = {
  attach: function(context, settings) {
      getSelectOptions(provinces, 'province');
      getSelectOptions(educations, 'education');

      jQuery.cachedScript = function( url, options ) {
        // Allow user to set any option except for dataType, cache, and url
        options = $.extend( options || {}, {
          dataType: "script",
          cache: false,
          url: url,
        });
        return jQuery.ajax( options );
      };

      var cityCache = {}; // cache the city lists so it won't send another request 
      $('#province').change(function(event) {
        var cityid = $("#province option:selected").val();
        if (cityid){
            if (cityCache.hasOwnProperty(cityid)){
              getSelectOptions(cityCache[cityid], 'city');
              //console.log(cityCache[cityid]);
            } else {
              var url = js_path + 'city/cities_' + cityid + '.js';
              $.cachedScript(url).done(function(data, textStatus) {
                var cities = eval('cities_' + cityid);
                cityCache[cityid] = cities;
                getSelectOptions(cities, 'city');
              });  
            }
          }
      });

      var validateForm = function(){
        $("#userInfoForm").validate({
          errorPlacement: function(error, element) {
            element.parent().append(error); // default function
          },
          rules: {/*
            education: {
              required: true,
              number:true,
            },
            province: {
              required: true,
              number:true,
            },
            city: {
              required: true,
              number:true,
            },*/
            address:{
              required: true,
            }
          },
          messages: {/*
            education: {
              required: "受教育程度不能为空",
              number: "请选择受教育程度",
            },
            province: {
              required: "省份不能为空",
              number: "请选择省份",
            },
            city: {
              required: "城市不能为空",
              number: "请选择城市",
            },*/
            address: {
              required: "居住地不能为空",
            },
          }
        });
      };


    $("#modiForm").click(
      function(){
        "修改信息"!=$(this).text()?($(this).html("修改信息")):($(this).html("取消修改"))
      }
    )


  }
};


})(jQuery, Drupal, this, this.document);
