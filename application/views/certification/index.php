<section class="bgSection pi-background-mainColor pi-text-light">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="widgetContainer">
                    <div class="headingContainer heading-1 text-left">
                        <h1>正品查询</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bgSection">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="widgetContainer">
                    <div class="textContainer">
                        <!-- <h1 class="wysiwyg-text-align-left">正品查询</h1> -->
                        <p class="wysiwyg-text-align-left">请输入代理商的QQ号，或者手机号，或者微信号，来查询代理商认证，以确保您买到的是正品。</p>
                    </div>
                </div>
                <div class="formContainer">
                    <!-- <form accept-charset="UTF-8" action="<?php echo base_url();?>certification/check" class="simple_form new_newsletter_subscription" id="new_newsletter_subscription" method="post" novalidate="novalidate"> -->
                        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="xskjG4lfLrLRdhc3wtJaDBa031eBDtwSkY+bsUn7lA0="></div>
                        <h3 class="text-left"></h3>
                        <input id="resource_id" name="resource_id" type="hidden" value="548863e24c4aa7d69b000019"><input id="page_id" name="page_id" type="hidden" value="54885cb888a54a7f91000003">
                        <div class="row-fluid text-left">
                            <div class="control-group required newsletter_subscription_email">
                                <div class="controls">
                                    <div class="input-append">
                                        <input class="string email required span7" id="" name="keyword" placeholder="QQ/手机号/微信号" size="50" type="text">
                                        <input class="btn btn btn-primary" name="commit" type="button" value="查询">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="widgetContainer hide" id="certification">
                    <div class="imageContainer">
                        <div class="noLinkImage img-polaroid"><img alt="cert_1" src="<?php echo base_url();?>static/certification/default_certification.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        $('input[name="commit"]').on('click', function(event){
            var keyword = $('input[name="keyword"]').val();
            $.ajax({
                url: '<?php echo base_url();?>certification/check',
                type: "POST",
                data: {keyword: keyword}
            }).done(function(data) {
                if(data != ''){
                    $('#certification').find('img').attr('src', data);
                    $('#certification').removeClass('hide');
                }else{
                    $('#certification').find('img').attr('src', '');
                    $('#certification').addClass('hide');
                    alert('此代理商未经过诺亿授权！')
                }
            });
        });
    });
</script>
                