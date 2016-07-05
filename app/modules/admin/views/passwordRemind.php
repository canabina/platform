<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class=" form">
            <section class="login_content">
                <form method='post'>
                    <h1>Напомнить пароль</h1>
                    <?php if(isset($message['status'])): ?><h5 style='color: <?php $message['status'] == 'error' ? 'red' : 'green' ?>;'><?= $message['body'] ?></h5><?php endif; ?>
                    <div>
                        <input type="text" class="form-control" placeholder="Логин" name='username'  autofocus />
                    </div>
                    <div>
                        <input type="text" class="form-control " placeholder="Код с картинки" name='recaptcha'  autofocus />
                        <img src="<?= $recaptchaSrc ?>" alt="" style='float: left;'>
                    </div>
                    <div>
                        <button type='submit' class="btn btn-default submit">Напомнить</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">Хотите помочь проекту?
                            <a href="/feedback" class="to_register"> Оставьте заявку </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="" style="font-size: 26px;"></i>При поддержке <a href='https://onix-systems.com/' target='__blank' style='color: #6BA3FD; font-size: inherit;'>Onix-Systems</span></h1>

                            <p>©2015 Onix-Systems.com</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
