$(document).ready(function () {
    $('#search').on('click keyup',function () {
        $("#autocomplete-dropdown").empty();
        let value = $(this).val();
        if (value != '') {
            $.ajax("", {
                url: "/autocomplete",
                method: "GET",
                dataType: 'json',
                data: {name: value},
                success: function (data) {
                    if (data.length > 0) {
                        for (let i = 0; i < data.length; i++) {
                            let op = `<span class="dropdown-item">${data[i]}</span>`;
                            $("#autocomplete-dropdown").append(op);
                        }
                        $("#autocomplete-dropdown").show();
                    }
                    else{
                        $("#autocomplete-dropdown").hide();
                    }

                }
            })
        }
        else
        {
            $("#autocomplete-dropdown").hide();
        }
    })
    $(window).click(function() {
        $("#autocomplete-dropdown").hide();
    });
    $("#autocomplete-dropdown").on("click", ".dropdown-item", function() {
        $('#search').val($(this).text());
        $('#search').focus();
    })


})
