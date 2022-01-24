$(document).ready(function () {
    $('#search').keyup(function (){
        let value = $(this).val();
        if(value != ''){
            $.ajax("",{
                url:"file.disk/files",
                method:"GET",
                data:{search:value},
                success:function (data){
                    data = JSON.parse(data);
                }
            })
        }
    })
})
