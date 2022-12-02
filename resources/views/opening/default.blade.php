@extends('home')

@section('content')
<div class="container-fluid d-flex flex-column justify-content-center p-lg-5">
    <div class="container col-sm-8">
        <div id="carouselForm" class="carousel slide mt-2 mb-4" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
            @section('header')
            <div class="w-75 m-auto" data-bs-ride="carousel">
                <div class="col progress mb-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        
                    </div>
                </div>
            </div>
            @endsection
            <div class="carousel-inner">
                <form id="personalInfoForm" enctype="multipart/form-data">
                @csrf
                <div class="carousel-item active">
                    @include('opening.personal_info')
                </div>
                <div class="carousel-item">
                    @include('opening.address')
                </div>
                <div class="carousel-item">
                    @include('opening.relationship')
                </div>
                <div class="carousel-item">
                    @include('opening.occupation')
                </div>
                <div class="carousel-item">
                    @include('opening.additional_info')
                </div>
                <div class="carousel-item">
                    @include('opening.bank')
                </div>
                </form>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <button class="btn btn-primary col-lg-5 m-1" id="prevBtn" href="#carouselForm" data-bs-slide="prev"><span>Kembali</span></button>
                <button class="btn btn-primary col-lg-5 m-1" id="nextBtn" type="submit" form="personalInfoForm"><span>Selanjutnya</span></button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="container-fluid">
    <ul id="carousel_indicators" class="d-flex flex-row list-unstyled text-center">
        <li class="container col">
            <div class="w-100 item active">Data Pribadi</div>
        </li>
        <li class="container col">
            <div class="w-100 item">Alamat Nasabah</div>
        </li>
        <li class="container col">
            <div class="w-100 item">Keluarga dan Ahli Waris</div>
        </li>
        <li class="container col">
            <div class="w-100 item">Pekerjaan atau Perusahaan</div>
        </li>
        <li class="container col">
            <div class="w-100 item">Informasi Tambahan</div>
        </li>
        <li class="container col">
            <div class="w-100 item">Rekening Pribadi</div>
        </li>
    </ul>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var total_width = $('.progress').width();
        var user_progress = "{{ Auth::user()->form_step }}";
        

        $('#carousel_indicators li').each(function (i, element) {
            if((i+1) <= user_progress) {
                $(element).attr('data-bs-target', '#carouselForm');
                $(element).attr('data-bs-slide-to', i);
            }
        });

        var carousel = $('#carouselForm');
        var carousel_indicator = $('#carousel_indicators li div');
        carousel.on('slide.bs.carousel', function (e) {
            if((e.to === -1) && (e.from === -1)) return false;
            $(carousel_indicator[e.from]).removeClass('active')
            $(carousel_indicator[e.to]).addClass('active')
        });

        $('#home_ktp_address_same').on('change', function (e) {
            if(!$(this).is(':checked')) {
                $('#cust_home_address').show();
                $('#cust_other_address').show();
                $('#cust_other_address_buttons').show();
            } else {
                $('#cust_home_address').hide();
                $('#cust_other_address').hide();
                $('#cust_other_address_buttons').hide();
            }
        })

        $("#personalInfoForm").submit(function (event) {
            event.preventDefault();
            document.getElementById('nextBtn').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
            var form = $('#personalInfoForm');
            var form_data = new FormData(this);
            form_data.append('step', $('.carousel-item.active').index()-1)
            console.log([...form_data.values()]);
            $.ajax({
                type: 'POST',
                url: '{{ route("investor.update") }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: form_data,
                processData: false,
                contentType: false,
                statusCode: {
                    200: function(response) {
                        console.log(response)
                        user_progress = form_data['step'] > response['data']['step'] ? form_data['step'] : user_progress;
                        $($('#carousel_indicators li')[user_progress]).attr('data-bs-target', '#carouselForm');
                        $($('#carousel_indicators li')[user_progress]).attr('data-bs-slide-to', user_progress);
                        $('.progress-bar').css("width", ((user_progress)/($('.carousel-item').length))*total_width)
                        carousel.carousel('next');
                    },
                    422: function(response) {
                        console.log("ERROR : ", response)
                        var error = JSON.parse(response.responseText)['errors'];
                        $('.appHeader')[0].scrollIntoView();
                        $.each(form_data, function(key, val) {
                            if(!(error[key])) {
                                $('#' + key + '_error').attr('hidden', 'true');
                            }
                            else {
                                console.log(key, val);
                                $('#' + key + '_error').text(error[key][0]);
                                $('#' + key + '_error').removeAttr('hidden');
                            }
                        });
                    }
                },
                complete: function(response) {
                    document.getElementById('nextBtn').innerHTML = "<span>Selanjutnya</span>"
                }
            });
        });

        $('input[type=file]').on('change', function (event) {
            cropImage(this)
        });

        $('#cust_other').on('change', function (event) {
            if($(this).find(":checked").val() == 1) {
                $('#cust_other_text').show();
            } else {
                $('#cust_other_text').hide();
            }
        })

        $('.progress-bar').css("width", (user_progress/$('.carousel-item').length)*total_width);
        carousel.carousel(Number(user_progress)-1);
    });

    /**function addAddress(event) {
        var other_address_list = $('#cust_other_address');
        if(other_address_list.children().length < 1) {
            other_address_list.append($('#cust_address_home').clone());
            dropdownSelector();
        }
    };

    function removeAddress(event) {
        $('#cust_other_address').children().last().remove();
    };**/
</script>
@endsection

@section('modals')
@include('modal.image-cropper')
@endsection