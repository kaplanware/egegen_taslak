<script>
    function kaplanware (url,form_id,btn) {
        // btn.attr('disabled','disabled');
        html = btn.html();
        btn.html('<?= site_phrase("please_wait") ?>...');
        var formData = new FormData($("#" + form_id)[0]);
        if(btn.attr("name") == "signin" || btn.attr("name") == "register")
            formData.append("formType", btn.attr("name"));
        $.ajax({
            url: url,
            type: "POST",
            data : formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(result){
                pntfy(result.title, result.message, result.status);
                btn.attr('disabled',false);
                btn.html(html);
                if(result.status == 1)
                    $('#' + form_id)[0].reset();
            }
        });
    }

    function pntfy(title, text, status, link = "", type = ""){
        if(status == 0){
            new PNotify({
                title: title,
                text: text,
                icon: 'icon-x',
                addclass: 'bg-danger border-danger'
            });
        }
        else if(status == 1){
            new PNotify({
                title: title,
                text: text,
                icon: 'icon-checkmark3',
                addclass: 'bg-success border-success'
            });
        }
        else if(status == 2){
            new PNotify({
                title: title,
                text: text,
                icon: 'icon-checkmark3',
                addclass: 'bg-success border-success'
            });
            setTimeout(function(){
                location.reload();
            }, 1500);
        }
        else if(status == 3){
            setTimeout(function(){
                location.reload();
            }, 1500);
        }
        else if(status == 4){
            setTimeout(function(){
                window.location.href = "<?= base_url("login/create_password") ?>";
            }, 1500);
        }
        else if(status == 5){
            new PNotify({
                title: title,
                text: text,
                icon: 'icon-checkmark3',
                addclass: 'bg-success border-success'
            });
            setTimeout(function(){
                location.reload();
            }, 500);
        }
        else if(status == 6){
            new PNotify({
                title: title,
                text: text,
                icon: 'icon-checkmark3',
                addclass: 'bg-success border-success'
            });
            setTimeout(function(){
                window.location.href = '<?= $this->session->userdata("temp_token") ?>';
            }, 5500);
        }
        else if(status == 7){
            location.reload();
        }
</script>