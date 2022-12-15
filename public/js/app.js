$(document).ready(function () {
    dropdownSelector();
    othersSelectInput();
});

function isNumeric(str) {
    if (typeof str != "string") return false // we only process strings!  
    return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
           !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
  }

///////////////////////////////////////////////////////////////////////////
// Fix for # href
var aWithHref = document.querySelectorAll('a[href*="#"]');
aWithHref.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.preventDefault();
    })
});
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Go Back
var goBackButton = document.querySelectorAll(".goBack");
goBackButton.forEach(function (el) {
    el.addEventListener("click", function () {
        window.history.go(-1);
    })
})
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Loader
document.addEventListener('DOMContentLoaded', function () {
    console.log("TEST")
    var loader = document.getElementById("loading");
    setTimeout(() => {
        var searchboxOpacity = 1;
        var fadeAnimation = setInterval(() => {
            if (searchboxOpacity <= 0.05) {
                clearInterval(fadeAnimation);
                loader.style.opacity = "0";
                loader.style.display = "none";
            }
            loader.style.opacity = searchboxOpacity;
            loader.style.filter = "alpha(opacity=" + searchboxOpacity * 100 + ")";
            searchboxOpacity = searchboxOpacity - searchboxOpacity * 0.5;
        }, 30);
    }, 500);
})
///////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
// Sidebar 
var toggleSidebar = document.querySelectorAll(".toggleSidebar");
var body = document.querySelector("body");
var sidebar = document.querySelector(".sidebarWrapper .sidebar");
var sidebarWrapper = document.querySelector(".sidebarWrapper")
toggleSidebar.forEach(function(el){
    el.addEventListener("click", function(){
        sidebarWrapper.classList.toggle("is-active")
        if(body.classList.contains("sidebarActive")){
            body.classList.remove("sidebarActive")
        }
        else{
            body.classList.add("sidebarActive")
        }
        if(sidebar.classList.contains("is-active")){
            sidebar.classList.remove("is-active")
            sidebar.classList.add("is-passive")
        }
        else{
            sidebar.classList.add("is-active")
        }
    })
})
///////////////////////////////////////////////////////////////////////////

function dropdownSelector() {
    var datalists = $('datalist')
    $.each($('.dropdown-selector'), function (key, val) {
        var datalist = $('#' + $(this).attr('list'));
        var next_datalist = $(datalists[$(datalists).index(datalist) + 1])
        
        if(!datalist.data('route')) return;
        $(this).on('change', function (e) {
            var option = datalist.find('[value="' + this.value + '"]');
            if(!option.data('id')) return false;
            $.ajax({
                type: 'POST',
                url: datalist.data('route') + '/' + option.data('id'),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                dataType: 'application/json',
                data: JSON.stringify({
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                }),
                statusCode: {
                    200: function (response) {
                        var objects = JSON.parse(response.responseText);
                        next_datalist.html('');
                        $.each(objects, function (key, val) {
                            next_datalist.append('<option value="' + val[next_datalist.data('identifier')+'_name'] +'" data-id="' + val[next_datalist.data('identifier')+'_id'] + '" >');
                        });
                    }
                },
            });
        });
    });
}

function othersSelectInput(event) {
    $.each($('select'), function (key, val) {
        var select = $(this);
        

        select.on('change', function (e) {
            if($("option:selected", this).val() == others_option.val()) {
                select.hide();
                others_input.show();
                others_input.focus();
            }
        })

        if(select.attr('value') && isNumeric(select.attr('value'))) {
                $('option[value=' + select.attr('value') + ']', this).attr('selected', 'true');
                
        }

        if(select.hasClass('select-others')) {
            var others_option = $(this).children().last();
            var others_input  = $(this).next('input');

            others_input.hide();

            others_input.focusout(function (e) {
                if(others_input.val()) return false;
                select.show();
                others_input.hide();
            })

            if(select.attr('value') && !isNumeric(select.attr('value'))) {
                others_option.attr('selected', 'true');
                select.hide()
                others_input.show()
            }
        }
    });
}