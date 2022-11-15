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
    $(document).ready(function () {
        $('#image_cropper').modal({
            backdrop: 'static',
        });

        $(window).on('resize', function () {
            if($('#cropper').data('Jcrop').getOptions().boxWidth != $('.modal-body').width()) {
                $('#cropper').data('Jcrop').destroy();
                $('#cropper').removeAttr('style');
                $('#cropper').Jcrop({
                    boxWidth: $('.modal-body').width(),
                    rotate: 0,
                });
            }
        })
    });

    function rotateRight() {
        var $img = $('#cropper');
        $img.attr('data-angle', parseInt($img.attr('data-angle')) + 90);
        if($img.attr('data-angle') == 360) $img.attr('data-angle', 0);

        $('#cropper').data('Jcrop').setOptions({
            rotate: $img.attr('data-angle')
        })
        $('.jcrop-holder').rotate(parseInt($img.attr('data-angle')));
    }

    function rotateLeft() {
        var $img = $('#cropper');
        $img.attr('data-angle', parseInt($img.attr('data-angle')) - 90);
        if($img.attr('data-angle') == -90) $img.attr('data-angle', 270);

        $('#cropper').data('Jcrop').setOptions({
            rotate: $img.attr('data-angle')
        })
        $('.jcrop-holder').rotate(parseInt($img.attr('data-angle')));
    }

    function cropImage(event) {
        $('#cropper').attr('src', URL.createObjectURL(event.files[0]));
        $('#cropper').data('target', $(event).attr('name'))
        $('#cropper').removeAttr('style');
        $('#image_cropper').modal('toggle');

        $('#image_cropper').on('shown.bs.modal', function () {
            $('#cropper').Jcrop({
                boxWidth: $('.modal-body').width(),
                setSelect: [0, $('#cropper').width(), $('#cropper').height(), 0],
                rotate: 0,
            });

            $('.jcrop-holder').data('angle', 0);
        });
    }

    function submitImage(event) {
        $image_preview = $($('#cropper').data('target') + '_preview');
        console.log($('#cropper').data('Jcrop'))
    }

    $('#image_cropper').on('hidden.bs.modal', function (e) {
        $('#cropper').data('Jcrop').destroy();
    });
</script>