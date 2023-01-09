<link rel="stylesheet" href="{{ asset('css/jquery.Jcrop.min.css') }}">
<div class="modal fade" id="image_cropper" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Upload Image</h5>
                <button type="button" class="close" style="border-color:transparent;background:transparent;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container-fluid p-0" onresize="">
                <img id="cropper" class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" data-angle="0"> 
            </div>
            <div class="modal-footer justify-content-between">
                <div class="col-3 d-flex flex-row btn-group me-1" role="group">
                    <button type="button" class="btn btn-info" onclick="rotateLeft()" disabled>
                        <i class="fa-solid fa-rotate-left"></i>
                    </button>
                    <button type="button" class="btn btn-info" onclick="rotateRight()" disabled>
                        <i class="fa-solid fa-rotate-right"></i>
                    </button>
                </div>
                <button type="button" class="col-3 btn btn-primary" onclick="submitImage()">Upload</button>
                </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.Jcrop.min.js') }}"></script>
<script src="{{ asset('js/jquery-rotate.js') }}"></script>
<script>
    var jcrop_api;
    var image_preview;
    $(document).ready(function () {
        $('#image_cropper').modal({
            backdrop: 'static',
        });

        $(window).on('resize', function () {
            if(jcrop_api.getOptions().boxWidth != $('.modal-body').width()) {
                jcrop_api.destroy();
                $('#cropper').removeAttr('style');
                initiateCropper();
                
            }
        })
        
    });

    function rotateRight() {
        var $img = $('#cropper');
        $img.attr('data-angle', parseInt($img.attr('data-angle')) + 90);
        if($img.attr('data-angle') == 360) $img.attr('data-angle', 0);

        jcrop_api.setOptions({
            rotate: $img.attr('data-angle')
        })
        $('.jcrop-holder').rotate(parseInt($img.attr('data-angle')));
    }

    function rotateLeft() {
        var $img = $('#cropper');
        $img.attr('data-angle', parseInt($img.attr('data-angle')) - 90);
        if($img.attr('data-angle') == -90) $img.attr('data-angle', 270);

        jcrop_api.setOptions({
            rotate: $img.attr('data-angle')
        })
        $('.jcrop-holder').rotate(parseInt($img.attr('data-angle')));
    }

    function cropImage(event) {
        
        $('#cropper').attr('src', URL.createObjectURL(event.files[0]));
        $('#cropper').data('target', $(event).attr('name'))
        $('#cropper').removeAttr('style');
        $('#image_cropper').modal('toggle');
    }

    function submitImage() {
        cropper = $('#cropper');
        console.log("FUCK", image_preview, cropper)
        image_preview.attr('src', cropper.attr('src')); 

        //var [boundx, boundy] = jcrop_api.getBounds();
        //var c = jcrop_api.getOptions();
        $('#image_cropper').modal('toggle');
        /**image_preview.css({
            width: Math.round(c.rx * boundx) + 'px',
            height: Math.round(c.ry * boundy) + 'px',
            marginLeft: '-' + Math.round(c.rx * c.x) + 'px',
            marginTop: '-' + Math.round(c.ry * c.y) + 'px'
        });**/
    }

    function saveCoords(c) {
        if (jcrop_api && parseInt(c.w) > 0) {
            jcrop_api.setOptions({
                rx: image_preview.parent().width() / c.w,
                ry: image_preview.parent().height() / c.h,
                x : c.x,
                y : c.y,
            })
        }
    }

    function initiateCropper() {
        $('#cropper').Jcrop({
            boxWidth: $('.modal-body').width(),
            setSelect: [0, $('#cropper').width(), $('#cropper').height(), 0],
            rotate: 0,
            aspectRatio: 3/2,
            onSelect: saveCoords
        }, function() {
            jcrop_api = this;
            image_preview = $('#' + $('#cropper').data('target') + '_preview');
        });
        console.log(image_preview)
    }

    $('#image_cropper').on('hidden.bs.modal', function (e) {
        //jcrop_api.destroy();
    });
    $('#image_cropper').on('shown.bs.modal', function () {
        image_preview = $('#' + $('#cropper').data('target') + '_preview');
        //initiateCropper();
        $('.jcrop-holder').data('angle', 0);
    });
</script>