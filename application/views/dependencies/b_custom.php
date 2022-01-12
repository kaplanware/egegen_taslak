<script>
    var res;
    function kaplanware (url,form_id,btn) {
        var formData = new FormData($("#" + form_id)[0]);
        $.ajax({
            url: url,
            type: "POST",
            data : formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(result){
                res = result;
                for(let i = 2; i >= 0; i--){
                    $("#box").remove();
                    $("#hr").remove();
                }

                $.each(result, function(key, arr){
                    if(arr != "end") {
                        setPost(arr)
                        if (key != (result.length) - 1)
                            hr();
                    }
                })

                let limit = $("input[name=limit]").val();
                if(result[result.length - 1] == "end")
                    $("input[name=limit]").val("3");
                else
                    $("input[name=limit]").val(parseInt(limit) + 3);
            }
        });
    }


    function setPost(par){
        $("blog").before(function(){
            return '<div class="col-md-12 row" id="box">\n'+
'        <div class="col-md-4">\n'+
'            <a href="<?= base_url("blog/") ?>' + par.slug +'">\n'+
'                <img src="<?= base_url("assets/img/blog/thumb/") ?>' + par.thumbnail +'" alt="" class="w-100">\n'+
'            </a>\n'+
'        </div>\n'+
'        <div class="col md-8 row">\n'+
'            <div class="col-md-12">\n'+
'                <a href="<?= base_url("blog/") ?>' + par.slug +'">\n'+
'                    <h4 class="font-weight-semibold">\n'+
'                        ' + par.title +'\n'+
'                    </h4>\n'+
'                </a>\n'+
'            </div>\n'+
'            <div class="col-md-12">\n'+
'                <p>\n'+
                     (par.content.length > 400 ? (par.content.substr(0,400)) + '<a href="<?= base_url("blog/") ?>' + par.slug +'">... <?= site_phrase("more") ?></a>' : par.content) + '\n' +
'                </p>\n'+
'            </div>\n'+
'        </div>\n'+
'    </div>';
        });
    }

    function hr(){
        $("blog").before(function(){
            return '<div class="col-md-10 offset-1" id="hr">\n' +
                '            <hr>\n' +
                '        </div>';
        });
    }

    function getOption(par){
        window.location.href = '<?= base_url("home/language/") ?>' + par.val();
    }

</script>