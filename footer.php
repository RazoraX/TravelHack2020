<footer id="twinparty-footer" role="contentinfo">
    <div class="container">
        <?php if ($page !== 'teach') {
            ?>
            <div class="row pb-60">
                <form id="myForm" action="mail.php" method="post">
                    <div class="col-xs-2 plpr-0">
                        <div class="subscribe_icon">
                            <img src="images/sub_icon.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-6 plpr-0">
                        <label for="email"></label>
                        <input type="text" name="email" id="email" class="form-control subscribe_form"
                               placeholder="Ваша почта" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                               required="">
                    </div>
                    <div class="col-xs-4 plpr-0">
                        <button type="submit" class="btn btn-primary submit-btn subscribe_btn">Оставить заявку</button>
                    </div>
                    <div>
                        <p id="send_result" style="text-align: center; color: green"></p>
                    </div>
                </form>
            </div>
            <?php
        } ?>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                <ul class="twinparty-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                <small class="block"><a href="politica.html">Политика конфиденциальности</a><br>Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved.</small>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
<?php require_once 'scripts.php'; ?>
</body>
</html>
