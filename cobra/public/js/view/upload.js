$(document).ready(function(){
  $("#input-id").fileinput();
  // with plugin options
  $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
});

function validate()
{
  var src = $(".kv-file-content").find("img").attr('src');
  $("#image").val(src);
  $("#post").submit();
}
