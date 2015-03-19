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
                        <p class="wysiwyg-text-align-left">
                        请输入代理商的微信号查询代理商认证，以确保您买到的是正品。</p>
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
                                        <!-- <input class="btn btn btn-primary" name="commit" type="button" value="xx"> -->
                                        <!-- Single button -->
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span id="current_val">QQ号</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" id="query_select">
                                                <li><a href="#" data-binding="qq">QQ号</a></li>
                                                <li><a href="#" data-binding="phone">手机号</a></li>
                                                <li><a href="#" data-binding="wechat">微信号</a></li>
                                            </ul> -->
                                            <input class="string email required" id="" name="keyword" placeholder="微信号码" type="text" style="height:27px;">
                                            <input class="btn btn btn-primary" name="commit" type="button" value="查询">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="widgetContainer hide" id="certification">
                    <div class="imageContainer">
                        <div class="noLinkImage img-polaroid"><img alt="认证"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        // var query_type = 'qq';

        $('input[name="commit"]').on('click', function(event){
            var keyword = $('input[name="keyword"]').val();
            $.ajax({
                url: '<?php echo base_url();?>certification/check',
                type: "POST",
                data: {keyword: keyword}
                // data: {keyword: keyword, type: query_type}
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

        // $('#query_select li a').click(function(){
        //     $('#current_val').html($(this).html());
        //     query_type = $(this).attr('data-binding');
        // });
    });
</script>
                