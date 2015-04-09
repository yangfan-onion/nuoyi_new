<section class="bgSection pi-background-mainColor pi-text-light">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="widgetContainer">
                    <div class="headingContainer heading-1 text-left">
                        <h1>联系我们</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bgSection">
    <div class="container">
        <div class="row">
            <div class="span8">
                <div class="formContainer">
                    <form accept-charset="UTF-8" action="<?php echo base_url();?>contact/send_email" class="simple_form new_contact" id="new_contact" method="post" novalidate="novalidate">
                        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="PR8XSqPaO1qxYfaDTsUev0l0SZqiKAz6rFjUSb+gvSE=" /></div>
                        <h3>欢迎您与我们联系</h3>
                        <div class="control-group string optional name">
                            <label class="string optional control-label" for="name">姓名</label>
                            <div class="controls"><input class="string optional" id="name" name="contact[name]" size="50" type="text" /></div>
                        </div>
                        <div class="control-group email optional contact_email">
                            <label class="email optional control-label" for="contact_email">邮箱</label>
                            <div class="controls"><input class="string email optional" id="contact_email" name="contact[email]" size="50" type="email" /></div>
                        </div>
                        <div class="control-group string optional contact_phone_number">
                            <label class="string optional control-label" for="contact_phone_number">联系电话</label>
                            <div class="controls"><input class="string optional" id="contact_phone_number" name="contact[phone_number]" size="50" type="text" /></div>
                        </div>
                        <div class="control-group string optional contact_subject">
                            <label class="string optional control-label" for="contact_subject">主题</label>
                            <div class="controls"><input class="string optional" id="contact_subject" name="contact[subject]" size="50" type="text" /></div>
                        </div>
                        <div class="control-group text optional contact_message">
                            <label class="text optional control-label" for="contact_message">内容</label>
                            <div class="controls"><textarea class="text optional" cols="40" id="contact_message" name="contact[message]" rows="20">
                                </textarea>
                            </div>
                        </div>
                        <input id="resource_id" name="resource_id" type="hidden" value="547f1cf788a54acb2800003f" /><input id="page_id" name="page_id" type="hidden" value="54772702ea33473ef3000185" /><input class="btn btn-primary" type="submit" value="发送" />
                    </form>
                </div>
            </div>
            <!-- <div class="span6">
                <div class="widgetContainer">
                    <div class="imageContainer">
                        <div class="noLinkImage"><img alt="dublinstreet" src="<?php echo base_url();?>static/image/contact/contact_us.png"></div>
                    </div>
                </div>
                <div class="widgetContainer">
                    <div class="textContainer">
                        <p>By 四川诺亿生物</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>