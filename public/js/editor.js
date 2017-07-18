$(document).ready(function () {        
    $('#summernote').summernote({
        height: 370,                 // set editor height
        minHeight: 370,             // set minimum height of editor
        maxHeight: null,             // set maximum height
        callbacks: {
            // onInit: function(e) {
            //   $("#summernote").summernote("fullscreen.toggle");
            // },
            onImageUpload: function (files, editor, $editable) {
                for (var i = files.length - 1; i >= 0; i--) {
                    sendFile(files[i], editor);
                    console.log(files[i], editor);
                }
            }
        }
    });
    $('.note-codable').keyup(function(){
      $('#summernote').html(this.value);
    });
    function sendFile(file, el) {
        data = new FormData();
        data.append("file", file);
        data.append("tmpPath", $('.tmpPath').val());
        data.append("_token", $('meta[name="csrf-token"]').attr('content'));                
        jQuery.ajax({
            url: '{{ action('backend\ImagesController@uploadFile') }}',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            type: 'POST',
            success: function (s) {
                console.log(s);
                $('#summernote').summernote('insertImage', s, function ($image) {
                    $image.css('width', '100%');
                    $image.attr('class', 'img-responsive lazy');
                    $image.attr('data-original', s);
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " " + textStatus + " " + errorThrown);
            }
        });
    }
});